@extends('layout.default')
@section('content')
<head>
     <link rel="stylesheet" href="css/magnific-popup.css">{{-- new --}}
</head>
     <!-- NEWS DETAIL -->
     <section id="news-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-8 col-sm-7">
                         <!-- NEWS THUMB -->
                         <div class="news-detail-thumb">
                              <div class="news-image">
                                   <img src="/storage/photos/latestNews/{{$news->news_image}}" class="img-responsive" alt="">
                              </div>
                              <h3>{{$news->news_headline}}</h3>
                              @foreach($reseraches as $reserach)
                                   @if($reserach->id == $news->id)
                                    <p>{!! $reserach->reserach !!}</p>
                                    @endif
                              @endforeach
                              <div class="news-social-share">
                                   <h4>Share this article</h4>
                                        <a href="https://www.facebook.com" 
                                           class="btn btn-primary" target="_blank">
                                             <i class="fa fa-facebook"></i>
                                              Facebook
                                        </a>

                                        <a href="https://www.twitter.com/" 
                                           class="btn btn-success" target="_blank">
                                             <i class="fa fa-twitter"></i>Twitter
                                        </a>

                                        <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>Google+</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-5">
                         <div class="news-sidebar">
                              <div class="news-author">
                                   <h4>About the author</h4>
                                   @foreach($reseraches as $reserach)
                                        @if($reserach->id == $news->id)
                                         <p>{!! $reserach->author_info !!}</p>
                                         @endif
                                    @endforeach
                              </div>

                              <div class="recent-post">
                                   <h4>Recent Posts</h4>
                                   @foreach($latest as $late)
                                        @if($news->id != $late->id)
                                             <div class="media">
                                                  <div class="media-object pull-left">
                                                       <a href="/news-detail/{{$late->id}}">
                                                            <img src="/storage/photos/latestNews/{{$late->news_image}}" alt="">
                                                       </a>
                                                  </div>
                                                  <div class="media-body">
                                                       <h4 class="media-heading">
                                                            <a href="/news-detail/{{$late->id}}">
                                                                 {{$late->news_headline}}
                                                            </a>
                                                       </h4>
                                                  </div>
                                             </div>
                                        @endif
                                   @endforeach     
                              </div>

                              <div class="news-categories">
                                   <h4>Categories</h4>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Dental</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Cardiology</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Health</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Consultant</a></li>
                              </div>

                              <div class="news-ads sidebar-ads">
                                   <h4>Sidebar Banner Ad</h4>
                              </div>

                              <div class="news-tags">
                                   <h4>Tags</h4>
                                        <li><a href="#">Pregnancy</a></li>
                                        <li><a href="#">Health</a></li>
                                        <li><a href="#">Consultant</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Doctors</a></li>
                                        <li><a href="#">Social</a></li>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

@endsection     