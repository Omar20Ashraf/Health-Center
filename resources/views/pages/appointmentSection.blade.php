<?php
$image=1;
$title=2;
foreach (App\Appointment::all() as $item) {
     $image=$item->background_image;
     $title=$item->name;
}

 ?>
<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="/storage/photos/appointment/{{$image}}" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">

                        @if(Session::has('message'))
                              <div class="alert alert-info">
                                   <p>{{ Session::get('message') }}</p>
                              </div>
                         @endif          
                         {!! Form::open(['route'=>'dosend','method'=>'Post','class'=>'comment-form','id'=>'appointment-form']) !!}
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>{{$title}}</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        {{ Form::label('name','Name') }}

                                        {{ Form::text('name',null,array('class'=>'form-control','id'=>'name','placeholder'=>'Full Name')) }}
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        {{ Form::label('email','E-mail') }}

                                        {{ Form::text('email',null,array('class'=>'form-control','id'=>'email','placeholder'=>'Your Email')) }}
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        {{ Form::label('select_date','Select Date') }}

                                        {{ Form::date('select_date',null,array('class'=>'form-control')) }}
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        {{ Form::label('select_department','Select Department') }}

                                        <select name="select_department" class="form-control">
                                             @foreach(App\Department::all() as $item)
                                             <option>{{$item->departments}}</option>
                                             @endforeach
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        {{ Form::label('phone_number','Phone Number') }}

                                        {{ Form::tel('phone_number',null,array('class'=>'form-control','id'=>'phone','placeholder'=>'Phone')) }}

                                        {{ Form::label('additional_message','Additional Message') }}

                                        {{ Form::textarea('additional_message',null,array('class'=>'form-control','id'=>'message','placeholder'=>'Message')) }}

                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Send</button>
                                   </div>
                              </div>
                        {!! Form::close() !!}

                        @include('elements.flash')
                    </div>

               </div>
          </div>
     </section>