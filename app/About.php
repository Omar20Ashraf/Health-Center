<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $fillable=['description','dr_name','dr_specialist','dr_img','background_image'];

    public function mainPage()
    {
    	return $this->belongsTo(MainPage::class);
    }
}
