<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslateSentencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translate_sentences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foreign');
            $table->string('native');
            $table->string('language');
            $table->timestamps();

            //$table->foreign('language')->references('language')->on('languages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translate_sentences');
    }
}
