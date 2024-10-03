<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = Option::all();
        return response()->json([
            'success' => true,
            'data' => $options
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => ["required", "string"]
        ]);

        $option = Option::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Option created successfully.',
            'data' => $option
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $option = Option::find($id);

        if (!$option) {
            return response()->json([
                'success' => false,
                'message' => 'Option not found'
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'data' => $option
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    $option = Option::find($id);

    if (!$option) {
        return response()->json([
            'success' => false,
            'message' => 'Option not found'
        ], Response::HTTP_NOT_FOUND);
    }

    $request->validate([
        "title" => ["required", "string"]
    ]);

    $option->update($request->all());

    return response()->json([
        'success' => true,
        'message' => 'Option updated successfully.',
        'data' => $option
    ], Response::HTTP_OK);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $option = Option::find($id);

        if (!$option) {
            return response()->json([
                'success' => false,
                'message' => 'Option not found'
            ], Response::HTTP_NOT_FOUND);
        }

        $option->delete();

        return response()->json([
            'success' => true,
            'message' => 'Option deleted successfully.'
        ], Response::HTTP_OK);
    }
}
