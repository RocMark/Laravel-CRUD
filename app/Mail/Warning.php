<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Warning extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $msg, $params;
    public function __construct($params)
    {
        $this->params = $params['say'];
    }
    

    /**
     * Build the message.
     *
     * @return $this
     */
    
    // todo-note WarningController 將 say 參數 丟入這個 實體
    // 再將這個實體傳給 Mail::send Function 去運作
    // Mail::to($to)->send(new Warning($params));
    
    public function build()
    {
        return $this->subject("警告訊息")
            ->view('emails.email')
            ->with([
                'params' => $this->params,
                'test' => 'Test123'
            ]);
    }
}
