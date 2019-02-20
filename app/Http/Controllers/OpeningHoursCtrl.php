<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpeningHours;
class OpeningHoursCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hours=OpeningHours::all();
        return view('admin.openingHours.show',compact('hours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $numOfData=count(OpeningHours::all());
        return view('admin.openingHours.create',compact('numOfData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->all();
        $this->validate(request(),
        [
            'regular_appointment'           =>'required',
            'non_regular_appointment'       =>'required',
            'colsed_apponntment'            =>'required'
        ]);

        OpeningHours::create($formInput);

        // Show Flash message 
        session()->flash('message','Information Added successfulley.');

        return redirect()->route('openingHours.index');
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
        $hours=OpeningHours::find($id);
        return view('admin.openingHours.edit',compact('hours'));
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
        $this->validate(request(),
        [
            'regular_appointment'           =>'required',
            'non_regular_appointment'       =>'required',
            'colsed_apponntment'            =>'required'
        ]);

        //find the information
        $info=OpeningHours::find($id);

        //replace the old info with the new ones
        $info->regular_appointment        =$request->input('regular_appointment');
        $info->non_regular_appointment    =$request->input('non_regular_appointment');
        $info->colsed_apponntment         =$request->input('colsed_apponntment');

        $info->save();

        // Show Flash message 
        session()->flash('message','Information Updated successfulley.');

        return redirect()->route('openingHours.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product=OpeningHours::find($id);
        $product->delete();
        return back();
    }
}
