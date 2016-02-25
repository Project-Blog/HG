<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //change to name of table 
    protected $table = 'pre_category';
    protected $fillable = ['cat_name', 'cat_description',];
}
