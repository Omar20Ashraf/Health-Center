<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalInfo extends Model
{
    //
    protected $fillable=['title','number','email','worktime'];

    public function mainPage()
    {
    	return $this->belongsTO(MainPage::class);
    }
}
