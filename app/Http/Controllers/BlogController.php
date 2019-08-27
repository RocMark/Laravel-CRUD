<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogService;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $data = BlogService::indexBlog([
            'keyword' => $request->keyword,
        ]);
        return view('home', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $postSuccess = BlogService::postBlog([
            'title' => $request->title,
            'userId' => $request->userId,
            'content' => $request->content,
            'tag'   => $request->tag,
        ]);
        if ($postSuccess) {
            // 錯誤寫法 redirect 可以按 F12 去查看傳入的參數
            // return redirect('/blog','新增文章成功');
            return redirect()->action('BlogController@index')->with('message', '新增文章成功')->with(
                'class',
                'alert-success'
            );
        }
        return redirect()->action('BlogController@index')->with('message', '新增文章失敗')->with('class', 'alert-danger');
    }

    public function edit($id)
    {
        $data = BlogRepository::getBlog($id);
        return view('edit', ['blog' => $data]);
    }

    public function update(Request $request, $id)
    {
        BlogService::updateBlog([
            'id' => $id,
            'title' => $request->title,
            'content' => $request->content,
            'tag' => $request->tag,
        ]);
        return redirect(route('blog.index'));
    }

    public function destroy(Request $request, $id)
    {
        BlogRepository::deleteBlog($id);
        return redirect(route('blog.index'));
    }
}
