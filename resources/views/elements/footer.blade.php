     <?php $var=0; ?>
     <!-- FOOTER -->
<footer data-stellar-background-ratio="5">
     <div class="container">
          <div class="row">
               <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb"> 
                         <h4 class="wow fadeInUp" data-wow-delay="0.4s">
                              Contact Info
                         </h4>
                         <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                         @foreach(App\HospitalInfo::all() as $info)
                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> {{$info->number}}</p>
                                   <p><i class="fa fa-envelope-o"></i> 
                                        <a href="#">{{$info->email}}</a>
                                   </p>
                              </div>
                         @endforeach
                    </div>
               </div>

               <div class="col-md-4 col-sm-4"> 
                    <div class="footer-thumb"> 
                         <h4 class="wow fadeInUp" data-wow-delay="0.4s">
                              Latest News
                         </h4>  
                              @foreach(App\LatestNews::all() as $news)
                                   @if($var != 2)
                                        <div class="latest-stories">
                                             <div class="stories-image">
                                                  <a href="#"><img src="/storage/photos/latestNews/{{$news->news_image}}" class="img-responsive" alt=""></a>
                                             </div>
                                             <div class="stories-info">
                                                  <a href="#"><h5>{{$news->news_headline}}</h5></a>
                                                  <span>{{$news->news_date}}</span>
                                             </div>
                                        </div>
                                        <?php $var++; ?>
                                   @endif
                              @endforeach
                    </div>
               </div>

               <div class="col-md-4 col-sm-4"> 
                    <div class="footer-thumb">
                         @foreach(App\OpeningHours::all() as $hour)
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">
                                        Opening Hours
                                   </h4>
                                   <p>{!! $hour->regular_appointment !!}</p>
                                   <p>{!! $hour->non_regular_appointment !!}</p>
                                   <p>{!! $hour->colsed_apponntment !!}</p>
                              </div> 
                         @endforeach
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                         <div class="copyright-text"> 
                              <p>Copyright &copy; 2018 Your Company 
                                   
                              | Design: <a rel="nofollow" href="https://www.facebook.com/tooplate" target="_blank">Tooplate</a></p>
                         </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <div class="footer-link"> 
                              <a href="#">Laboratory Tests</a>
                              <a href="#">Departments</a>
                              <a href="#">Insurance Policy</a>
                              <a href="#">Careers</a>
                         </div>
                    </div>
                    <div class="col-md-2 col-sm-2 text-align-center">
                         <div class="angle-up-btn"> 
                              <a href="#top" class="smoothScroll wow fadeInUp"
                               data-wow-delay="1.2s">
                                   <i class="fa fa-angle-up"></i>
                              </a>
                         </div>
                    </div>   
               </div>
                    
          </div>
     </div>
</footer>

<!-- SCRIPTS -->
<script src="{{asset ('js/jquery.js') }}"></script>
<script src="{{asset ('js/bootstrap.min.js') }}"></script>
<script src="{{asset ('js/jquery.sticky.js') }}"></script>
<script src="{{asset ('js/jquery.stellar.min.js') }}"></script>
<script src="{{asset ('js/wow.min.js') }}"></script>
<script src="{{asset ('js/smoothscroll.js') }}"></script>
<script src="{{asset ('js/owl.carousel.min.js') }}"></script>
<script src="{{asset ('js/custom.js') }}"></script>
     
     
