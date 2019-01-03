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
            $table->integer('media_id');
            $table->enum('post_type',['video', 'post']);
            $table->string('title');
            $table->smallinteger('duration');
            $table->datetime('date');
            $table->float('price')->default($value = '0');
            $table->text('content');
            $table->enum('statut',['open', 'close']);
            $table->string('link_video');
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
