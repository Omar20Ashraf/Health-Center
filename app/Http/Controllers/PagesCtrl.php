<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Mail Class
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

use App\LatestNews;
use App\SingleReserach;
class PagesCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    public function dosend(Request $request){
        //validation
        $this->validate(request(),[
            'name'                  =>'required',
            'email'                 =>'required|email',
            'additional_message'    =>'required',
            'select_date'           =>'required',
            'select_department'     =>'required',
            'phone_number'          =>'required'

        ]);

        $name=$request->input('name');

        $email=$request->input('email');

        $additional_message=$request->input('additional_message');

        $select_date=$request->input('select_date');

        $select_department=$request->input('select_department');

        $phone_number=$request->input('phone_number');

        Mail::to('omaarashraf2020@gmail.com')->
              send(new ContactUs($name, $email, $additional_message, $select_date,
                                 $select_department,$phone_number));

        session()->flash('message','Mail Send Successfully');
        return back();      
    }



    public function singleNews(LatestNews $news)
    {   
         $reseraches=SingleReserach::all();
         $latest=LatestNews::all();
        return view('pages.news.news-detail',compact('news','reseraches','latest'));
    }
}
