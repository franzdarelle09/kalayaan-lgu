
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
                
              </div>
           <div class="row justify-content-md-center margin-official">
             
              <div class="col col-md-3 col-md-offset-3 col-sm-12" style="display: flex;">
                 <div class="team-box">
                    <div class="team-thumb">  <img src="/images/officials/mayor.jpg" alt=""></div>
                    <div class="team-txt">
                       <h5>HON. Sandy Laganapan</h5>
                       <strong class="dep">Town Mayor</strong>
                       
                       <ul class="team-social">
                          <li><em>Connect:</em></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="https://web.facebook.com/sandy.laganapan.3" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                          
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col col-md-3 col-sm-12" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/vm.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. Kenneth<br>Ragaza</h5>
                      <strong class="dep">Town Vice Mayor</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://web.facebook.com/vicemayorkenneth.ragaza.1" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
           </div>
          
           <div class="row margin-official">
            <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex;">
               <div class="team-box">
                  <div class="team-thumb">  <img src="/images/officials/1.jpg" alt=""></div>
                  <div class="team-txt">
                     <h5>hon. Darwin<br> Ponce<br><span style="visibility: hidden;">filler</span></h5>
                     <strong class="dep">Town Councilor</strong>
                     
                     <ul class="team-social">
                        <li><em>Connect:</em></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank><i class="fab fa-facebook-f"></i></a></li>
                        
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--Team Box End-->          
            <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/2.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. Christoper Ramiro</h5>
                      <strong class="dep">Town Councilor</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://web.facebook.com/christopher.ramiro.12" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
            </div>
             <!--Team Box End-->   
             <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/3.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. RUSSEL<br> LAGANAS<br><span style="visibility: hidden;">filler</span></h5>
                      <strong class="dep">Town Councilor</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://web.facebook.com/russel.laganas" target="_blank" ><i class="fab fa-facebook-f" ></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <!--Team Box End-->         

             <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/4.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. Marian<br>Erufino<br><span style="visibility: hidden;">filler</span></h5>
                      <strong class="dep">Town Councilor</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://web.facebook.com/marian.erufino.10" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <!--Team Box End-->  
               <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/5.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. marlon<br>laganas<br><span style="visibility: hidden;">filler</span></h5>
                      <strong class="dep">Town Councilor</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://web.facebook.com/migzmarlon.laganas" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <!--Team Box End-->         
             <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/6.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. Veelly James<br>Cabamalan</h5>
                      <strong class="dep">Town Councilor</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://web.facebook.com/veellyjhames.cabamalan" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <!--Team Box End-->  
            <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/7.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. jayson<br>blanco<br><span style="visibility: hidden;">filler</span></h5>
                      <strong class="dep">Town Councilor</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://web.facebook.com/konjayson.blanco" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <!--Team Box End--> 
             <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/8.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. marty<br>sasondoncillo<br><span style="visibility: hidden;">filler</span></h5>
                      <strong class="dep">Town Councilor</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://web.facebook.com/marty.sasondoncillo" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <!--Team Box End-->           
                   <!--Team Box Start-->
            <div class="col-md-3 col-sm-12 col-md-offset-3" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/kap.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. Dominic<br>Ragas<br><span style="visibility: hidden;">filler</span></h5>
                      <strong class="dep">ABC President</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="#" target="_blank><i class="fab fa-facebook-f"></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <!--Team Box End-->         
             <!--Team Box Start-->
            <div class="col-md-3 col-sm-12" style="display: flex;">
                <div class="team-box">
                   <div class="team-thumb">  <img src="/images/officials/sk.jpg" alt=""></div>
                   <div class="team-txt">
                      <h5>HON. Lei<br>Abrillo<br><span style="visibility: hidden;">filler</span></h5>
                      <strong class="dep">SK Federation President</strong>
                      
                      <ul class="team-social">
                         <li><em>Connect:</em></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://web.facebook.com/leighlanie.abrillo" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                         
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
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