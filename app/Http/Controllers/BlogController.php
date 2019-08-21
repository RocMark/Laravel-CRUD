<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request, $msg = null)
    {
        $data = BlogService::indexBlog([
            'keyword' => $request->keyword,
        ]);
        $data['msg'] = $msg;
        return view('home', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // TODO 接收驗證後的結果  在 Controller 用判斷是否成功
        $postSuccess = BlogService::postBlog([
            'title' => $request->title,
            'userId' => $request->userId,
            'content' => $request->content,
            'tag' => $request->tag,
        ]);
        // TODO 這裡要接收 Service 回傳的 true、false 判斷 post 成功與否
        // 成功就導向回去 blog 頁
        if ($postSuccess) {
            return redirect('/blog','新增文章成功');
        }
        return redirect('/blog','新增文章失敗');
    }

    public function edit($id)
    {
        $data = BlogRepository::getBlog($id);
        return view('edit', ['blog' => $data]);
    }

    public function update(Request $request, $id)
    {
        BlogService::updateBlog([
            'id'=>$id,
            'title'=>$request->title,
            'content'=>$request->content,
            'tag'=>$request->tag,
        ]);
        return redirect(route('blog.index'));
    }

    public function destroy(Request $request, $id)
    {
        BlogRepository::deleteBlog($id);
        return redirect(route('blog.index'));
    }
}
