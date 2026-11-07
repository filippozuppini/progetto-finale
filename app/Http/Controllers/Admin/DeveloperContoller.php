<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers = Developer::with('games')->orderBy('name')->get();

        return view('admin.developers.index', compact('developers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.developers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newDeveloper = new Developer();

        $newDeveloper->name = $data['name'];
        $newDeveloper->email = $data['email'];
        $newDeveloper->country = $data['country'];

        $newDeveloper->save();

        return redirect()->route('admin.developers.show', $newDeveloper);

    }

    /**
     * Display the specified resource.
     */
    public function show(Developer $developer)
    {
        return view('admin.developers.show', compact('developer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Developer $developer)
    {
        return view('admin.developers.edit', compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Developer $developer)
    {
        $data = $request->all();

        $developer->name = $data['name'];
        $developer->email = $data['email'];
        $developer->country = $data['country'];

        $developer->save();

        return redirect()->route('admin.developers.show', $developer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Developer $developer)
    {
        $developer->delete();

        return redirect()->route('admin.developers.index');
    }
}
