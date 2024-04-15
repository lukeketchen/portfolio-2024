<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
//        auth()->check();
//
//        $userId = auth()->check() ? auth()->id() : null;
//
        $id = Auth::id();

        dd($id);

        $data = auth()->user();


//        $data = Project::all();

        return response()->json([
            'data' => $data,
            'response_code' => 200,
            'message' => 'Success'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return response()->json([
            'message' => 'Not Found'
        ], 404);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = Project::find($id);

        return response()->json([
            'data' => $data,
            'response_code' => 200,
            'message' => 'Success'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        return response()->json([
            'message' => 'Not Found'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        return response()->json([
            'message' => 'Not Found'
        ], 404);
    }
}
