<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// 同一クラス名となりますので、このサンプルではファサードを別名としています
use Illuminate\Support\Facades\Response as LaravelResponse;

use function response;

class PlainTextAction
{
    public function __invoke(Request $request): Response
    {
        $response = LaravelResponse::make('hello world');
        // ヘルパー関数を利用する場合
        $response = response('hello world');
        // content-typeを変更
        $response = response('hello world', Response::HTTP_OK, [
            'content-type' => 'text/plain'
        ]);
        return $response;
    }
}
