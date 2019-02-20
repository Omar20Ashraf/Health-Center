<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

use App\LatestNews;
use App\MainPage;
class LatestCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news=LatestNews::all();
        return view('admin.latestNews.show',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $numOfData=count(LatestNews::all());
        return view('admin.latestNews.create',compact('numOfData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('dr_img','news_image');

        //Validation
        $this->validate(request(),
        [
            'news_headline'            =>'required',
            'news_image'               =>'required|image',
            'news_date'                =>'required',
            'small_paragraph'          =>'required',
            'dr_name'                  =>'required',
            'job_title'                =>'required',
            'dr_img'                   =>'required|image',
        ]);
        $filenameToStoreNews=MainPage::savePhoto('news_image','latestNews',$request);

        $filenameToStoreDr=MainPage::savePhoto('dr_img','latestNews',$request);
        
        //store Thr news_image
        $formInput['news_image']=$filenameToStoreNews;

        //store Thr dr_img
        $formInput['dr_img']=$filenameToStoreDr;

        //create
        LatestNews::create($formInput);

        // Show Flash message 
        session()->flash('message','Information Added successfulley.');

        return redirect()->route('latestnews.index'); 

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
        $news=LatestNews::find($id);
        return view('admin.latestNews.edit',compact('news'));
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
            'news_headline'            =>'required',
            // 'news_image'               =>'required',
            'news_date'                =>'required',
            'small_paragraph'          =>'required',
            'dr_name'                  =>'required',
            'job_title'                =>'required'
            // 'dr_img'                   =>'required'
        ]); 

        $info=LatestNews::find($id);

        $oldNewsImage=Input::get('oldImage1');

        $oldDrImage=Input::get('oldImage2');

        //replace the old info with the new ones
        $info->news_headline        =$request->input('news_headline');
        $info->news_date            =$request->input('news_date');
        $info->small_paragraph      =$request->input('small_paragraph');
        $info->dr_name              =$request->input('dr_name');
        $info->job_title            =$request->input('job_title');

    $newsImage=$request->file('news_image');

    $drImage=$request->file('dr_img');

    if($newsImage)
    {
       $filenameToStore= MainPage::updatePhoto('news_image','latestNews',$request);
        $info->news_image=$filenameToStore;

        Storage::delete('public/photos/latestNews/'.$oldNewsImage);
    } 

    if($drImage)
    {
       $filenameToStore= MainPage::updatePhoto('dr_img','latestNews',$request);
        $info->dr_img=$filenameToStore;

        Storage::delete('public/photos/latestNews/'.$oldDrImage);
    }            
        $info->save();

        // Show Flash message 
        session()->flash('message','Information Updated successfulley.');

        return redirect()->route('latestnews.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=LatestNews::find($id);
        if(Storage::delete('public/photos/latestNews/'.$products->news_image )&&
           Storage::delete('public/photos/latestNews/'.$products->dr_img )
          )
        {  
            $products->delete();
            return back();
        }
    }
}
