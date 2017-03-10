<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('status');
            $table->timestamp('appoved_at');
            $table->timestamps();
            $table->integer('post_id');
            $table->integer('uscomment_id');
            $table->integer('admin_id');
            $table->foreign('uscomment_id')->references('id')->on('usercomments');
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
