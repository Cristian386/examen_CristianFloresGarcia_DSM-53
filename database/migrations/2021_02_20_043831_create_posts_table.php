<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title',45);
            $table->string('slug',45);
            $table->string('descripcion',45);
            $table->string('image',45);
            $table->string('id_tag',45);
            $table->string('id_user',45);
            $table->string('category_id',45);
            $table->string('extract',45);
            // delclarar nuestra llaves foraneas dentro de la migracion
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
