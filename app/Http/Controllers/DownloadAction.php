<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
// 同一クラス名となりますので、このサンプルではファサードを別名としています
use Illuminate\Support\Facades\Response as LaravelResponse;

class DownloadAction
{
    public function __invoke(Request $request): BinaryFileResponse
    {
        $response = LaravelResponse::download(storage_path('app/cover_min.png'));
        // ヘルパー関数を利用する場合
        $response = response()->download(storage_path('app/cover_min.png'));
        //
        $response = response()->download(storage_path('app/cover_min.png'), 'image.png', [
            'content-type' => 'image/png',
        ]);
        return $response;
    }
}
