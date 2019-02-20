     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                         </div>
                    </div>
                    @foreach(App\LatestNews::all() as $news)
                         <div class="col-md-4 col-sm-6">
                              <!-- NEWS THUMB -->
                              <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                   <a href="news-detail.html">
                                        <img src="/storage/photos/latestNews/{{$news->news_image}}" class="img-responsive" alt="">
                                   </a>
                                   <div class="news-info">
                                        <span>
                                             {{$news->news_date }}
                                        </span>
                                        <h3>
                                             <a href="/news-detail/{{$news->id}}">
                                                  {{$news->news_headline}}
                                             </a>
                                        </h3>
                                        <p>{{$news->small_paragraph}}</p>
                                        <div class="author">
                                             <img src="/storage/photos/latestNews/{{$news->dr_img}}" class="img-responsive" alt="">
                                             <div class="author-info">
                                                  <h5>{{$news->dr_name}}</h5>
                                                  <p>{{$news->job_title}}</p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    @endforeach


               </div>
          </div>
     </section>