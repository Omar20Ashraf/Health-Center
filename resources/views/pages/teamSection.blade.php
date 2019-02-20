<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
     <div class="container">
          <div class="row">
               <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                         <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                    </div>
               </div>
               <div class="clearfix"></div>
                    @foreach(App\OurDoctor::all() as $info)
                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="/storage/photos/ourDoctors/{{$info->dr_img}}" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>{{$info->dr_name}}</h3>
                                        <p>{{$info->dr_specialist}}</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i>
                                                  {{$info->dr_phone}}
                                             </p>
                                             <p>
                                                  <i class="fa fa-envelope-o"></i> 
                                                  <a href="#">{{$info->dr_email}}</a>
                                             </p>
                                        </div>
                                        <ul class="social-icon">
                                             <li>
                                                  <a href="{{$info->facebook}}" class="fa fa-facebook-square"></a>
                                             </li>

                                             <li>
                                                  <a href="{{$info->twitter}}" class="fa fa-twitter"></a>
                                             </li>
                                        </ul>
                                   </div>

                         </div>
                    </div>
                    @endforeach
                    
               </div>
          </div>
     </section>