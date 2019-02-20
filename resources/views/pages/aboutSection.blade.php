<?php 
 foreach(App\About::all() as $item)
     $image=$item->background_image;
     
     $path="/storage/photos/about/".''.$image;
 ?>

<!-- ABOUT -->
<section id="about" style="background-image:url(<?php echo $path ?>);">
     <div class="container">
          <div class="row">
               <div class="col-md-6 col-sm-6">
                    @foreach(App\About::all() as $item)
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth Center</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                  {!! $item->description !!}
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="/storage/photos/about/{{$item->dr_img}}" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>{{$item->dr_name}}</h3>
                                        <p>{{$item->dr_specialist}}</p>
                                   </figcaption>
                              </figure>
                         </div>
                    @endforeach     
               </div>         
          </div>
     </div>
</section>