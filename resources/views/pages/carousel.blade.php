
<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">
               <div class="owl-carousel owl-theme">
                    @foreach(App\Carousel::all() as $item)
                         <?php $path="/storage/photos/carousel/".''.$item->background_image; ?>
                         <div class="item" style="background-image:url(<?php echo $path ?>);">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>{{$item->logo_phrase}}</h3>
                                        <h1>{{$item->title}}</h1>
                                        <a href="#team" class="section-btn btn
                                                       btn-default smoothScroll">
                                             {{$item->button}}
                                        </a>
                                   </div>
                              </div>
                         </div>
                    @endforeach
               </div>

          </div>
     </div>
</section>