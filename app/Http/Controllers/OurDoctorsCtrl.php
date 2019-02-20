<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OurDoctor;
use App\MainPage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class OurDoctorsCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $infos=OurDoctor::all();
        return view('admin.our-doctors.show',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $numOfData=count(OurDoctor::all());
        return view('admin.our-doctors.create',compact('numOfData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('dr_img');

        //Validation
        $this->validate(request(),
        [          
            'dr_name'                 =>'required',
            'dr_specialist'           =>'required',
            'dr_img'                  =>'required',
            'dr_phone'                =>'required',
            'dr_email'                =>'required',
            'facebook'                =>'required',
            'twitter'                 =>'required'
        ]);

        $filenameToStore=MainPage::savePhoto('dr_img','ourDoctors',$request);

        //store Thr dr_img
        $formInput['dr_img']=$filenameToStore;

        //create
        OurDoctor::create($formInput);

        // Show Flash message 
        session()->flash('message','Information Added successfulley.');

        return redirect()->route('ourdoctors.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items=OurDoctor::find($id);
        return view('admin.our-doctors.edit',compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation
        $this->validate(request(),
        [
            'dr_name'                 =>'required',
            'dr_specialist'           =>'required',
            // 'dr_img'                  =>'required',
            'dr_phone'                =>'required',
            'dr_email'                =>'required',
            'facebook'                =>'required',
            'twitter'                 =>'required'
        ]);        //

        $oldimage=Input::get('oldImage');

        $info=OurDoctor::find($id);

        //replace the old info with the new ones
        $info->dr_name              =$request->input('dr_name');
        $info->dr_specialist        =$request->input('dr_specialist');
        $info->dr_phone              =$request->input('dr_phone');
        $info->dr_email              =$request->input('dr_email');
        $info->facebook              =$request->input('facebook');
        $info->twitter              =$request->input('twitter');

    $image=$request->file('dr_img');

    if($image)
    {

       $filenameToStore= MainPage::updatePhoto('dr_img','ourDoctors',$request);
        $info->dr_img=$filenameToStore;

        Storage::delete('public/photos/ourDoctors/'.$oldimage);
    }
            
        $info->save();

        // Show Flash message 
        session()->flash('message','Information Updated successfulley.');

        return redirect()->route('ourdoctors.index');                 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=OurDoctor::find($id);
        if(Storage::delete('public/photos/ourDoctors/'.$products->dr_img))
        {  
            $products->delete();
            return back();
        }
    }
}
