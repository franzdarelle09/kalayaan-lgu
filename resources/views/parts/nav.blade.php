<nav class="navbar">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="/"><img src="/images/logo.png" style="height: 60px;" alt=""></a> </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li> <a href="/">Home</a></li>
                  <li> <a href="/about-us">About Us</a></li>
                  <li> <a href="/officials">Officials</a></li>
                  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Documents <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <?php
                        $menu_docs = App\Documentlist::whereActive(1)->orderBy('title')->get();
                      ?>
                      <li><a href="/documents">All Documents</a></li>
                      @foreach($menu_docs as $m)
                      <li><a href="/documents/{{$m->id}}">{{$m->title}}</a></li>
                      @endforeach
                    </ul>
                  </li>
                  <li> <a href="/news-list">News</a></li>
                  
                  
                  <li><a href="https://www.dropbox.com/sh/titeql60uvwj0u3/AAAgn6egTaJdHMdC_h0n1py7a?dl=0" target="_blank">FULL DISCLOSURE</a></li>
                  <li><a href="#">Contact Us</a></li>
                
                  
                </ul>
                <!--<ul class="nav navbar-nav navbar-right">
                  <li class="search-btn"><a class="search-icon" href="#search"> <i class="fas fa-search"></i> </a></li>
                  <li class="bars-btn"><a href="#" id="sidebarCollapse"><img src="/images/bars.png" alt=""> </a></li>
                </ul>
                <div id="search">
                  <button type="button" class="close">×</button>
                  <form class="search-overlay-form">
                    <input type="search" value="" placeholder="type keyword(s) here" />
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </form>
                </div>-->
              </div>
            </nav>