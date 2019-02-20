<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=['departments'];

    public function appointment()
    {
    	return $this->belongsTo(Appointment::class);
    }
}
