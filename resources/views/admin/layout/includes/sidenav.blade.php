
<?php

use App\AdminNavbar;
?>
{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home">    
            </i>Dashboard</a></li>

            {{-- Header/Hospital Contact Information --}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Header/Hospital Contact Information
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    {{-- Show Contact Information in Admin Pae --}}
                    <li> <a href="{{ route('hospitalinfo.index')}}">Contact Information </a></li>

                    {{-- Add Contact Information --}}
                    <li><a href="{{route('hospitalinfo.create')}}">Add Information</a></li>
                </ul>
            </li>
            {{-- End Header/Hospital Contact Information --}}

            {{-- Start Carsoule Information --}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                    Carousle
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    {{-- Show Contact Information in Admin Pae --}}
                    <li> <a href="{{ route('carousel.index')}}">
                        Show Carouusle  
                    </a></li>

                    {{-- Add Contact Information --}}
                    <li><a href="{{route('carousel.create')}}">
                        Add Carousle
                    </a></li>
                </ul>
            </li>
            {{-- End Carsoule Information --}}

            {{-- Start About Section --}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                    About
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    {{-- Show Contact Information in Admin Pae --}}
                    <li> <a href="{{ route('about.index')}}">
                        Show About  
                    </a></li>

                    {{-- Add Contact Information --}}
                    <li><a href="{{route('about.create')}}">
                        Add About
                    </a></li>
                </ul>
            </li>
            {{-- End About Section --}}

            {{-- Start Our Doctors Section --}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                    Our Doctors
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    {{-- Show Contact Information in Admin Pae --}}
                    <li> <a href="{{ route('ourdoctors.index')}}">
                        Show Doctors Information  
                    </a></li>

                    {{-- Add Contact Information --}}
                    <li><a href="{{route('ourdoctors.create')}}">
                        Add Doctors Information
                    </a></li>
                </ul>
            </li>
            {{-- End Our Doctors Section --}}

            {{-- Start LatestNews Section --}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                        Latest News
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    {{-- Show Contact Information in Admin Pae --}}
                    <li> <a href="{{ route('latestnews.index')}}">
                        Show LatestNews  
                    </a></li>

                    {{-- Add Contact Information --}}
                    <li><a href="{{route('latestnews.create')}}">
                        Add LatestNews
                    </a></li>
                </ul>
            </li>
            {{-- End LatestNews Section --}}

            {{-- Start Research Section --}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                        Researches
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    {{-- Show Research Information in Admin Pae --}}
                    <li> <a href="{{ route('singleNews.index')}}">
                        Show Researches  
                    </a></li>

                    {{-- Add Research Information --}}
                    <li><a href="{{route('singleNews.create')}}">
                        Add Researches
                    </a></li>
                </ul>
            </li>
            {{-- End Research Section --}}


            {{-- Start Opening Hours Section --}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                        Opening Hours
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    {{-- Show Opening Hours Information in Admin Pae --}}
                    <li> <a href="{{ route('openingHours.index')}}">
                        Show Opening Hours  
                    </a></li>

                    {{-- Add Opening Hours Information --}}
                    <li><a href="{{route('openingHours.create')}}">
                        Add Opening Hours
                    </a></li>
                </ul>
            </li>
            {{-- End Opening Hours Section --}}

            {{-- Start appointment Section --}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>
                        appointment
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    {{-- Show appointment Information in Admin Pae --}}
                    <li> <a href="{{ route('appointment.index')}}">
                        Show appointment  
                    </a></li>

                    {{-- Add appointment Information --}}
                    <li><a href="{{route('appointment.create')}}">
                        Add appointment
                    </a></li><hr>

                    {{-- Add appointment Department Information --}}
                    <li><a href="{{route('department.index')}}">
                        Show Health Departments
                    </a></li>

                    {{-- Add appointment Department Information --}}
                    <li><a href="{{route('department.create')}}">
                        Add Health Department
                    </a></li>                    
                </ul>
            </li>
            {{-- End appointment Section --}}
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->
