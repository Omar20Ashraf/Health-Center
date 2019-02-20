<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
class DepartmentsCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Department::all();

        return view('admin.appointment.department.show',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.appointment.department.create');
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
        $this->validate(request(),['departments'  =>'required']);

        //create The Information
        Department::create($formInput);

        // Show Flash message 
        session()->flash('message','Information Added successfulley.');
        return redirect()->route('department.index');
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
        $items=Department::find($id);

        return view('admin.appointment.department.edit',compact('items'));
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
        $this->validate(request(),['departments'  =>'required']);

        //find the information
        $info=Department::find($id);

        $info->update($request->all());
        // Show Flash message 
        session()->flash('message','Information Edited successfulley.');
        
        return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Department::find($id);
        $products->delete();
        return back();
    }
}
