<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_size', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('size_id')->unsigned();
            $table->bigInteger('article_id')->unsigned();
            $table->timestamps();
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->foreign('article_id')->references('id')->on('articles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_size');
    }
}
