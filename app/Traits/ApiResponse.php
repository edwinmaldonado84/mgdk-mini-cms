<?php

namespace App\Traits;

trait ApiResponse
{
    protected function customResponse($status, $data, $message = null, $code = null)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    protected function suggestionResponse($suggestion, $message, $code)
    {
        return response()->json([
            'status' => 'Error',
            'message' => $message,
            'suggestion' => $suggestion,
        ], $code);
    }

    protected function successResponse($data, $message = null, $code = 200)
    {
        return response()->json([
            'status' => 'Success',
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    protected function notValidResponse($data, $message = null, $code = 200)
    {
        return response()->json([
            'status' => 'False',
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    protected function errorResponse($message, $code)
    {
        return response()->json([
            'status' => 'Error',
            'message' => $message,
            'data' => null,
        ], $code);
    }

    protected function expiredResponse($message, $code)
    {
        return response()->json([
            'status' => 'Expired',
            'message' => $message,
            'data' => null,
        ], $code);
    }

    protected function notAllowedResponse($data, $message, $code)
    {
        return response()->json([
            'status' => 'Not Allowed',
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    protected function notAuthorizedResponse($message, $code)
    {
        return response()->json([
            'status' => 'False',
            'message' => $message,
            'data' => null,
        ], $code);
    }

    protected function alreadyAuthenticatedOnOtherDevice($message, $code)
    {
        return response()->json([
            'status' => 'False',
            'message' => $message,
            'data' => null,
        ], $code); //530
    }

    protected function errorButtonOptionResponse($message, $redirect, $code = 301)
    {
        return response()->json([
            'status' => 'Error',
            'message' => $message,
            'data' => null,
            'redirect' => $redirect,
        ], $code);
    }
}
