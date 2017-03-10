<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usercomments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname');
            $table->timestamps();
            $table->string('email')->unique();
            $table->string('sexo');
            $table->string('telefono');
            $table->string('nombre');
            $table->integer('edad');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_comments');

    }
}
