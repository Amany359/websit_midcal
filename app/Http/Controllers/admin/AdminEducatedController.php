<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Educated;
class AdminEducatedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educateds = educated::all();
          return view('admin.educated.index', compact('educateds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.educated.create');
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

        educated::create($request->all());

        return redirect()->route('educated.index')
                         ->with('success', ' created successfully.');
        }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.educated.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(educated $educated)
    {
        return view('admin.educated.edit', compact('educated'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, educated $educated)
    {
        $request->validate([
            "name" => ["required", "string" ],
            "description" => ["required", "string" ],
        ]);

        $educated->update($request->all());

        return redirect()->route('educated.index')
                         ->with('success', 'target updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(educated $educated)
    {
        $educated->delete();
        return redirect()->route('educated.index');
    }
}
