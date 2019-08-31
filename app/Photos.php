<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = 'galleries';
    protected $fillable = ['name','description','cover_image'];
}
   