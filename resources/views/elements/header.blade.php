
<!-- PRE LOADER -->
<section class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>     
     </div>
</section>

<!-- HEADER -->
<header>
     <div class="container">
          <div class="row">
               @foreach(App\HospitalInfo::all() as $info)
                    <div class="col-md-4 col-sm-5">
                         {{-- The Welcome paragraph in the left-top --}}
                         <p>{{$info->title}}</p>
                    </div>         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         {{-- Hospital Number --}}
                         <span class="phone-icon"><i class="fa fa-phone"></i>
                          {{$info->number}}</span>

                          {{-- Hospital WorkTime --}}
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i>
                         {{$info->worktime}}</span>

                         {{-- Hospital E-mail --}}
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#appointment" class="smoothScroll">{{$info->email}}</a></span>
                    </div> 
               @endforeach
               </div>
          </div>
</header>


<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>

               <!-- lOGO TEXT HERE -->
               <a href="/" class="navbar-brand">
                    <i class="fa fa-h-square"></i>ealth Center
               </a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#top" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About Us</a></li>
                    <li><a href="#team" class="smoothScroll">Doctors</a></li>
                    <li><a href="#news" class="smoothScroll">News</a></li>
                    <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
               </ul>
          </div>

     </div>
</section>