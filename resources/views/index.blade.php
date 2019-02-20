@extends('layout.default')
@section('content')

     {{-- carousel Section --}}
          @include('pages.carousel')
     {{-- carousel Section --}}


     {{-- About Section --}}
          @include('pages.aboutSection')
     {{-- About Section --}}


     {{-- Team Section --}}
          @include('pages.teamSection')
     {{-- Team Section --}}


     {{-- Latest News Section --}}
          @include('pages.latestNewsSection')
     {{-- Latest News Section --}}


     {{-- Appointment News Section --}}
          @include('pages.appointmentSection')
     {{-- Appointment News Section --}}


@endsection     