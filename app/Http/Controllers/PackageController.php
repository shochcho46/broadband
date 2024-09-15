<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Package::with('packageDetail')->paginate(15);
        return view('admin.package.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['bail','required'],
            'amount' => ['bail','required'],
            'group_option' => 'required',
            'group_option.*' => 'required',
        ],

        );

       $pollDetail = DB::transaction(
            function () use ($request) {

                $insertData = array(
                    "title" => $request->title,
                    "amount" => $request->amount,
                );

               $createPollDetail = Package::create( $insertData);

               foreach ($request->group_option as $key => $value) {
                $storeData[$key]['title']=$value['option'];
                $storeData[$key]['package_id']= $createPollDetail->id;
                $storeData[$key]['created_at']= Carbon::now();
                $storeData[$key]['updated_at']=  Carbon::now();
             }
                PackageDetail::insert($storeData);

                return $createPollDetail;
            }
        );

        return redirect()->route('admin-package.index')->with('success', 'package created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        $data = $package;
        return view('admin.package.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'title' => ['bail','required'],
            'amount' => ['bail','required'],
            'group_option' => 'required',
            'group_option.*' => 'required',
        ]);

        DB::transaction(function () use ($request, $package) {


            // Update poll details including pollable_id and pollable_type
            $updateData = [
                "title" => $request->title,
                "amount" => $request->amount,

            ];

            $package->update($updateData);

            // Delete old poll options
            PackageDetail::where('package_id', $package->id)->delete();

            // Insert new poll options
            $storeData = [];
            foreach ($request->group_option as $key => $value) {
                $storeData[] = [
                    'title' => $value['option'],
                    'package_id' => $package->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
            PackageDetail::insert($storeData);
        });

        return redirect()->route('admin-package.index')->with('success', 'package updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        DB::transaction(function ()  use ($package){
            $package->packageDetail()->delete();
            $package->delete();
        });


        return redirect()->route('admin-package.index')->with('error', 'package and its details deleted successfully');
    }
}
