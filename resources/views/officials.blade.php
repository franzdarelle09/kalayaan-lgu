
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

  <!--Slider End--> 
  <!--Main Content Start-->
  <div class="main-content favorite-bg"> 
    <div class="team-grid official-members ">
        <div class="container">
            <div class="title-style-1 text-center" style="margin-top: 50px;">
                <h2>Elected Officials</h2>
                <h5>2022-2025</h5>
              </div>
           <div class="row justify-content-md-center margin-official">
              <div class="col col-md-3 col-md-offset-3 col-sm-12" style="display: flex; margin-bottom:20px;">
                  <div class="team-box">
                     <div class="team-thumb">  <img src="/storage/officials_photos/<?= $officials[0]['image'] ?? 'default.png' ?>" alt=""></div>
                     <div class="team-txt">
                        <h5>HON. {{ $officials[0]['name'] }}</h5>
                        <strong class="dep">{{ $officials[0]['title'] }}</strong>
                        <ul class="team-social">
                           <li><em>Connect:</em></li>
                           <li><a href="<?= $officials[0]['twitter'] ?? '#' ?>"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="<?= $officials[0]['facebook'] ?? '#' ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="<?= $officials[0]['instagram'] ?? '#' ?>"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
              </div>
             
              <div class="col col-md-3 col-sm-12" style="display: flex; margin-bottom:20px;">
                  <div class="team-box">
                     <div class="team-thumb">  <img src="/storage/officials_photos/<?= $officials[1]['image'] ?? 'default.png' ?>" alt=""></div>
                     <div class="team-txt">
                        <h5>HON. {{ $officials[1]['name'] }}</h5>
                        <strong class="dep">{{ $officials[1]['title'] }}</strong>
                        <ul class="team-social">
                           <li><em>Connect:</em></li>
                           <li><a href="<?= $officials[1]['twitter'] ?? '#' ?>"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="<?= $officials[1]['facebook'] ?? '#' ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="<?= $officials[1]['instagram'] ?? '#' ?>"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
              </div>
           </div>
          
           <div class="row margin-official">
           @for($i = 2; $i <= 9; $i++)
           <div class="col col-md-3 col-sm-12" style="display: flex; margin-bottom:20px;">
               <div class="team-box">
                  <div class="team-thumb">  <img src="/storage/officials_photos/<?= $officials[$i]['image'] ?? 'default.png' ?>" alt=""></div>
                  <div class="team-txt">
                     <h5>HON. {{ $officials[$i]['name'] }}</h5>
                     <strong class="dep">{{ $officials[$i]['title'] }}</strong>
                     <ul class="team-social">
                        <li><em>Connect:</em></li>
                        <li><a href="<?= $officials[$i]['twitter'] ?? '#' ?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?= $officials[$i]['facebook'] ?? '#' ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?= $officials[$i]['instagram'] ?? '#' ?>"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>

           @endfor
               
                   <!--Team Box Start-->
            <div class="col-md-3 col-sm-12 col-md-offset-3" style="display: flex; margin-bottom:20px;">
                  <div class="team-box">
                     <div class="team-thumb">  <img src="/storage/officials_photos/<?= $officials[10]['image'] ?? 'default.png' ?>" alt=""></div>
                     <div class="team-txt">
                        <h5>HON. {{ $officials[10]['name'] }}</h5>
                        <strong class="dep">{{ $officials[10]['title'] }}</strong>
                        <ul class="team-social">
                           <li><em>Connect:</em></li>
                           <li><a href="<?= $officials[10]['twitter'] ?? '#' ?>"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="<?= $officials[10]['facebook'] ?? '#' ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="<?= $officials[10]['instagram'] ?? '#' ?>"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
             </div>
             <!--Team Box End-->         
             <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex; margin-bottom:20px;">
                  <div class="team-box">
                     <div class="team-thumb">  <img src="/storage/officials_photos/<?= $officials[11]['image'] ?? 'default.png' ?>" alt=""></div>
                     <div class="team-txt">
                        <h5>HON. {{ $officials[11]['name'] }}</h5>
                        <strong class="dep">{{ $officials[11]['title'] }}</strong>
                        <ul class="team-social">
                           <li><em>Connect:</em></li>
                           <li><a href="<?= $officials[11]['twitter'] ?? '#' ?>"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="<?= $officials[11]['facebook'] ?? '#' ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="<?= $officials[11]['instagram'] ?? '#' ?>"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
             </div>
             <!--Team Box End-->         
           </div>
           
        </div>
        <!--Team End--> 
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

<script src="/js/custom.js"></script>

</body>
</html>