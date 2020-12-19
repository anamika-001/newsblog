<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddState extends Model
{
    protected $table="add_states";
    protected $fillable=['state_name','description'];
}
