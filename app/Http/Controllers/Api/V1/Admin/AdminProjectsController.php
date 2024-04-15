<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Api\BaseController;
use App\Models\Project;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminProjectsController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $data = Project::all();

        return $this->sendResponse($data, 'Success', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $dataArray = [
            'title' => [
                'required',
                'string',
            ],
            'short_description' => [
                'required',
                'string',
            ],
            'description' => [
                'required',
                'string',
            ],
            'content' => [
                'required',
                'string',
            ],
            'image_url' => [
                'nullable',
                'string',
            ],
            'github_url' => [
                'nullable',
                'string',
            ],
            'demo_url' => [
                'nullable',
                'string',
            ],
            'technologies' => [
                'nullable',
                'string',
            ],
            'duration' => [
                'nullable',
                'string',
            ],
            'framework' => [
                'nullable',
                'string',
            ],
            'start_date' => [
                'required',
                'date',
            ],
            'is_active' => [
                'boolean',
            ]
        ];

        $validator = Validator::make($request->all(), $dataArray);

        if ($validator->fails()) {
            return $this->sendError('Validator error: ', $validator->errors(), 400);
        } else {
            try {
                $model = new Project();
                foreach ($dataArray as $key => $validationRule) {
                    if ($key !== 'is_active') {
                        $model->$key = $request->get($key);
                    }
                }

                $model->status = $request->get('is_active') ? 'active' : 'draft';
                $model->save();

                return $this->sendResponse($model, 'Success model created');
            } catch (Exception $e) {
                return $this->sendError($e->getMessage(), $e, 400);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = Project::find($id);

        return $this->sendResponse($data, 'Success', 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $dataArray = [
            'title' => [
                'required',
                'string',
            ],
            'short_description' => [
                'required',
                'string',
            ],
            'description' => [
                'required',
                'string',
            ],
            'content' => [
                'required',
                'string',
            ],
            'image_url' => [
                'nullable',
                'string',
            ],
            'github_url' => [
                'nullable',
                'string',
            ],
            'demo_url' => [
                'nullable',
                'string',
            ],
            'technologies' => [
                'nullable',
                'string',
            ],
            'duration' => [
                'nullable',
                'string',
            ],
            'framework' => [
                'nullable',
                'string',
            ],
            'start_date' => [
                'required',
                'date',
            ],
            'is_active' => [
                'boolean',
            ]
        ];
        $validator = Validator::make($request->all(), $dataArray);

        if ($validator->fails()) {
            return $this->sendError('Validator error: ', $validator->errors(), 400);
        } else {

            $model = Project::find($id);
            if (!$model) {
                return $this->sendError('Model not found', [],);
            }
            try {
                foreach ($dataArray as $key => $validationRule) {
                    if ($key !== 'is_active') {
                        $model->$key = $request->get($key);
                    }
                }

                $model->status = $request->get('is_active') ? 'active' : 'draft';
                $model->save();

                return $this->sendResponse($model, 'Success model created');
            } catch (Exception $e) {
                return $this->sendError($e->getMessage(), $e, 400);
            }
        }
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
