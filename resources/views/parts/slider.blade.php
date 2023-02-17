<div class="main-slider wf100">
    <div id="home-slider" class="owl-carousel owl-theme"> 
      @foreach($banners as $banner)
        <div class="item">
          <img src="/storage/banners/<?= $banner->image ?>"  alt=""> 
        </div>
      @endforeach
    </div>
</div>