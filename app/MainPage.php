<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class MainPage extends Model
{
    //

    public function hospitalInfo()
    {
    	return $this->hasMany(HospitalInfo::class);
    }

    public function carousel()
    {
    	return $this->hasMany(Carousel::class);
    }   

    public function ourDoctors()
    {
    	return $this->hasMany(OurDoctor::class);
    }

    public function latestNews()
    {
        return $this->hasMany(LatestNews::class);
    } 

    public function openingHours()
    {
        return $this->hasMany(OpeningHours::class);
    } 

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }


    public static function savePhoto($imageName,$folderName,$request)
    {
         // Get filename with extension
        $filenameWithExt = $request->file($imageName)->getClientOriginalName();
         // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get extension
        $extension = $request->file($imageName)->getClientOriginalExtension();
        // Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // Uplaod image
        $path= $request->file($imageName)->storeAs('public/photos/'.''.$folderName,
               $filenameToStore);

        return $filenameToStore;               
    }

    public static function updatePhoto($imageName,$folderName,$request)
    {
        $file=$request->file($imageName);

        $filenameWithExt = $file->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension=$file->getClientOriginalExtension();

        $filenameToStore = $filename.'_'.time().'.'.$extension;

        $file->storeAs('public/photos/'.''.$folderName,$filenameToStore);

            return $filenameToStore;               
    }                   
}
