<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotelGallery extends Model
{
    protected $table = 'hotel_gallery';


    protected $fillable = ['title','image'];
}
