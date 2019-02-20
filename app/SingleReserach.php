<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleReserach extends Model
{

    protected $fillable=['author_info','reserach','research_name'];

    public function latestnews()
    {
    	return $this->belongsTo(LatestNews::class);
    }
}
