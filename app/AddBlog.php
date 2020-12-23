<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddBlog extends Model
{
    use \Conner\Tagging\Taggable;
    protected $table="add_blogs";
    protected $fillable=['category_id','state_id','page_title','Page_description','page_meta_description','page_keywords','blog_title','blog_description','blog_image','posted_by'];
}
