<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies_table', function(Blueprint $table){
            $table->id();
            $table->string('body');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('thread_id')->references('id')->on('threads_table');
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
        Schema::dropIfExists('replies_table');
    }
}
