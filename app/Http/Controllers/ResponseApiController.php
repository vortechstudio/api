<?php

namespace App\Http\Controllers;

class ResponseApiController extends Controller
{
    public function success($data = null)
    {
        return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);
    }

    public function error(?\Exception $e = null, $message = null)
    {
        if (empty($e)) {
            \Log::emergency('LOG API: '.$message);
        } else {
            \Log::emergency('LOG API: '.$message, [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => $message,
        ], 500);
    }
}
