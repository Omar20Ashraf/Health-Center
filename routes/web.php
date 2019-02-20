<?php

// Main Page Route
Route::get('/','PagesCtrl@index')->name('index');


//Start The Authentication Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
//End The Authentication Routes

//mail Route
Route::post('/dosend','PagesCtrl@dosend')->name('dosend');


//Single News Detail Route

Route::get('/news-detail/{news}','PagesCtrl@singleNews')->name('singleNews');

//The Admin Routes
Route::group(['prefix'=>'management','middleware'=>['admin','auth']], function()
{	
	//The admin Main Page
	Route::get('/',function()
	{
		return view('admin.index'); 
	})->name('admin.index');

	//Header-Hospital Contact Information Routes
	Route::resource('hospitalinfo','HospitalInfoCtrl');

	//Carousel Routes
	Route::resource('carousel','CarouselCtrl');	

	//about Route
	Route::resource('about','AboutCtrl');

	//our Doctors Route
	Route::resource('ourdoctors','OurDoctorsCtrl');

	// Latest News Route
	Route::resource('latestnews','LatestCtrl');

	//Sigle News Route
	Route::resource('singleNews','SingleReserachCtrl');

	//Openung Hours Route
	Route::resource('openingHours','OpeningHoursCtrl');	

	//Appointment Route
	Route::resource('appointment','AppointmentCtrl');

	//Appointment Departments Route
	Route::resource('department','DepartmentsCtrl');			
});
