<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=['name','background_image'];

    public function mainPage()
    {
    	return $this->belongsTo(MainPage::class);
    }

    public function department()
    {
    	return $this->hasMany(Department::class);
    }    
}
