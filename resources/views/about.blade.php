
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
  <div class="main-content p80 favorite-bg"> 
    <div class="department-details">
        <div class="container">
           <div class="row">
              <!-- <div class="col-md-12 text-center">
                 <div class="deprt-txt text-center" style="max-width: 800px; margin: auto;">
                    <h3>MISSION</h3>
                    <h6 style="font-size:28px; margin-bottom: 30px;">To provide maximum services through people empowerment and in partnership with other agencies, private sectors and other civic societies, steer social, economic, infrastructure development having deep awareness on environmental sustainability towards a disaster-resilient community.
                    </h6>
                    <h6 style="font-size:28px; margin-bottom: 100px; font-style: italic;">
                      (Makapagbigay ng pinakamataas na antas ng paglilingkod sa pamamagitan ng pagbibigay tinig sa mga mamamayan at sa pakikipagkaisa sa iba’t ibang  ahensiya ng pamahalaan, pribadong sector at iba pang pambayang samahan, umugit ng kaunlarang panlipunan, ekonomiya, imprastraktura na patuloy na napananatili ang malinis at magandang kalikasan tungo sa pamayanang ligtas sa kapahamakan.)
                    </h6>
                    
                    
                    <h3>VISION</h3>
                    <h6 style="font-size:28px; margin-bottom: 30px;">A well-developed, agricultural and environment - friendly community of peaceful, God-loving, healthy and united citizenry.</h6>
                    <h6 style="font-size:28px; margin-bottom: 50px; font-style: italic;">(Isang maunlad na agrikultura at makakalikasang komunidad na may mapayapa, maka-Diyos, malusog at nagkakaisang mamamayan.)</h6>   
                 </div>
              </div> -->
              <?php echo $content->body; ?>
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

<script src="/js/custom.js"></script>

</body>
</html>