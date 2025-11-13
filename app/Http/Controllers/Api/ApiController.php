<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function pageNotFound(Request $request)
    {
        return response()->json([
            'success' => false,
            'message' => 'Page Not Found. If error persists',
            'error' => [
                'PageNotFoundException' => [
                    'Page not found',
                ],
            ],
        ], 404);
    }

    // override any ApiController methods if version specific required
    protected function toBag($request, $bag)
    {
        return new $bag(
            $request
        );
    }

    /**
     * Handles the request for extra parameters
     */
    protected function defaultRequestFilter()
    {
        // need to apply a common function for this
        if (! isset(request()->start)) {
            request()->request->add(['start' => 0]);
        }

        if (! isset(request()->length)) {
            request()->request->add(['length' => 25]);
        }
    }

    /**
     * Handle the request for wrapping transformation
     *
     * @return array|\Illuminate\Http\Request|string
     */
    protected function handleRequest($bag)
    {
        $configRequest = new $bag(request()->toArray());
        request()->merge($configRequest->attributes());

        return request();
    }
}
