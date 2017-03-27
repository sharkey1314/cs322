<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // fields we are comfortable with mass assign
    protected $fillable = ['title', 'body'];
}
