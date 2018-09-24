# 第二部 Chapter 4 / リクエスト・レスポンス
4-3, 4-4

## Sample URI

| Domain | Method   | URI      | Name | Action                                    | Middleware   |
|--------|----------|----------|------|-------------------------------------------|--------------|
|        | GET|HEAD | /        |      | Closure                                   | web          |
|        | GET|HEAD | blade    |      | App\Http\Controllers\BladeAction          | web          |
|        | GET|HEAD | download |      | App\Http\Controllers\DownloadAction       | web          |
|        | GET|HEAD | json     |      | App\Http\Controllers\JsonAction           | web          |
|        | GET|HEAD | jsonp    |      | App\Http\Controllers\JsonpAction          | web          |
|        | GET|HEAD | media    |      | App\Http\Controllers\MediaAction          | web          |
|        | GET|HEAD | payload  |      | App\Http\Controllers\ArticlePayloadAction | web          |
|        | GET|HEAD | plain    |      | App\Http\Controllers\PlainTextAction      | web          |
|        | GET|HEAD | sse      |      | App\Http\Controllers\StreamAction         | web          |

## 対応表
 
 - [リスト4.3.1.1：文字列からレスポンスを生成する](app/Http/Controllers/PlainTextAction.php)
 - [リスト4.3.1.2：ビューを使ってレスポンスを生成する](app/Http/Controllers/BladeAction.php)
 - [リスト4.3.1.3：文字列または文字列配列からJSONレスポンスを生成する](app/Http/Controllers/JsonAction.php)
 - [リスト4.3.1.4：文字列または文字列配列からJSONPレスポンスを生成する](app/Http/Controllers/JsonpAction.php)
 - [リスト4.3.1.5：任意のメディアタイプ指定](app/Http/Controllers/MediaAction.php)
 - [リスト4.3.1.6：ファイルパスを指定してダウンロードレスポンスを生成する](app/Http/Controllers/DownloadAction.php)
 - [リスト4.3.1.8：SSE 実装例](app/Http/Controllers/StreamAction.php)
 
 - [リスト4.3.1.14：ArticlePayloadActionクラス](app/Http/Controllers/ArticlePayloadAction.php)
 - [リスト4.3.1.15：ArticleResourceクラス実装例](app/Http/Resources/ArticleResource.php)
 - [リスト4.3.1.16：UserResourceクラス実装](app/Http/Resources/UserResource.php)
 - [リスト4.3.1.17：CommentResourceクラス実装](app/Http/Resources/CommentResource.php)
 - [リスト4.3.1.18：CommentResourceCollectionクラス実装例](app/Http/Resources/CommentResourceCollection.php)
 
 - [リスト4.4.2.2：リクエストヘッダのログ出力 | リスト4.4.2.3：レスポンスヘッダのログ出力](app/Http/Middleware/HeaderDumper.php)
 - [リスト4.4.2.4：Kernelクラスへのミドルウェア追加例](app/Http/Kernel.php)
 
## For Docker

### setup 

```bash
$ docker-compose up -d
$ docker-compose run composer install --prefer-dist --no-interaction && composer app-setup
```

### remove

```bash
$ docker-compose down
```

### コンテナのキャッシュが残っている場合

```bash
$ docker-compose build --no-cache
```
