
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KALAYAAN</title>
<!-- CSS Files -->
<link href="/css/custom.css?<?= time(); ?>" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<link href="/css/color.css" rel="stylesheet">
<link href="/css/all.css" rel="stylesheet">
<link href="/css/owl.carousel.min.css" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="/images/fav.png" type="image/png">
<script src="https://kit.fontawesome.com/8fee6a85fe.js" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body>
<!--Wrapper Start-->
<div class="wrapper"> 
  <!--Header Start-->
  <header class="wf100 header">
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ul class="left-links">
              <li> <a href="#">Council</a> </li>
              <li> <a href="#">Vacancies</a> </li>
              <li> <a href="#">Report It</a> </li>
              <li> <a href="#">A-Z Index</a> </li>
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
    <!--Local Boards & Services-->
    <section class="wf100 p80">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="local-brands">
              <div class="title-style-1">
                <h2>Local Boards & Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo enim, lobortis luctus ante non, malesuada cursus neque. Praesent posuere nunc sapien, non tincidunt ligula aliquet eget. </p>
              </div>
              <div class="row"> 
                
                <!--Local Service Box Start-->
                <div class="col-md-6 col-sm-6">
                  <ul class="lb-ser-box">
                    
                    <!--Start-->
                    <li> <span class="lb-icon"><img src="/images/local-icon1.png" alt=""></span>
                      <h6>History, Culture & Heritage</h6>
                      <p>Explore art objects from six contemporary artists & designers focus on function.</p>
                    </li>
                    <!--End--> 
                    
                    <!--Start-->
                    <li> <span class="lb-icon"><img src="/images/local-icon3.png" alt=""></span>
                      <h6>Constitution & Laws</h6>
                      <p>Excepteur sintened occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                    </li>
                    <!--End--> 
                    
                    <!--Start-->
                    <li> <span class="lb-icon"><img src="/images/local-icon6.png" alt=""></span>
                      <h6>Education Sector</h6>
                      <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                    </li>
                    <!--End-->
                    
                  </ul>
                </div>
                <!--Local Service Box End--> 
                
                <!--Local Service Box Start-->
                <div class="col-md-6 col-sm-6">
                  <ul class="lb-ser-box">
                    
                    <!--Start-->
                    <li> <span class="lb-icon"><img src="/images/local-icon2.png" alt=""></span>
                      <h6>Government Economy</h6>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                    </li>
                    <!--End--> 
                    
                    <!--Start-->
                    <li> <span class="lb-icon"><img src="/images/local-icon4.png" alt=""></span>
                      <h6>Business & Administration</h6>
                      <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </li>
                    <!--End--> 
                    
                    <!--Start-->
                    <li> <span class="lb-icon"><img src="/images/local-icon5.png" alt=""></span>
                      <h6>Budget & Policies</h6>
                      <p>Debitis aut rerum necessitatibus saeped eveniet ut et voluptates.</p>
                    </li>
                    <!--End-->
                    
                  </ul>
                </div>
                <!--Local Service Box End--> 
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="emergency-info">
              <h5>Helplines &amp;
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
                  <div class="panel-heading" role="tab" id="heading2">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2"> Town Council </a> </h6>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
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
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4"> Ambulance </a> </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
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
                  <div class="panel-heading" role="tab" id="heading5">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5"> E-Services </a> </h6>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
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
              </div>
            </div>
            <a href="#" class="jobs-link red">Documents</a>
            <ul class="reports">
              <li> <a href="#"><i class="fas fa-file-alt"></i> 2020 Economy Report</a> </li>
              <li> <a href="#"><i class="fas fa-file-alt"></i> 30 Days Plans of Govt.</a> </li>
              <li> <a href="#"><i class="fas fa-file-alt"></i> Court Case about TAX</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--Local Boards & Services End--> 
    <!--Event Festivals & News Articles Start-->
    <section class="wf100 p80 news-event">
      <div class="container">
        <div class="row">
          <div class="title-style-2 wf100">
            <div class="col-md-4 col-sm-6">
              <h2>News & Events</h2>
            </div>
            <div class="col-md-6 col-sm-6">
              <p>Stay up to date with the current events and news of our beloved hometown. </p>
            </div>
            <div class="col-md-2"> <a href="#">Add Your Event</a> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="latest-updates">
              <h6>Latest Updates <img src="images/newsicon.png" alt=""> </h6>
              <ul>
                <li> <strong><a href="#">Praesent pulvinar velit et elit fermentum aliquet.</a></strong> <span class="post-date"><i class="far fa-calendar-alt"></i> 27 December, 2020</span> </li>
                <li> <strong><a href="#">Quisque rhoncus urna hendrerit, bibendum podio non rhoncus est.</a></strong> <span class="post-date"><i class="far fa-calendar-alt"></i> 27 December, 2020</span> </li>
                <li> <strong><a href="#">Enim non non leo molestie libero sequi tempus orci nibh lacus.</a></strong> <span class="post-date"><i class="far fa-calendar-alt"></i> 27 December, 2020</span> </li>
                <li> <strong><a href="#">Proposal: How Dispose of illegal Properties in town.</a></strong> <span class="post-date"><i class="far fa-calendar-alt"></i> 27 December, 2020</span> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4"> 
            <!--News Post Start-->
            <div class="event-post mb20">
              <div class="event-post-txt">
                <h5><a href="#">Exhibition 2020 Program</a></h5>
                <ul class="event-meta">
                  <li><i class="far fa-calendar-alt"></i> 21-23 December, 2020</li>
                  <li><i class="far fa-clock"></i> 09:00am - 06:00pm</li>
                </ul>
                <p>Explore art objects from six contemporary artists & designers that focus on function</p>
              </div>
              <div class="event-post-loc"> <i class="fas fa-map-marker-alt"></i> Kalayaan Laguna, PH <a href="#"><i class="fas fa-arrow-right"></i></a> </div>
            </div>
            <!--News Post End--> 
            <!--News Post Start-->
            <div class="event-post">
              <div class="event-post-txt">
                <h5><a href="#">Cras accumsan mauris</a></h5>
                <ul class="event-meta">
                  <li><i class="far fa-calendar-alt"></i> 21-23 December, 2020</li>
                  <li><i class="far fa-clock"></i> 09:00am - 06:00pm</li>
                </ul>
                <p>Explore art objects from six contemporary artists & designers that focus on function</p>
              </div>
              <div class="event-post-loc"> <i class="fas fa-map-marker-alt"></i> Kalayaan Laguna, PH <a href="#"><i class="fas fa-arrow-right"></i></a> </div>
            </div>
            <!--News Post End--> 
          </div>
          <div class="col-md-4 col-sm-4"> 
            <!--News Post Start-->
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
            <!--News Post End--> 
          </div>
        </div>
      </div>
    </section>
    <!--Event Festivals & News Articles End--> 
    <!--Cityscapes & Highlights Start-->
    <section class="wf100 p80 city-highlights ">
      <div class="container">
        <div class="title-style-1 text-center">
          <h2>Highlights</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo enim, lobortis luctus ante non, malesuada cursus neque.</p>
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
                <p>Aliquam facilisis lacus at risus condimentum, vitae auctor felis.</p>
              </div>
            </div>
          </div>
          <!--Item End--> 
          <!--Item Start-->
          <div class="item">
            <div class="ch-box">
              <div class="ch-thumb"> <img src="images/hg2.jpg" alt=""> </div>
              <div class="ch-txt">
                <h5><a href="#">Twin Falls</a></h5>
              
                <p>Aliquam facilisis lacus at risus condimentum, vitae auctor felis.</p>
              </div>
            </div>
          </div>
          <!--Item End--> 
          <!--Item Start-->
          <div class="item">
            <div class="ch-box">
              <div class="ch-thumb"> <img src="images/hg3.jpg" alt=""> </div>
              <div class="ch-txt">
                <h5><a href="#">CBK Powerplant</a></h5>
                
                <p>Aliquam facilisis lacus at risus condimentum, vitae auctor felis.</p>
              </div>
            </div>
          </div>
          <!--Item End--> 
          <!--Item Start-->
          <div class="item">
            <div class="ch-box">
              <div class="ch-thumb"> <img src="/images/hg4.jpg" alt=""> </div>
              <div class="ch-txt">
                <h5><a href="#"> Churches </a></h5>
               
                <p>Aliquam facilisis lacus at risus condimentum, vitae auctor feli.</p>
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
              <!--Department Box Start-->
              <div class="col-md-4 col-sm-4">
                <div class="department-box mb30 c1">
                  <h6>Agriculture & Food</h6>
                  <ul>
                    <li><a href="#"><i class="fas fa-circle"></i> Farming Sector</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Agri Industry Development</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Forestry</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Rural Environment</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Food Safety</a></li>
                  </ul>
                  <a class="see-more" href="#">See More</a> </div>
              </div>
              <!--Department Box End--> 
              <!--Department Box Start-->
              <div class="col-md-4 col-sm-4">
                <div class="department-box mb30 c2">
                  <h6>Employment Affairs</h6>
                  <ul>
                    <li><a href="#"><i class="fas fa-circle"></i> Find Your Job</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Employers & Employment</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Public Service Identity</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Retirements & Older People</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Work Licence Permit</a></li>
                  </ul>
                  <a class="see-more" href="#">See More</a> </div>
              </div>
              <!--Department Box End--> 
              <!--Department Box Start-->
              <div class="col-md-4 col-sm-4">
                <div class="department-box mb30 c3">
                  <h6>Housing & Planning</h6>
                  <ul>
                    <li><a href="#"><i class="fas fa-circle"></i> Residents & Commercial Areas</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Building Standards</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> National Planning Framework</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Water Filteration Authority</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> State Parks & Developments</a></li>
                  </ul>
                  <a class="see-more" href="#">See More</a> </div>
              </div>
              <!--Department Box End--> 
              <!--Department Box Start-->
              <div class="col-md-4 col-sm-4">
                <div class="department-box c4">
                  <h6>Health & Securities</h6>
                  <ul>
                    <li><a href="#"><i class="fas fa-circle"></i> Hospitals & Emergencies</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Healty State Life</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Public Safety</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Police Department</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Fire Brigade & Rescue Officials</a></li>
                  </ul>
                  <a class="see-more" href="#">See More</a> </div>
              </div>
              <!--Department Box End--> 
              <!--Department Box Start-->
              <div class="col-md-4 col-sm-4">
                <div class="department-box c5">
                  <h6>Laws & Justice</h6>
                  <ul>
                    <li><a href="#"><i class="fas fa-circle"></i> Constitution & Bylaws</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Legal Services</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Courts Policy</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Children & Family Cases</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Equality & Integration</a></li>
                  </ul>
                  <a class="see-more" href="#">See More</a> </div>
              </div>
              <!--Department Box End--> 
              <!--Department Box Start-->
              <div class="col-md-4 col-sm-4">
                <div class="department-box c6">
                  <h6>Roads & Transport</h6>
                  <ul>
                    <li><a href="#"><i class="fas fa-circle"></i> Civil Aviation</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Maritime Services</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Sustainable Transport</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Roads & Directions</a></li>
                    <li><a href="#"><i class="fas fa-circle"></i> Corporate Information</a></li>
                  </ul>
                  <a class="see-more" href="#">See More</a> </div>
              </div>
              <!--Department Box End--> 
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
                  <div class="panel-heading" role="tab" id="heading2">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2"> Town Council </a> </h6>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
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
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4"> Ambulance </a> </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
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
                  <div class="panel-heading" role="tab" id="heading5">
                    <h6> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5"> E-Services </a> </h6>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                    <div class="panel-body">
                      <ul>
                        <li> <i class="fas fa-user-tie"></i> Hon. Sandy Laganapan</li>
                        <li> <i class="far fa-building"></i> Kalayaan Laguna</li>
                        <li> <i class="fas fa-phone"></i> 501-7771</li>
                        <li> <i class="fas fa-fax"></i> 501-7771 </li>
                        <li> <i class="far fa-envelope"></i> kalayaan_lgu@yahoo.com.ph </li>
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
            <div class="title-style-1">
              <h2>Facts & Figures</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo enim, lobortis luctus ante non, malesuada cursus neque. </p>
            </div>
            <div class="row">
              <ul class="counter">
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-flag"></i> <strong>1956</strong> <span>Established</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-map-marked-alt"></i> <strong>46.6</strong> <span>Area KM Square</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-users"></i> <strong>23.3K</strong> <span>Town Population</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-building"></i> <strong>3</strong> <span>Barangays</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-road"></i> <strong>4015</strong> <span>ZIP Code</span> </div>
                </li>
                <li class="col-md-4 col-sm-4">
                  <div class="fact-box"> <i class="fas fa-home"></i> <strong>5,848</strong> <span>No. Of Household</span> </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4"> 
            <!--Stay Connected Start-->
            <div class="stay-connected">
              <h5>Stay Connected</h5>
              <p>Signup to get the updates on email from the town & town affairs!</p>
              <ul>
                <li>
                  <input type="text" class="form-control" placeholder="Enter Your Name">
                </li>
                <li>
                  <input type="text" class="form-control" placeholder="Enter Your Email Address">
                </li>
                <li>
                  <input type="submit" value="Submit Details">
                </li>
              </ul>
            </div>
            <!--Stay Connected End--> 
          </div>
        </div>
      </div>
    </section>
    <!--Facts About town End--> 
    <!--town Officials Team Start-->
    {{-- <section class="wf100 p80-p50 town-team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-style-1 text-center">
              <h2>Town Officials Team</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo enim, lobortis luctus ante non, malesuada cursus neque.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="team-box">
              <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="images/cteam1.jpg" alt=""></div>
              <div class="team-txt">
                <h5>Stephen Paul</h5>
                <strong class="dep">Assistant Mayor</strong>
                <p> Stephen Paul is very Compitent and very agile person who assist to Mayor of the Town. </p>
                <ul class="team-social">
                  <li><em>Connect:</em></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-box">
              <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="images/cteam2.jpg" alt=""></div>
              <div class="team-txt">
                <h5>Harry Wilson</h5>
                <strong class="dep">Health Director</strong>
                <p> Harry Wilson is very Compitent and very agile person who assist to Mayor of the Town. </p>
                <ul class="team-social">
                  <li><em>Connect:</em></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-box">
              <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="images/cteam3.jpg" alt=""></div>
              <div class="team-txt">
                <h5>James Scott</h5>
                <strong class="dep">Marketing Coordinator</strong>
                <p> James Scott is very Compitent and very agile person who assist to Mayor of the Town. </p>
                <ul class="team-social">
                  <li><em>Connect:</em></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-box">
              <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="images/cteam4.jpg" alt=""></div>
              <div class="team-txt">
                <h5>Danny Richard</h5>
                <strong class="dep">Task Force Chief</strong>
                <p> Danny Richard is very Compitent and very agile person who assist to Mayor of the Town. </p>
                <ul class="team-social">
                  <li><em>Connect:</em></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!--City Officials Team End--> 
  </div>
  <!--Main Content End--> 
  <!--Call 2 Action Start-->

  <!--Call 2 Action End--> 
  <!--Footer Start-->
  @include('parts.footer')
  <!--Footer End-->
  
  <nav id="sidebar">
    <div id="dismiss"> <i class="fas fa-arrow-right"></i> </div>
    <div class="sidebar-header"> <img src="images/footer-logo2.png" alt=""> </div>
    <ul class="list-unstyled components">
      <li class="active"> <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
          <li><a href="index">Default Home Page</a></li>
          <li><a href="home-two">Home Page Two</a></li>
          <li><a href="home-three">Home Page Three</a></li>
        </ul>
      </li>
      <li> <a href="aboutus">About Us</a> </li>
      <li> <a href="departments">Departments</a> </li>
      <li> <a href="news-full">News</a> </li>
      <li> <a href="event">Events</a> </li>
      <li> <a href="explore-city">Explore Town</a> </li>
      <li> <a href="services">Services</a> </li>
      <li> <a href="contact">Contact</a> </li>
    </ul>
  </nav>
  <div class="overlay"></div>
</div>
<!--Wrapper End--> 
<!-- JS --> 
<script src="/js/jquery.min.js"></script> 
<script src="/js/bootstrap.min.js"></script> 
<script src="/js/owl.carousel.min.js"></script> 
<script src="/js/custom.js"></script>
</body>
</html>