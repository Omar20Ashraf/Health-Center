<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SingleReserach;
use App\LatestNews;
class SingleReserachCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LatestNews $news)
    {
        //
        $items=SingleReserach::all();
        return view('admin.latestNews.reserach.index',compact('items','news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.latestNews.reserach.create');
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
        $formInput=$request->all();

        $this->validate(request(),
        [
            'author_info'   =>'required',
            'reserach'      =>'required',
            'research_name' =>'required'
        ]);

        SingleReserach::create($formInput);

        // Show Flash message 
        session()->flash('message','Information Added successfulley.');

        return redirect()->route('singleNews.index'); 
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
        $reseraches=SingleReserach::find($id);
        return view('admin.latestNews.reserach.show',compact('reseraches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items=SingleReserach::find($id);
        return view('admin.latestNews.reserach.edit',compact('items'));
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
            'author_info'   =>'required',
            'reserach'      =>'required',
            'research_name' =>'required'
        ]);

        //find the information
        $info=SingleReserach::find($id);

        $info->update($request->all());

        // Show Flash message 
        session()->flash('message','Information Updated successfulley.');

        return redirect()->route('singleNews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=SingleReserach::find($id);
        $products->delete();
        return back();
    }
}
