<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    //
    protected $fillable=['title','logo_phrase','button','background_image']; 

    public function mainPage()
    {
    	return $this->belongsTo(MainPage::class);
    }
}
