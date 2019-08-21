<?php
    
    namespace App\Services;
    
    use App\Repositories\BlogRepository;
    use App\Repositories\TagRepository;
    use Illuminate\Support\Facades\Validator;
    
    class BlogService
    {
        public static function indexBlog ($data)
        {
            $blogs = BlogRepository::searchBlog($data);
            $tags = TagRepository::getTag();
            return ['blogs' => $blogs, 'tags' => $tags];
        }
        
        public static function updateBlog ($data)
        {
            BlogRepository::getBlog($data['id']);
            BlogRepository::updateBlog($data);
        }
        
        public static function postBlog ($data)
        {
            // TODO 待改寫成使用 Valid::make 檢查空值
            $result = Validator::make($data, [
                'title'   => 'required',
                'userId'  => 'required',
                'content' => 'required',
                'tag'     => 'required',
            ]);
            // $result->fails 使用 Validator 的方法
            // 問他是否錯誤，true為失敗
            // 如果 errorKey 欄位存在值 等同於錯誤
            if ($result->fails()){
                // 驗證失敗就傳送失敗訊息給 Controller
                // dd('fail');
                return false;
            }
            // 驗證成功才把資料傳給 Repo
            BlogRepository::postBlog($data);
            return true;
        }
    }


