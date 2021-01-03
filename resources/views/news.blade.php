
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
               <div class="news-box" style="display: flex; flex-direction: column;">
                  <div class="new-thumb"> <a href="#"><i class="fas fa-link"></i></a> <span class="cat c4">NEWS</span> <img src="/storage/article_photos/{{$news->article_photo}}" alt=""> </div>
                  <div class="new-txt">
                     <ul class="news-meta">
                        <?php 
                           $date = date('d M, Y', strtotime($news->created_at));
                        ?>
                        <li>{{$date}}</li>
                        <li>BY: KALAYAAN LGU</li>
                     </ul>
                     <h4>{{$news->title}}</h4>
                     <?= $news->body; ?>
                     
                     
                     <!--Post Tags Start-->
                     {{-- <div class="single-post-tags"> <a href="#">Health</a> <a href="#">City News</a> <a href="#">Election</a> <a href="#">Campaign</a> <a href="#">Vote</a> <a href="#">Democratic</a> <a href="#">Press</a> </div> --}}
                     <!--Post Tags End--> 
                     
                     
                    
                     
                  </div>
               </div>
              </div>
              <!--Content Col End--> 
              <!--Sidebar Start-->
              <div class="col-md-3">
                 <div class="sidebar">
                    <!--Widget Start-->
                    {{-- <div class="widget">
                    <h4>About us</h4>
                       <div class="about-widget inner">
                          <img src="images/about-widget-img.jpg" alt="">
                          <p> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment. </p>
                          <a href="#">More About us</a> 
                       </div>
                    </div> --}}
                    <!--Widget End--> 
                    
                    <!--Widget Start-->
                    <div class="widget">
                    <h4>Recent News</h4>
                       <div class="upcoming-events inner">
                          
                          <ul>
                             @foreach($recent_news as $r)
                             <?php 
                                 
                                 $d = date('d',strtotime($r->created_at));
                                 $m = date('M',strtotime($r->created_at));
                                 $y = date('Y',strtotime($r->created_at));

                             ?>
                             <li>
                                <div class="edate"> <strong>{{$d}}</strong> {{$m}} <span class="year">{{$y}}</span> </div>
                                <h6> <a href="/news/{{$r->slug}}">{{$r->title}}</a> </h6>
                                {{-- <span class="loc">Kalayaan, Laguna, PH</span>  --}}
                             </li>
                             @endforeach
                         
                          </ul>
                       </div>
                    </div>
                    <!--Widget End--> 
                    <!--Widget Start-->
                    <div class="widget">
                     <h4>Archives</h4>
                       <div class="archives inner">
                         
                          <ul>
                             <li><a href="#">May 2020</a></li>
                             <li><a href="#">April 2020</a></li>
                             <li><a href="#">March 2020</a></li>
                             <li><a href="#">February 2020</a></li>
                             <li><a href="#">January 2020</a></li>
                             
                          </ul>
                       </div>
                    </div>
                    <!--Widget End--> 
                    
                    <!--Widget Start-->
                    <div class="widget">
                     <h4>Tags</h4>
                       <div class="tags-widget inner">
                         
                          <a href="#">Health</a> <a href="#">Town News</a> <a href="#">COVID-19</a> <a href="#">School</a> <a href="#">Democratic</a> <a href="#">Press</a> <a href="#">Campaign</a> 
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