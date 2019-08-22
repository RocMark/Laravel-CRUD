<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function store(Request $request)
    {
        return [
            'id' => (int) $request->id, 'title' => 'productTitle',
        ];
    }
}
