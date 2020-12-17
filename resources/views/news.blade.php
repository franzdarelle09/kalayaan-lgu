
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
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
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

  <!--Slider End--> 
  <!--Main Content Start-->
  <div class="main-content p80"> 
    <div class="news-details">
        <div class="container">
           <div class="row">
              <!--Content Col Start-->
              <div class="col-md-9">
                 <div class="news-box">
                     <div class="news-body">
                         <h4 class="news-title">{{$news->title}}</h4>
                        <?= $news->body ?>
                     </div>
                 </div>
              </div>
              <!--Content Col End--> 
              <!--Sidebar Start-->
              <div class="col-md-3">
                 <div class="sidebar">
                    <!--Widget Start-->
                    <div class="widget">
                    <h4>About us</h4>
                       <div class="about-widget inner">
                          <img src="images/about-widget-img.jpg" alt="">
                          <p> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment. </p>
                          <a href="#">More About us</a> 
                       </div>
                    </div>
                    <!--Widget End--> 
                    <!--Widget Start-->
                    <div class="widget">
                     <h4>Recent Posts</h4>
                       <div class="recent-posts inner">
                          <ul>
                             <li>
                                <img src="images/rp1.jpg" alt=""> <strong>28 August, 2019</strong>
                                <h6> <a href="#">Fake News may be worrisome, but the </a> </h6>
                             </li>
                             <li>
                                <img src="images/rp2.jpg" alt=""> <strong>28 August, 2019</strong>
                                <h6> <a href="#">Republic Faces Political Turmoil</a> </h6>
                             </li>
                             <li>
                                <img src="images/rp3.jpg" alt=""> <strong>28 August, 2019</strong>
                                <h6> <a href="#">Improve Police and Justice System</a> </h6>
                             </li>
                          </ul>
                       </div>
                    </div>
                    <!--Widget End--> 
                    <!--Widget Start-->
                    <div class="widget">
                    <h4>Categories</h4>
                       <div class="categories inner">
                          <ul>
                             <li><a href="#">Latest Updates</a></li>
                             <li><a href="#">Economical Stability</a></li>
                             <li><a href="#">Educational Institutes</a></li>
                             <li><a href="#">Speeches &amp; Videos</a></li>
                             <li><a href="#">Latest Updates</a></li>
                             <li><a href="#">Foreign Policies</a></li>
                          </ul>
                       </div>
                    </div>
                    <!--Widget End--> 
                    <!--Widget Start-->
                    <div class="widget">
                    <h4>Upcoming Events</h4>
                       <div class="upcoming-events inner">
                          
                          <ul>
                             <li>
                                <div class="edate"> <strong>30</strong> Sep <span class="year">2019</span> </div>
                                <h6> <a href="#">Violence against women</a> </h6>
                                <span class="loc">150 / G iii, Newyork, USA</span> 
                             </li>
                             <li>
                                <div class="edate"> <strong>30</strong> Sep <span class="year">2019</span> </div>
                                <h6> <a href="#">New Year Cultural Festival</a> </h6>
                                <span class="loc">150 / G iii, Newyork, USA</span> 
                             </li>
                             <li>
                                <div class="edate"> <strong>30</strong> Sep <span class="year">2019</span> </div>
                                <h6> <a href="#">Corner Meetings for
                                   Next Elections.</a> 
                                </h6>
                                <span class="loc">150 / G iii, Newyork, USA</span> 
                             </li>
                          </ul>
                       </div>
                    </div>
                    <!--Widget End--> 
                    <!--Widget Start-->
                    <div class="widget">
                     <h4>Archives</h4>
                       <div class="archives inner">
                         
                          <ul>
                             <li><a href="#">May 2019</a></li>
                             <li><a href="#">April 2019</a></li>
                             <li><a href="#">March 2019</a></li>
                             <li><a href="#">February 2019</a></li>
                             <li><a href="#">January 2019</a></li>
                             <li><a href="#">March 2017</a></li>
                          </ul>
                       </div>
                    </div>
                    <!--Widget End--> 
                    
                    <!--Widget Start-->
                    <div class="widget">
                     <h4>Tags</h4>
                       <div class="tags-widget inner">
                         
                          <a href="#">Health</a> <a href="#">City News</a> <a href="#">Vote</a> <a href="#">Election</a> <a href="#">Democratic</a> <a href="#">Press</a> <a href="#">Campaign</a> 
                       </div>
                    </div>
                    <!--Widget End--> 
                 </div>
              </div>
              <!--Sidebar End--> 
           </div>
        </div>
     </div>
   
   
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
<!--Wrapper End--> 
<!-- JS --> 
<script src="/js/jquery.min.js"></script> 
<script src="/js/bootstrap.min.js"></script> 
<script src="/js/owl.carousel.min.js"></script> 
<script src="/js/custom.js"></script>

</body>
</html>