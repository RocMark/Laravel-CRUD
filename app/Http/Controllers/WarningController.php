<?php

namespace App\Http\Controllers;

use App\Mail\Warning;
use Illuminate\Support\Facades\Mail;

class WarningController extends Controller
{
    public function send()
    {
        // 收件者務必使用 collect 指定二維陣列，每個項目務必包含 "name", "email"
        // Mail::to($to) 指定要送信給誰
        $to = collect([
            ['name' => 'Jason', 'email' => 'fdjkgh580@gmail.com'],
            ['name' => 'Mark', 'email' => 'onigir77799@gmail.com']
        ]);

        // 提供給模板的參數
        $params = ['say' => 'Message Pass By WarningController'];

        // todo-note 若要直接檢視模板 todo-ask 這邊文章好像有錯?
        // echo (new Warning($params))->render();die;   // 這個失敗
        // echo ((new Warning($params))->render());die; // 這個成功

        Mail::to($to)->send(new Warning($params));

        // todo-note 這邊在撰寫一個傳送信件成功的模板、或是重新導向(並給予傳送成功的 Msg)
        // return view('emails.email',$params);
        return back();
    }
}
