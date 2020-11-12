<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait DeleteModelTrait
{
    public function deleteModelTrait($model, $relationship)
    {
        try {
            $model->delete();

            // $product->tags()->deattach();

            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (Exception $exception) {
            Log::error('Message:' . $exception->getMessage() . 'Line: ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
}