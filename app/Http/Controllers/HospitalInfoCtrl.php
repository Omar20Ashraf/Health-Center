<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HospitalInfo;
class HospitalInfoCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $infos=HospitalInfo::all();

        return view('admin.hospitalinfo.show',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $numOfData=count(HospitalInfo::all());
        return view('admin.hospitalinfo.create',compact('numOfData'));
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
        //validation
        $this->validate(request(),[
            'title'  =>'required',
            'number'  =>'required',
            'worktime'  =>'required',
            'email'  =>'required|email'
        ]);

        //create The Information
        HospitalInfo::create($formInput);

        // Show Flash message 
        session()->flash('message','Information Added successfulley.');
        return redirect()->route('hospitalinfo.index');
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
        $product=HospitalInfo::find($id);

        return view('admin.hospitalinfo.edit',compact('product'));
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
        $this->validate(request(),[
            'title'  =>'required',
            'number'  =>'required',
            'worktime'  =>'required',
            'email'  =>'required|email'
        ]);

        //find the information
        $info=HospitalInfo::find($id);

        $info->update($request->all());

        // Show Flash message 
        session()->flash('message','Information Edited successfulley.');
        
        return redirect()->route('hospitalinfo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=HospitalInfo::find($id);
        $products->delete();
        return back();
    }
}
