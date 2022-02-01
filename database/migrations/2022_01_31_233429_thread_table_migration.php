<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThreadTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads_table', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->foreignId('user_id')->references('id')->on('users');;
            $table->string('tag_category');
            $table->integer('reply_count');
            $table->integer('like_count');
            $table->integer('most_recent_reply_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threads_table');
    }
}
