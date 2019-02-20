<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Input;

use App\About;
use App\MainPage;

class AboutCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=About::all();
        return view('admin.about.show',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $numOfData=count(About::all());

        return view('admin.about.create',compact('numOfData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('dr_img','background_image');

        //Validation
        $this->validate(request(),
        [
            'description'           =>'required',
            'dr_name'               =>'required',
            'dr_specialist'         =>'required',
            'dr_img'                =>'required',
            'background_image'      =>'required'
        ]);

        //Doctor Image
        $filenameToStoreDr=MainPage::savePhoto('dr_img','about',$request);
        // Bacground Image
        $filenameToStoreBackgroundImage=MainPage::savePhoto('background_image','about',$request);

        //store Thr dr_img
        $formInput['dr_img']=$filenameToStoreDr;

        //store Thr Bacground Image
        $formInput['background_image']=$filenameToStoreBackgroundImage;        

        //create
        About::create($formInput);

        // Show Flash message 
        session()->flash('message','Information Added successfulley.');

        return redirect()->route('about.index');       
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
        //
        $items=About::find($id);
        return view('admin.about.edit',compact('items'));
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
        'description'           =>'required',
        'dr_name'               =>'required',
        'dr_specialist'         =>'required'
    ]);


    $info=About::findOrFail($id);

    $oldDrImage=Input::get('oldDrImage');

    $oldBackgroundImage=Input::get('oldBackgroundImage');

    $info->description          =$request->input('description');
    $info->dr_name              =$request->input('dr_name');
    $info->dr_specialist        =$request->input('dr_specialist');    
    
    $drImage=$request->file('dr_img');
    if($drImage)
    {
       $filenameToStore= MainPage::updatePhoto('dr_img','about',$request);
        $info->dr_img=$filenameToStore;

        Storage::delete('public/photos/about/'.$oldDrImage);
    }

    $backgroundImage=$request->file('background_image');
    if($backgroundImage)
    {
       $filenameToStore= MainPage::updatePhoto('background_image','about',$request);

        $info->background_image=$filenameToStore;

        Storage::delete('public/photos/about/'.$oldBackgroundImage);
    }
    $info->save();
    // Show Flash message 
    session()->flash('message','Information Updated successfulley.');

    return redirect()->route('about.index'); 
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=About::find($id);

        if(Storage::delete('public/photos/about/'.$products->dr_img)&&
           Storage::delete('public/photos/about/'.$products->background_image))
        {  
            $products->delete();
            return back();
        }
    }
}
