<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    protected $fillable=['news_headline','news_image','news_date','small_paragraph',
    						'dr_name','job_title','dr_img'
    					 ];

    public function mainPage()
    {
    	return $this->belongsTo(MainPage::class);
    }

    public function singleReserach()
    {
    	return $this->hasMany(SingleReserach::class);
    }    
}
