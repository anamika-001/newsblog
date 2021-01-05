<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHighlightsToAddBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('add_blogs', function (Blueprint $table) {
            $table->string('highlight1')->before('blog_image')->nullable();
            $table->string('highlight2')->before('blog_image')->nullable();
            $table->string('highlight3')->before('blog_image')->nullable();
            $table->string('highlight4')->before('blog_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('add_blogs', function (Blueprint $table) {
            //
        });
    }
}
