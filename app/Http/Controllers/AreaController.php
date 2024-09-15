<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Area::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        $datas = $query->orderByDesc('id')->paginate(15);
        return view('admin.area.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.area.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['bail','required'],
        ],

        );
        Area::create( $validated);
        return redirect()->route('admin-area.index')->with('success', 'area created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        $data = $area;
        return view('admin.area.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $validated = $request->validate([
            'name' => ['bail','required'],
        ],

        );
        $area->update( $validated);
        return redirect()->route('admin-area.index')->with('success', 'area created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('admin-area.index')->with('error', 'area deleted successfully');
    }
}
