<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Duration;
use Illuminate\Http\Request;

class DurationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $durations = Duration::paginate();
        return view('admin-dashboard.durations.index', compact('durations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-dashboard.durations.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $duration =new Duration();
        $duration->month= request()->month;
        $duration->save();
        return redirect()->route('durations.index')->with('success', 'Duration created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Duration $duration)
    {
        return view('admin-dashboard.durations.edit', compact('duration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Duration $duration)
    {
        $duration->month = request()->month;
        $duration->update();
        return redirect()->route('durations.index')->with('success', 'Duration updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Duration $duration)
    {
        $duration->delete();
        return redirect()->route('durations.index')->with('success', 'Duration deleted successfully.');
    }
}
