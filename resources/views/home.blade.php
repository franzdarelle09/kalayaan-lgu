
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="_token" content="{!! csrf_token() !!}" /> 
<title>KALAYAAN</title>
<!-- CSS Files -->
<link href="/css/custom.css?<?= time(); ?>" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<link href="/css/color.css" rel="stylesheet">
<link href="/css/all.css" rel="stylesheet">
<link href="/css/owl.carousel.min.css" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/prettyPhoto.css" rel="stylesheet">
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<link rel="icon" href="/images/fav.png" type="image/png">
<script src="https://kit.fontawesome.com/8fee6a85fe.js" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
        /* Paste this css to your style sheet file or under head tag */
        /* This only works with JavaScript, 
        if it's not present, don't show loader */
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background: url('https://smallenvelop.com/wp-content/uploads/2014/08/Preloader_11.gif') center no-repeat #fff;
        }
      </style>
      <script src="/js/jquery.min.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
      <script type="text/javascript">
      //paste this code under the head tag or in a separate js file.
        // Wait for window load
        $(window).load(function() {
          // Animate loader off screen
          $(".se-pre-con").fadeOut("slow");
        });
      </script>
</head>
<body>
  <div class="se-pre-con"></div>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=646052329059990&autoLogAppEvents=1" nonce="MLZvu4sD"></script>

  {{-- <div class="fb-page" data-href="https://web.facebook.com/lgukalayaanlaguna" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://web.facebook.com/lgukalayaanlaguna" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/lgukalayaanlaguna">Municipality of Kalayaan, Laguna</a></blockquote></div> --}}
  <!--Wrapper Start-->
  <style type="text/css">
    

    .slider {
        width: 80%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      max-height: 300px;
      width: auto;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }

    
    
  </style>

  <div class="wrapper"> 
  <!--Header Start-->
  <header class="wf100 header">
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ul class="left-links">
              <li> <a href="/officials">Council</a> </li>
              <li> <a href="#">Vacancies</a> </li>
              <li> <a href="#">Report It</a> </li>
           
            </ul>
          </div>
          <div class="col-md-6 col-sm-6">
            <ul class="right-links">
              <li> <a href="#">Mayor's Office: <strong>501-7771</strong></a> </li>
              <li> <a href="#"><i class="fas fa-street-view"></i> Explore</a> </li>
              <li> <a href="#"><i class="fas fa-cloud-sun"></i> <strong>24</strong>°C / <strong>75</strong>°F</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="logo-nav-row">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            @include('parts.nav')
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Header End--> 
  <!--Slider Start-->
  @include('parts.slider')
  <!--Slider End--> 
  <!--Main Content Start-->
  <div class="main-content"> 
   <!--Announcements-->
   <section class="wf100 p80 news-event">
    <div class="container">
      <div class="title-style-1 text-center" style="margin-bottom: -90px;">
        <h2>Announcements</h2>
     
      </div>
      <div class="row">
        

      

      <div class="col-md-12">
        <a type="button" id="modal-trigger"  data-toggle="modal" data-target="#myModal" style="display: none">Open Modal</a>
        
        <section class="center slider">
          @foreach($announcements as $a)
            <div>
              <a href="#" data-id="{{$a->id}}" class="announcement-details">
              <img src="/storage/announcement/<?= $a->photo ?>"  />
              </a>
            </div>
          @endforeach
          
          
        </section>
      </div>
        
   
      </div>
    </div>
  </section>
  <!-- End Announcements--> 
    <!--Event Festivals & News Articles Start-->
    <section class="wf100 p80 news-event">
      <div class="container">
        <div class="row">
          <div class="title-style-2 wf100">
            <div class="col-md-4 col-sm-6">
              <h2>News & Events</h2>
            </div>
            <div class="col-md-6 col-sm-12">
              <p> </p>
            </div>
            <div class="col-md-2 col-sm-12 hide-mobile"> <a href="/news-list">View All</a> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            {{-- <div class="latest-updates">
              <h6>Latest Updates <img src="images/newsicon.png" alt=""> </h6>
              <ul>
                <li> <strong><a href="#">Praesent pulvinar velit et elit fermentum aliquet.</a></strong> <span class="post-date"><i class="far fa-calendar-alt"></i> 27 December, 2020</span> </li>
                <li> <strong><a href="#">Quisque rhoncus urna hendrerit, bibendum podio non rhoncus est.</a></strong> <span class="post-date"><i class="far fa-calendar-alt"></i> 27 December, 2020</span> </li>
                <li> <strong><a href="#">Enim non non leo molestie libero sequi tempus orci nibh lacus.</a></strong> <span class="post-date"><i class="far fa-calendar-alt"></i> 27 December, 2020</span> </li>
                <li> <strong><a href="#">Proposal: How Dispose of illegal Properties in town.</a></strong> <span class="post-date"><i class="far fa-calendar-alt"></i> 27 December, 2020</span> </li>
              </ul>
            </div> --}}
            <div class="row news-wrapper news-grid">
              @foreach($news as $key => $n)
              <!--News Box Start-->
              <div class="col-md-4 col-sm-6">
                 <div class="news-box">
                    <div class="new-thumb">
                       <span class="cat c1">News</span> <img src="/storage/article_photos/thumbnail/{{$n->large_thumb}}" alt=""> 
                    </div>
                    <div class="new-txt">
                       <ul class="news-meta">
                          <?php 
                              $date = date('d M, Y', strtotime($n->created_at));
                          ?>
                          <li>{{$date}}</li>
                          <li></li>
                       </ul>
                       <h6><a href="/news/{{$n->slug}}">{{$n->title}}</a></h6>
                       <?php 
                        $teaser = substr(html_entity_decode(strip_tags($n->body)), 0, $sub_count[$key]);
                       ?>
                       <p> <?= $teaser ?> [...] </p>
                    </div>
                    <div class="event-post-loc"> <i class="fas fa-map-marker-alt"></i> Kalayaan Laguna, PH <a href="/news/{{$n->slug}}"><i class="fas fa-arrow-right"></i></a> </div>
                 </div>
              </div>
              <!--News Box End--> 
              @endforeach
              
           
             
             
           </div>
          </div>
          
          {{-- <div class="col-md-4 col-sm-4"> 
          
            <div class="event-post">
              <div class="thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="/images/tree2.jpg" alt=""> </div>
              <div class="event-post-txt">
                <h5><a href="#">Tree Planting Activity</a></h5>
                <ul class="event-meta">
                  <li><i class="far fa-calendar-alt"></i> December 20, 2020</li>
                  <li><i class="far fa-clock"></i> 09:00am - 06:00pm</li>
                </ul>
                <p>Explore art objects from six contemporary artists & designers that focus on function</p>
              </div>
              <div class="event-post-loc"> <i class="fas fa-map-marker-alt"></i> Kalayaan Laguna, PH <a href="#"><i class="fas fa-arrow-right"></i></a> </div>
            </div>
             
          </div> --}}
        </div>
      </div>
    </section>
    <!--Event Festivals & News Articles End--> 
    <!--Cityscapes & Highlights Start-->
    <section class="wf100 p80 city-highlights">
      <div class="container">
        <div class="title-style-1 text-center white">
          <h2>Highlights</h2>
          <p>Experience rural living, enjoy it's culture and explore the wonders of Kalayaan.</p>
        </div>
      </div>
      <div class="container-fluid">
        <div id="highlight-slider" class="owl-carousel owl-theme"> 
          <!--Item Start-->
          <div class="item">
            <div class="ch-box">
              <div class="ch-thumb"> <img src="/images/hg1.jpg" alt=""> </div>
              <div class="ch-txt">
                <h5><a href="#">Tree Planting</a></h5>
                {{-- <ul>
                  <li><a href="#"><i class="far fa-image"></i> 48 Photos</a></li>
                  <li><a href="#"><i class="fas fa-play-circle"></i> 21 Videos</a></li>
                </ul> --}}
                {{-- <p>Aliquam facilisis lacus at risus condimentum, vitae auctor felis.</p> --}}
              </div>
            </div>
          </div>
          <!--Item End--> 
          <!--Item Start-->
          <div class="item">
            <div class="ch-box">
              <div class="ch-thumb"> <img src="images/hg2.jpg" alt=""> </div>
              <div class="ch-txt">
                <h5><a href="#">Tourism</a></h5>
              
                {{-- <p>Aliquam facilisis lacus at risus condimentum, vitae auctor felis.</p> --}}
              </div>
            </div>
          </div>
          <!--Item End--> 
          
          <!--Item Start-->
          <div class="item">
            <div class="ch-box">
              <div class="ch-thumb"> <img src="/images/hg4.jpg" alt=""> </div>
              <div class="ch-txt">
                <h5><a href="#"> Landmarks </a></h5>
               
                {{-- <p>Aliquam facilisis lacus at risus condimentum, vitae auctor feli.</p> --}}
              </div>
            </div>
          </div>
          <!--Item End--> 
          <!--Item Start-->
          <div class="item">
            <div class="ch-box">
              <div class="ch-thumb"> <img src="/images/hg5.jpg" alt=""> </div>
              <div class="ch-txt">
                <h5><a href="#"> Delicacies </a></h5>
               
                {{-- <p>Aliquam facilisis lacus at risus condimentum, vitae auctor feli.</p> --}}
              </div>
            </div>
          </div>
          <!--Item End--> 
          
        </div>
      </div>
    </section>
    <!--Cityscapes & Highlights End--> 
    <!--Govt. Services & Informations  Start-->
    <section class="wf100 pb80">
      <div class="container">
        <div class="row">
          <div class="title-style-2 wf100">
            <div class="title-style-1 text-center">
              <h2>Services</h2>
              {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo enim, lobortis luctus ante non, malesuada cursus neque.</p> --}}
            </div>
            {{-- < class="col-md-6 col-sm-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo enim, lobortis luctus ante non, malesuada cursus neque. </p>
            </> --}}
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="row"> 
              @include('parts.departmentbox')
            </div>
          </div>
          <div class="col-md-3">
            <div class="emergency-info">
              <h5>Helplines &
                Emergency
                Services </h5>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Mayor Office </a> </h6>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Hon. Sandy Laganapan</li>
                        <li> <i class="far fa-building"></i>Purok 1 Brgy. San Juan</li>
                        <li> <i class="fas fa-phone"></i> 501 7771</li>
                        <li> <i class="fas fa-fax"></i>501 7771 </li>
                        <li> <i class="far fa-envelope"></i> kalayaan_lgu@yahoo.com.ph </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3"> Police Emergency </a> </h6>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> PNP</li>
                        <li> <i class="far fa-building"></i>Purok 1 Brgy. San Juan</li>
                        <li> <i class="fas fa-phone"></i> 523-1815</li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading31">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse31" aria-expanded="true" aria-controls="collapse31"> Fire Rescue </a> </h6>
                  </div>
                  <div id="collapse31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading31">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> BFP</li>
                        <li> <i class="far fa-building"></i>Purok 1 Brgy. San Juan</li>
                        <li> <i class="fas fa-phone"></i> 523-3752</li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading4a">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4a" aria-expanded="true" aria-controls="collapse4a"> MDRRMO </a> </h6>
                  </div>
                  <div id="collapse4a" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4a">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> MDRRMO</li>
                        <li> <i class="fas fa-phone"></i> (049) 523-3780</li>
              
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4"> Health </a> </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> MHO</li>
                        <li> <i class="far fa-building"></i>Purok 1 Brgy. San Juan</li>
                        <li> <i class="fas fa-phone"></i> 0933 347 5786</li>
                        <li> <i class="fas fa-fax"></i>501 7753 </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading5">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5"> BRGY. SAN JUAN </a> </h6>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> BRGY. SAN JUAN</li>
                        <li> <i class="fas fa-phone"></i> 0917 682 1149</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading6">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6"> BRGY. LONGOS </a> </h6>
                  </div>
                  <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> BRGY. LONGOS</li>
                        <li> <i class="fas fa-phone"></i> 523-9097</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
                <!--Panel Start-->
                <div class="panel">
                  <div class="panel-heading" role="tab" id="heading7">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7"> BRGY. SAN ANTONIO </a> </h6>
                  </div>
                  <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> BRGY. SAN ANTONIO</li>
                        <li> <i class="fas fa-phone"></i> 0967 362 9257</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--Panel End--> 
              </div>
            </div>
            <div class="query">
              <h5> For any Query </h5>
              <ul>
                <li> <span> <i class="fas fa-phone"></i> </span> <strong> Tel:</strong> 501-7771 </li>
                <li> <span> <i class="fas fa-envelope"></i> </span> <strong>Email:</strong> kalayaan_lgu@yahoo.com.ph </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Govt. Services & Informations  End--> 
    <!--Facts About City Start-->
    <section class="wf100 p80 fact-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="title-style-1 white">
              <h2>Facts & Figures</h2>
              
            </div>
            <div class="row">
              <ul class="counter">
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-flag"></i> <strong>1908</strong> <span>Established</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-map-marked-alt"></i> <strong>55.46*</strong> <span>Area Square KM</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-users"></i> <strong>24.9K**</strong> <span>Town Population</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-building"></i> <strong>3</strong> <span>Barangays</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-road"></i> <strong>4015</strong> <span>ZIP Code</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-home"></i> <strong>5,529**</strong> <span>No. Of Household</span> </div>
                </li>
              </ul>
              <p style="margin-left: 10px; color: #fff;">* From Assessor's Office cadastral map  & CLUP</p>
              <p style="margin-left: 10px; color: #fff;">** From Municipal Nutrition Action Office </p>
            </div>
          </div>
          <div class="col-md-4"> 
            <!--Stay Connected Start-->
            <div class="stay-connected">
              <h5>Contact Us</h5>
              
              <p>Any suggestion or reports? Get in touch with us.</p>
              <ul>
                <li>
                  <input type="text" id="contact-name" class="form-control" placeholder="Enter Your Name" /> 
                </li>
                <li>
                  <input type="text" id="contact-email" class="form-control" placeholder="Enter Your Email Address" />
                </li>
                <li>
                  <textarea class="form-control" id="contact-msg" name="message" placeholder="Enter Your Message" style="height: 130px;"></textarea>
                </li>
                <li class="hidden text-center" id="contact-success">
                  <p style="color: yellow">Message Sent Successfully!</p>
                </li>
                <li>
                  <button type="button" id="contact-submit" >Submit Details</button>
                </li>
              </ul>
            </div>
            <!--Stay Connected End--> 
          </div>
        </div>
      </div>
    </section>
    <!--Facts About town End--> 

  </div>
  <!--Main Content End--> 
  <!--Call 2 Action Start-->

  <!--Call 2 Action End--> 
  <!--Footer Start-->
  @include('parts.footer')
  <!--Footer End-->
  
  @include('parts.sidebar')
  <div class="overlay"></div>
</div>
<div class="modal fade" id="myModal" role="dialog" style="z-index: 2000 !important;">
            <div class="modal-dialog">
            
              
              <div class="modal-content">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <img src="" alt="" id="modal-photo" style="width: 100%;" />
                  <p class="modal-message" style="margin-top:20px; color: fff; font-family:sans-serif">Some text in the modal.</p>
                </div>
                
              </div>
              
            </div>
          </div>
<!--Wrapper End--> 
<!-- JS --> 

<script src="/js/bootstrap.min.js"></script> 
<script src="/js/owl.carousel.min.js"></script> 
<script src="/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/js/custom.js"></script>



<script type="text/javascript">
  $(window).on('load',function(){
    $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true
      });
  });
 
  $(".announcement-details").on("click", function(){
      const announcement_id = $(this).data('id');
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });
      $.ajax({
        type:'POST',
        url:'/ajax/announcement-details',
        data:{announcement_id},
        success: function(res){
          $(".modal-title").html(res.title);
          $(".modal-message").html(res.content);
          $("#modal-photo").attr("src",`/storage/announcement/${res.photo}`);
          $("#modal-trigger").click();
        }
      });
  });

  $("#contact-submit").on("click", function(){
      const name = $("#contact-name").val();
      const email = $("#contact-email").val();
      const msg = $("#contact-msg").val();

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });

      $.ajax({
        type:"POST",
        url:"/contact/save",
        data:{name,email,msg},
        success: function(res){
          if(res == "success"){
            $("#contact-name").val("");
            $("#contact-email").val("");
            $("#contact-msg").val("");
            
            $("#contact-success").removeClass("hidden");
          }
        }
      })
  });
  
</script>

</body>
</html>