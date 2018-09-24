<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
// 同一クラス名となりますので、このサンプルではファサードを別名としています
use Illuminate\Support\Facades\Response as LaravelResponse;

class JsonpAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $response = LaravelResponse::jsonp('callback', ['status' => 'success']);
        // ヘルパー関数を利用する場合
        $response = response()->jsonp('callback', ['status' => 'success']);

        return $response;
    }
}
