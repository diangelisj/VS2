<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

  Schema::create('contact', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nome',250);
      $table->string('assunto',250);
      $table->text('mensagem');
      $table->time('hour');
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
        //
    }
}
