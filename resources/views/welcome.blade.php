@extends('layouts.user_app')
<link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
@section('user_styles')
<style>
  .result {
    background-image: url('<?php echo asset('user_app/assets/img/lotto/contact.jpg') ?>');
    background-repeat: no-repeat;
    background-size: cover;
  }


  .count-down {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .start-card {
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  }

  .home-banner {
    width: 550px;
    height: 250px;
    top: 25px;
    opacity: 0.9;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  }

  .icon-card {
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
  }

  .parent-banner {
    position: relative;
  }

  .text-banner {
    position: absolute;
    top: 170;
    left: 250;
  }

  @media (max-width: 991px) {
    .text-banner {
      display: none;
    }
  }
</style>
@endsection
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
@section('content')
<header class="header-2">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="position-absolute w-100 z-index-1 bottom-0">
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="">
          <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
          <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
          <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
          <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
        </g>
      </svg>
    </div>
    <div class="carousel-inner">
      @foreach($banners as $key=>$banner)
      <div class="carousel-item parent-banner {{ $loop->first ? 'active' : '' }}">
        <img src="{{ $banner->img_url }}" class="d-block w-100 opacity-8" style="max-height: 500px;" alt="...">
      </div>
      @endforeach
    </div>
  </div>
</header>
<section class="text-banner">
  <h2 class="text-primary text-gradient">You Can Play 2D | 3D At</h2>
  <h4>Delight 2D | 3D System</h4>
  <!-- <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. At quam doloremque cupiditate</p> -->
  <a href="{{ route('admin.play-twod.index') }}" class="btn mt-1 bg-gradient-primary btn-xl">PLAY NOW</a>
</section>

<section id="count-stats" style="margin-top: 100px; ">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur count-down" style=" padding-top: 30px;">
        <div class="row mt-3">
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h4 class="text-gradient text-primary">
                <span id="liveSet">{{ $data['live']['set'] }}</span>
              </h4>
              <h5 class="mt-3">Set Index</h5>
              {{-- <p class="text-sm">From buttons, to inputs, navbars, alerts or cards, you are covered</p> --}}
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h4 class="text-gradient text-primary"> <span id="liveValue">{{ $data['live']['value'] }}</span></h4>
              <h5 class="mt-3">Value</h5>
              {{-- <p class="text-sm">Mix the sections, change the colors and unleash your creativity</p> --}}
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4">
            <div class="p-3 text-center">
              <h6 class="text-gradient text-primary">
                <span id="liveTime">{{ $data['live']['time'] }}</span>
              </h6>
              <h5 class="mt-3">RealTime</h5>
              {{-- <p class="text-sm">Save 3-4 weeks of work when you use our pre-made pages for your website</p> --}}
            </div>
            <hr class="vertical dark">
          </div>
          {{-- <div class="col-md-3">
              <div class="p-3 text-center">
                <h6 class="text-gradient text-primary">
                  <span id="liveTime">{{ $data['live']['time'] }}</span>
          </h6>
          <h5 class="mt-3">RealTime</h5>
        </div>
      </div> --}}
    </div>
  </div>
</section>

<section class="mt-5">
  <div class="container">
    <h3 class="text-center">How To Start</h3>
    <div class="row mt-sm-2">
      <div class="col-lg-4 mx-auto">
        <div class="card mt-lg-5 mt-sm-3 mb-5 start-card p-4">
          <h2 style="color:#e2d4e7">01</h2>
          <img src="{{ asset('/user_app/assets/img/lotto/get.png') }}" width="90px" height="90px" style="display: block; margin: 0 auto;">
          <h5 class="text-center">Get Access</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non accusamus labore quae laborum necessitatibus, eius dolorum,illo?</p>
        </div>
      </div>
      <div class="col-lg-4 mx-auto">
        <div class="card start-card p-4">
          <h2 style="color:#e2d4e7">02</h2>
          <img src="{{ asset('/user_app/assets/img/lotto/lottery-icon.png') }}" width="100px" height="100px" style="display: block; margin: 0 auto;">
          <h5 class="text-center">Choose Number</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non accusamus labore quae laborum necessitatibus, eius dolorum,illo?</p>
        </div>

      </div>
      <div class="col-lg-4 mx-auto">
        <div class="card mt-5 mb-3 start-card p-4">
          <h2 style="color:#e2d4e7">03</h2>
          <img src="{{ asset('/user_app/assets/img/lotto/start3.jpg') }}" width="100px" height="100px" style="display: block; margin: 0 auto;">
          <h5 class="text-center">Win Prizes</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non accusamus labore quae laborum necessitatibus, eius dolorum,illo?</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-sm-3 mt-3" id="download-soft-ui">
  <div class="position-relative w-100 overflow-hidden result">
    <img src="{{ asset('user_app/assets/img/shapes/waves-gray.svg')}}" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-4">
    <div class="container py-5 postion-relative z-index-2 position-relative">
      <div class="row">
        <div class="col-md-7 mx-auto text-center">
          <h3 class="text-white mb-0">Delight 2D | 3D System</h3>
          <h3 class="text-primary text-gradient-primary mb-4">Lottery Result</h3>
          <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure itaque quo facere, commodi voluptatibus perspiciatis placeat nihil.</p>
          <a href="{{ url('/lottery_result') }}" class=" btn btn-primary btn-lg mb-3 mb-sm-0 ms-auto">View Result</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-3 mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12 my-auto">
        <h3 class="text-gradient text-primary mb-0">You liked it and</h3>
        <h3>Want more?</h3>
        <p class="pe-md-5 mb-4">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia soluta corrupti velit molestias debitis quia voluptas modi delectus explicabo? Doloribus maxime sunt id itaque. Aliquam suscipit reprehenderit neque iusto, doloremque quas velit quibusdam.
        </p>
        <div class="github-buttons">
          <a href="{{ url('/user_fillmoney') }}" class="btn bg-gradient-primary mb-5 mb-sm-0">Fill Money</a>
          <div class="github-button">
            <span></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12 my-auto">
        <a href="https://www.creative-tim.com/product/soft-ui-design-system-pro">
          <img class="w-100 border-radius-lg shadow-lg" src="{{ asset('user_app/assets/img/lotto/l1.png') }}" alt="Product Image">
        </a>
      </div>
    </div>
  </div>
</section>

<section style="margin-top: 60px;">
  <div class="container">
    <div class="row mt-2">
      <div class="col-lg-3 col-md-6 py-2">
        <div class="card icon-card py-2 pe-2">
          <div class="icon icon-shape rounded-circle bg-gradient-primary shadow text-center mt-3 mx-auto">
            <i class="fa fa-ticket mt-1 opacity-10"></i>
          </div>
          <div class="description text-center ps-3 mt-1">
            <p class="mb-1 text-bold">အီလက်ထရောနစ် လက်မှတ်</p>
            <p>လက်မှတ် ပျက်စီး၊ ပျောက်ဆုံး၊ ထိန်းသိမ်းခြင်းကင်းဝေးခြင်း။</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 py-2">
        <div class="card icon-card py-2 pe-2">
          <div class="icon icon-shape rounded-circle bg-gradient-primary shadow text-center mt-3 mx-auto">
            <i class=" ni ni-trophy opacity-10"></i>
          </div>
          <div class="description text-center ps-3 mt-1">
            <p class="mb-1 text-bold">စိတ်ကြိုက်နံပါတ်</p>
            <p>သင့်ကံကြမ္မာကို သင်ရွေးချယ်နိုင်ခြင်း။</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 py-2">
        <div class="card icon-card py-2 pe-2">
          <div class="icon icon-shape rounded-circle bg-gradient-primary shadow text-center mt-3 mx-auto">
            <i class=" fa mt-1 fa-shield opacity-10"></i>
          </div>
          <div class="description text-center ps-3 mt-1">
            <p class="mb-1 text-bold">၁၀၀% စိတ်ချရမှု</p>
            <p>သင်၏ အချက်အလက်နှင့် လုံခြုံရေးအား အလေးထားခြင်း။</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 py-2">
        <div class="card icon-card py-2 pe-2">
          <div class="icon icon-shape rounded-circle bg-gradient-primary shadow text-center mt-3 mx-auto">
            <i class=" ni ni-like-2 opacity-10"></i>
          </div>
          <div class="description text-center ps-3 mt-1">
            <p class="mb-1 text-bold">ဆုမဲပေါက်စဉ်</p>
            <p>လွယ်ကူ၊ မြန်ဆန်၊ မှန်ကန်သော ဆုမဲပေါက်စဉ်။</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






@endsection


@section('user_scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
  $(document).ready(function() {
    function fetchData() {
      $.ajax({
        url: "/",
        type: "GET",
        dataType: "json",
        success: function(data) {
          // Update live data
          updateLiveData(data.live);

          // Update results
          updateResultsData(data.result);
        }
      });
    }

    function updateLiveData(liveData) {
      // Helper function to update text and possibly animate the update
      function updateAndAnimate(elementId, newValue) {
        const element = $(elementId);
        if (element.text() !== newValue) {
          element.text(newValue).addClass('activeUpdate');
          setTimeout(function() {
            element.removeClass('activeUpdate');
          }, 300);
        }
      }

      updateAndAnimate("#liveSet", liveData.set);
      updateAndAnimate("#liveValue", liveData.value);
      $("#liveTime").text(liveData.time); // Always update time
    }

    function updateResultsData(results) {
      let resultsHtml = '';
      results.forEach(function(result) {
        resultsHtml += `
                    <p>Set: ${result.set}</p>
                    <p>Value: ${result.value}</p>
                    <p>Open Time: ${result.open_time}</p>
                    <hr>
                `;
      });

      $("#resultsData").html(resultsHtml);
    }

    fetchData(); // Initial data fetch
    setInterval(fetchData, 1000); // Fetch data every 3 seconds
  });
</script>

<script>
  $(document).ready(function() {
    // Initialize the carousel
    $('#myCarousel').carousel();

    // Set the interval for auto-sliding (5 seconds in this example)
    $('#myCarousel').carousel({
      interval: 1000 // Adjust this interval as needed
    });
  });
</script>


@endsection