<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // todo-fix 接到 405 Method Not Allowed
    public static function test(Request $request)
    {
        return view('test');
        // return view('test', ['blog' => $data]);
    }
}
