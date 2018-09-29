<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
// 同一クラス名となりますので、このサンプルではファサードを別名としています
use Illuminate\Support\Facades\Response as LaravelResponse;

use function response;
use function view;

class BladeAction
{
    public function __invoke(Request $request): Response
    {
        $response = LaravelResponse::view('view.file');
        // 上記のメソッドと同じ結果が得られます
        $response = view('view.file');
        // ステータスコードを変更し、ビューを出力します。
        $response = response(view('view.file'), Response::HTTP_ACCEPTED);

        return $response;
    }
}
