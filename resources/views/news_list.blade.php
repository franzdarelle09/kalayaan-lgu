
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
  <div class="main-content"> 
    <div class="news-wrapper news-grid">
        <div class="container">
           <div class="row">
              <!--News Box Start-->
              @foreach($news as $n)
              <div class="col-md-3 col-sm-6">
                 <div class="news-box">
                    <div class="new-thumb">
                       <span class="cat c1">News</span> <img src="/storage/article_photos/thumbnail/{{$n->large_thumb}}" alt=""> 
                    </div>
                    <div class="new-txt">
                       <ul class="news-meta">
                          <li><?= date('d M, Y', strtotime($n->created_at)) ?></li>
                          <li></li>
                       </ul>
                       <h6><a href="/news/{{$n->slug}}">{{$n->title}}</a></h6>
                       <?php 
                             $teaser = substr(html_entity_decode(strip_tags($n->body)), 0, 85);
                       ?>
                       <p> {{$teaser}} [...]</p>
                    </div>
                    <div class="event-post-loc"> <i class="fas fa-map-marker-alt"></i> Kalayaan Laguna, PH <a href="/news/{{$n->slug}}"><i class="fas fa-arrow-right"></i></a> </div>
                 </div>
              </div>
              <!--News Box End--> 
              @endforeach
              
           </div>
           <div class="row">
              <div class="site-pagination">
                 <nav aria-label="Page navigation">
                    {{ $news->links() }}
                    {{-- <ul class="pagination">
                       <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li class="active"><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                    </ul> --}}
                 </nav>
              </div>
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