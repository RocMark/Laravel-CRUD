<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */

    // todo-note 有哪些 uri 不想要被檢查 token 可以在這裡加入
    // 別家廠商 協作 可能不會夾帶token 我們就必須開啟這設定
    protected $except = [];
}
