<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Inquary;
use App\Notifications\InquiryNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class InquaryController extends Controller
{
    public function index(Request $request)
    {
        $query = Inquary::query();
        $query = $query->with('package');

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('email', 'like', '%' . $searchTerm . '%')
                  ->orWhere('mobile', 'like', '%' . $searchTerm . '%')
                  ->orWhere('type', 'like', '%' . $searchTerm . '%');
            });
        }
        $datas = $query->orderByDesc('id')->paginate(15);
        return view('admin.inquiry.index', compact('datas'));
    }


    public function seeAllNotification(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $admin->unreadNotifications->markAsRead();
        $query = Inquary::query();
        $query = $query->with('package');
        $datas = $query->orderByDesc('id')->paginate(15);
        return view('admin.inquiry.index', compact('datas'));
    }


    public function seeSingleNotification($notificationID)
    {
        $admin = Auth::guard('admin')->user();
        $notifyData = $admin->notifications->where('id',$notificationID)->first();
        $notifyData->markAsRead();
        $query = Inquary::query();
        $query = $query->with('package');
        $datas = Inquary::with('package')->where('id',$notifyData->data['id'])->orderByDesc('id')->paginate(15);
        return view('admin.inquiry.index', compact('datas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['bail','required'],
            'mobile' => ['bail','required'],
            'type' => ['bail','required'],
            'package_id' => ['bail','required'],
            'email' => "",
            'message' => "",
        ],

        );
        $inquiry =Inquary::create( $validated);
        $admin = Admin::all();
        Notification::send($admin, new InquiryNotification($inquiry));
        return redirect()->route('home')->with('success', 'Your inquire added successfully');
    }

    public function destroy(Inquary $inquary)
    {
        $inquary->delete();
        return redirect()->route('admin-inquire.index')->with('error', 'inquiry deleted successfully');
    }

}
