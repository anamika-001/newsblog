<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddCategory extends Model
{
    protected $table="add_categories";
    protected $fillable=['title','description'];
}
