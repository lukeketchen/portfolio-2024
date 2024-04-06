<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $data = Project::all();

        return response()->json([
            'data' => $data,
            'response_code' => 200,
            'message' => 'Success'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return response()->json([
            'message' => 'Not Found'
        ], 404);
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
    public function show(int $id): JsonResponse
    {
        $data = Project::find($id);

        return response()->json([
            'data' => $data,
            'response_code' => 200,
            'message' => 'Success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        return response()->json([
            'message' => 'Not Found'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        return response()->json([
            'message' => 'Not Found'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        return response()->json([
            'message' => 'Not Found'
        ], 404);
    }
}
