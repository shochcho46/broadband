<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Area;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Inquary;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Propaganistas\LaravelPhone\PhoneNumber;
use Propaganistas\LaravelPhone\Rules\Phone;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{

    public function adminLogin()
    {
        $datas = Country::all();
        $genders = Gender::all();
        return view('auth.admin.login',compact('datas','genders'));

    }

    public function adminValidateLogin(Request $request)
    {

        $countryIso = Country::where('id',18)->first();

        $validated = $request->validate([
            'email_or_phone' => ['bail','required'],
            'password' => 'required',
            ],
            [
                'email_or_phone.regex' => 'The phone number must contain only English digits (0-9).',
                'email_or_phone.required' => 'The phone number is required',
            ]
        );

        if (filter_var($request->email_or_phone, FILTER_VALIDATE_EMAIL)) {

            $credential = array("email" => $request->email_or_phone, "password" => $request->password);
        }
        else
        {
            $phoneNumber = validationMobileNumber($request->email_or_phone,$countryIso->iso);
            $credential = array("phone" => $phoneNumber, "password" => $request->password);
        }

        if (Auth::guard('admin')->attempt($credential)) {

            $user = Auth::guard('admin')->user();

            if (($user->status == 0)) {

                return back()->with('fail', 'This account is in black listed');
            } else {

                return redirect()->route('admin.dashboard');
            }

        }


        else
        {
            return back()->with('fail', 'Wrong Credential');
        }
    }
    public function dashboard()

    {
        $area = Area::count();
        $package = Package::count();
        $inquiry = Inquary::count();
        $visitor = Cache::get('unique_visitor_count', 0);
        return view('admin.dashboard',compact('area','package','inquiry','visitor'));
    }

    public function getProfile()
    {
        $user = Auth::guard('admin')->user();
        return view('admin.profile.create',compact('user'));
    }

    public function updateProfile(Request $request, Admin $admin)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'required|confirmed',  // Make password nullable for updates
            'password_confirmation' => 'required',
            'current_password' => 'required|current_password:admin',
            'phone' => [
                'required',
                'regex:/^[0-9+]+$/',
                'unique:admins,phone,' . $admin->id,
                (new Phone)->country(['BD'])
            ],
        ],
        [
            'phone.regex' => 'The phone number must contain only English digits (0-9).',
            'phone.required' => 'The phone number is required',
        ]
    );
        $admin->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('profile')) {
            $admin->clearMediaCollection('profile');
            $admin->addMedia($request->profile)->toMediaCollection('profile');
        }

        $user = $admin;
        return redirect()->route('admin.getProfile');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('adminLogin');
    }
}
