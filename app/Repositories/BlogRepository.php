<?php
namespace App\Repositories;

use Maras0830\LaravelSRT\Repository\Repository;
use App\Blog;

class BlogRepository extends Repository
{
    public static function getAllBlog(){
        return Blog::all();
    }

    public static function getBlog($id){
        return Blog::where('id', $id)->first();
    }

    public static function postBlog($data){
        $blog = new Blog();
        $blog->title = $data['title'];
        $blog->userId = $data['userId'];
        $blog->tag = $data['tag'];
        $blog->content = $data['content'];
        $blog->save();
    }

    public static function searchBlog($data) {
        $keyword = $data['keyword'];
        if (isset($keyword)) {
            $builder = Blog::where('title', 'like', "%{$keyword}%")
                ->orWhere('content', 'like', "%{$keyword}%")
                ->orderBy('id', 'desc');
            $blogs = $builder->paginate(5);
        } else {
            $blogs = Blog::orderBy('id', 'desc')->paginate(5);
        }
        return $blogs;
    }

    public static function updateBlog($data){
        $newBlog = Blog::find($data['id']);
        $newBlog->title = $data['title'];
        $newBlog->tag = $data['tag'];
        $newBlog->content = $data['content'];
        $newBlog->save();

        // 取得更新的值，需要重新搜尋
        // $returnNewBlog = Blog::where('id',$data['id'])->get();
        // dd($returnNewBlog); // 回傳 Collection 成功
    }

    public static function deleteBlog($id){
        return Blog::destroy($id);
    }
}

