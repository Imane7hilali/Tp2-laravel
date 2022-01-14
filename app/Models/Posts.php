<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title','body'];
    protected $dates = ['created_at','updated_at'];
}
