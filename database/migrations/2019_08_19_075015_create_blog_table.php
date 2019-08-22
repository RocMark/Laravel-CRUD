<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            // bigIncrements 遞增主鍵
            $table->bigIncrements('id');
            $table->integer('userId');
            $table->string('title');
            $table->integer('tag');
            $table->longText('content');
            // bitInteger?????
            // Boolean 用 tinyInteger 表示 0 為 false 1 為 true
            // $table->tinyInteger('deleted')->default('0');
            $table->softDeletes();
            $table->timestamps(); // 包含 created & update
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
