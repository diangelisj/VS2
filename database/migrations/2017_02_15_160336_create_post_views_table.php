<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_views', function (Blueprint $table) {


            $table->increments('id');

            // abaiixo o user id que será referenciado
            $table->integer('user_id')->unsigned();
            // aqui abaixo a referencia que deverá ser feita: user_id referencia a ID na tabela users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


            // abaiixo o user id que será referenciado
            $table->integer('post_id')->unsigned();
            // aqui abaixo a referencia que deverá ser feita: user_id referencia a ID na tabela users
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_views');
    }
}
