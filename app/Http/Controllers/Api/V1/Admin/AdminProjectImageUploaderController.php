<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Api\BaseController;
use App\Models\Project;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminProjectImageUploaderController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return $this->sendError('Not Found');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $model = Project::find($request->get('project_id'));
        if (!$model) {
            return $this->sendError('Model not found');
        }
        try {

            $image = $request->file('image_file');

            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = storage_path('app/public/images');
            $image->move($destinationPath, $name);
            $model->image_url = '/images/' . $name;
            $model->save();

            return $this->sendResponse($model, 'Success model created');
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), $e, 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return $this->sendError('Not Found');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        return $this->sendError('Not Found');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        return $this->sendError('Not Found');
    }
}
