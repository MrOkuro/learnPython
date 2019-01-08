<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table){
            $table->increments('id');
            $table->integer('media_id')->nullable();
            $table->enum('post_type',['video', 'post'])->nullable();
            $table->string('title')->nullable();
            $table->smallinteger('duration')->nullable();
            $table->datetime('date')->nullable();
            $table->float('price')->default($value = '0')->nullable();
            $table->text('content')->nullable();
            $table->enum('statut',['open', 'close'])->nullable();
            $table->string('link_video')->nullable();
        });


         Schema::table('posts', function (Blueprint $table) {
            $table->foreign('media_id')->references('id')->on('medias');           
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
