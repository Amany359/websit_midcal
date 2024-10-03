<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
class AdminAchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = achievement::all();
          return view('admin.achievement.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required", "string" ],
            "description" => ["required", "string" ],
        ]);

        achievement::create($request->all());

        return redirect()->route('achievement.index')
                         ->with('success', ' created successfully.');
        }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.achievement.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(achievement $achievement)
    {
        return view('admin.achievement.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, achievement $achievement)
    {
        $request->validate([
            "name" => ["required", "string" ],
            "description" => ["required", "string" ],
        ]);

        $achievement->update($request->all());

        return redirect()->route('achievement.index')
                         ->with('success', 'target updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(achievement $achievement)
    {
        $achievement->delete();
        return redirect()->route('achievement.index');
    }
}