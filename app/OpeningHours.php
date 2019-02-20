<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpeningHours extends Model
{
    protected $fillable=['regular_appointment','non_regular_appointment',
    					'colsed_apponntment'];

    public function mainPage()
    {
    	return $this->belongsTo(MainPage::class);
    }    
}
