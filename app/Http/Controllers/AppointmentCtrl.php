<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Input;

use App\Appointment;
use App\MainPage;
class AppointmentCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Appointment::all();
        return view('admin.appointment.show',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $numOfData=count(Appointment::all());

        return view('admin.appointment.create',compact('numOfData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $formInput=$request->except('background_image');

        $this->validate(request(),
        [
            'name'              =>'required',
            'background_image'  =>'required'
        ]);

        // Bacground Image
        $filenameToStore=MainPage::savePhoto('background_image','appointment',$request);

        //store Thr Bacground Image
        $formInput['background_image']=$filenameToStore;         

        //create
        Appointment::create($formInput);

        // Show Flash message 
        session()->flash('message','Information Added successfulley.');

        return redirect()->route('appointment.index'); 
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
        $items=Appointment::find($id);
        return view('admin.appointment.edit',compact('items'));
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
    $this->validate(request(),['name'=>'required']);

    $info=Appointment::findOrFail($id);

    $oldBackgroundImage=Input::get('oldBackgroundImage');

    //save the new name 
    $info->name=$request->input('name');   
    
    $backgroundImage=$request->file('background_image');

    if($backgroundImage)
    {
       $filenameToStore= MainPage::updatePhoto('background_image','appointment',$request);
        $info->background_image=$filenameToStore;
        Storage::delete('public/photos/appointment/'.$oldBackgroundImage);
    }

    $info->save();
    // Show Flash message 
    session()->flash('message','Information Updated successfulley.');

    return redirect()->route('appointment.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Appointment::find($id);

        if(Storage::delete('public/photos/appointment/'.$products->background_image))
        {  
            $products->delete();
            return back();
        }
        
    }
}
