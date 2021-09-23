
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
<link href="/css/prettyPhoto.css" rel="stylesheet">
<link href="/css/slick.css" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="/images/fav.png" type="image/png">

<script src="https://kit.fontawesome.com/8fee6a85fe.js" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body>
<style>
    .gallery-thumb{
        width: 350px;
        height: 350px;
        overflow: hidden;
    }
    .gallery-thumb img{
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
    }
    @media only screen and (min-width: 320px) {
        .gallery-thumb{
            width: 280px;
            height: 280px;
        }
    }
    @media only screen and (min-width: 991px) {
        .gallery-thumb{
            width: 300px;
            height: 300px;
        }
    }
    @media only screen and (min-width: 1200px) {
        .gallery-thumb{
            width: 350px;
            height: 350px;
        }
    }
</style>
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
 <!--Main Content Start-->
 <div class="main-content p80 gallery favorite-bg">
    
    <!-- Gallery Page Start -->
    <div class="container">
        <div class="title-style-1 text-center" style="">
            <h2>{{ $project->name }}</h2>
            @if($project->description != "" ) 
            <p>{{ $project->description }}</p>
            @endif
        </div>
       <div class="row">
          @foreach($project_photos as $p)
          <div class="col-md-4 col-sm-4">
             <div class="gallery-thumb"> <a href="/images/project_photos/{{ $p->name }}" data-rel="prettyPhoto[gallery]"><i class="fas fa-search"></i></a> <img src="/images/project_photos/{{ $p->name }}" alt=""> </div>
          </div>
          @endforeach
          
          
          
       </div>
       
    </div>
    <!-- Gallery Page Start --> 
 </div>
 <!--Main Content End--> 
<!--Wrapper End--> 
<!-- JS --> 



<script src="/js/jquery.min.js"></script> 
<script src="/js/bootstrap.min.js"></script> 
<script src="/js/owl.carousel.min.js"></script> 
<script src="/js/jquery.prettyPhoto.js"></script> 
<script src="/js/slick.min.js"></script> 
<script src="/js/isotope.pkgd.min.js"></script> 
<script src="/js/custom.js"></script>
</body>
</html>