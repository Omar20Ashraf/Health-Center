<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurDoctor extends Model
{
    protected $fillable=['dr_name','dr_specialist','dr_img',
    					 'dr_phone','dr_email','facebook','twitter'];

    public function mainPage()
    {
    	return $this->elongsTo(MainPage::class);
    }
}
