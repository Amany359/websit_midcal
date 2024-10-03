<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = service::all();
          return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
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

        service::create($request->all());

        return redirect()->route('service.index')
                         ->with('success', ' created successfully.');
        }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.service.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, service $service)
    {
        $request->validate([
            "name" => ["required", "string" ],
            "description" => ["required", "string" ],
        ]);

        $service->update($request->all());

        return redirect()->route('service.index')
                         ->with('success', 'target updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service)
    {
        $service->delete();
        return redirect()->route('service.index');
    }
}
