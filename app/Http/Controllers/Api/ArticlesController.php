<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\Log;

class ArticlesController extends ApiController
{
    use ApiResponse;

    public function __invoke()
    {
        try {
            $list = Article::where('published', 1)->get();
            $data = new ArticleResource($list);

            return $this->successResponse($data, 'Article list', 200);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());

            return $this->errorResponse('Somethings its wrong', 400);
        }

    }
}
