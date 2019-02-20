<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;
use App\MainPage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
class CarouselCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=Carousel::get();
        return view('admin.carousel.show',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $numOfData=count(Carousel::all());
        return view('admin.carousel.create',compact('numOfData'));
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
            'title'             =>'required',
            'logo_phrase'       =>'required',
            'button'            =>'required',
            'background_image'  =>'required'
        ]);

        // Bacground Image
        $filenameToStoreBackgroundImage=MainPage::savePhoto('background_image','carousel',$request);

        //store Thr Bacground Image
        $formInput['background_image']=$filenameToStoreBackgroundImage;        

        //create
        Carousel::create($formInput);
        // Show Flash message 
        session()->flash('message','Information Added successfulley.');

        return redirect()->route('carousel.index');        
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
        $items=Carousel::find($id);

        return view('admin.carousel.edit',compact('items'));
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
            'title'          =>'required',
            'logo_phrase'    =>'required',
            'button'         =>'required'
        ]);

        //find the information
        $info=Carousel::find($id);

        $oldBackgroundImage=Input::get('oldBackgroundImage');

        $info->title          =$request->input('title');
        $info->logo_phrase    =$request->input('logo_phrase');
        $info->button         =$request->input('button');

        $backgroundImage=$request->file('background_image');

        if($backgroundImage)
        {
            $filenameToStore= MainPage::updatePhoto('background_image','carousel',$request);

            $info->background_image=$filenameToStore;

            Storage::delete('public/photos/carousel/'.$oldBackgroundImage);
        }

        $info->save();

        // Show Flash message 
        session()->flash('message','Information Updated successfulley.');

        return redirect()->route('carousel.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Carousel::find($id);
        if(Storage::delete('public/photos/carousel/'.$products->background_image))
        {
            $products->delete();
            return back();
        }
    }
}
