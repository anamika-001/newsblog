<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('state_id');
            $table->string('page_title');
            $table->text('page_description');
            $table->text('page_meta_description');
            $table->string('page_keywords');
            $table->string('blog_title');
            $table->text('blog_description');
            $table->string('blog_image')->nullable();
            $table->string('posted_by')->nullable();
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
        Schema::dropIfExists('add_blogs');
    }
}
