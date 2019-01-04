<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategoriePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('categorie_post', function (Blueprint $table) {
             $table->smallinteger('post_id');
             $table->smallinteger('categorie_id');

            $table->foreign('post_id')->references('id')->on('posts'); 
            $table->foreign('categorie_id')->references('id')->on('categories');         

            $table->unique(["post_id", 'categorie_id'])  ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorie_post');
    }
}
