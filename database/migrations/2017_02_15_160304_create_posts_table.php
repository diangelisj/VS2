<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {


            $table->increments('id');
            // abaiixo o user id que será referenciado
            $table->integer('user_id')->unsigned();
            // aqui abaixo a referencia que deverá ser feita: user_id referencia a ID na tabela users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');



            // abaiixo o user id que será referenciado
            $table->integer('category_id')->unsigned();
            // aqui abaixo a referencia que deverá ser feita: user_id referencia a ID na tabela users
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->string('title',250);
            $table->text('description');
            $table->date('date');
            $table->time('hour');
            $table->boolean('featured')->default(false);
            $table->enum('status',['A','R'])->default('A')->comment('A-> Ativo, R-> Rascunho= Não aprece no site');
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
        Schema::dropIfExists('posts');
    }
}
