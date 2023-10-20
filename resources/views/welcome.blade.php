@extends('layouts.user_app')
<link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
@section('user_styles')
<style>
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

  .fade-in {
    animation: fadeIn 1s ease-in-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @media screen and (orientation: landscape) {
    .carousel img {
      height: 100vh;
    }
  }

  .custom-fab {
    padding: 20px;
    font-size: 30px;
    width: 70px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
  }

  /* Add a hover effect if you want */
  .fa-viber {
    background: #59267c;
    color: white;
  }

  .fa-telegram {
    background: #229ED9;
    color: white;
  }

  .fa-viber:hover {
    color: #e2d4e7;
  }

  .fa-usd {
    background: gold;
    color: white;
  }
</style>
@endsection
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
@section('content')
<section class="pt-3" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
        <div class="row">
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
  </div>
  </div>
</section>


<section style="margin-top: 50px;">
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

      <div class="carousel-inner">
        <div class="carousel-item active fade-in">
          <img src="{{ asset('user_app/assets/img/curved-images/curved-6.jpg') }}" class="d-block w-100 rounded" alt="..." style="max-height: 400px;">
          <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center">
            <div class="card home-banner">
              <div class="card-body">
                <h3 class="text-primary text-gradient">You Can Play</h3>
                <h4>Delight 2D | 3D System</h4>
                <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. At quam doloremque cupiditate</p>
                <a href="{{ route('admin.play-twod.index') }}" class="btn bg-gradient-primary btn-xl">PLAY NOW</a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item fade-in">
          <img src="{{ asset('user_app/assets/img/curved-images/curved-8.jpg') }}" class="d-block w-100 rounded" alt="..." style="max-height: 400px;">
          <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center">
            <div class="card home-banner">
              <div class="card-body">
                <h3 class="text-primary text-gradient">You Can Play</h3>
                <h4>Delight 2D | 3D System</h4>
                <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. At quam doloremque cupiditate</p>
                <a href="{{ route('admin.play-twod.index') }}" class="btn bg-gradient-primary btn-xl">PLAY NOW</a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item fade-in">
          <img src="{{ asset('user_app/assets/img/curved-images/curved-10.jpg') }}" class="d-block w-100 rounded" alt="..." style="max-height: 400px;">
          <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center">
            <div class="card home-banner">
              <div class="card-body">
                <h3 class="text-primary text-gradient">You Can Play</h3>
                <h4>Delight 2D | 3D System</h4>
                <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. At quam doloremque cupiditate</p>
                <a href="{{ route('admin.play-twod.index') }}" class="btn bg-gradient-primary btn-xl">PLAY NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

</section>

<section style="margin-top: 60px;">
  <div class="container">
    <div class="row mt-2">
      <div class="col-lg-3 col-md-6 py-2">
        <div class="card icon-card py-2 pe-2">
          <div class="icon icon-shape rounded-circle bg-gradient-primary shadow text-center mt-3 mx-auto">
            <i class="fas fa-ship opacity-10"></i>
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
            <i class=" fas fa-ship opacity-10"></i>
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
            <i class=" fas fa-ship opacity-10"></i>
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
            <i class=" fas fa-ship opacity-10"></i>
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

<section class="py-sm-5" id="download-soft-ui">
  <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
    <img src="{{ asset('user_app/assets/img/shapes/pattern-lines.svg')}}" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-6">
    <div class="container py-5 postion-relative z-index-2 position-relative">
      <div class="row">
        <div class="col-md-7 mx-auto text-center">
          <!-- <h3 class="text-white mb-0">Do you love this awesome</h3> -->
          <h3 class="text-primary text-gradient-primary mb-4">Delight 2D | 3D System</h3>
          <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure itaque quo facere, commodi voluptatibus perspiciatis placeat nihil.</p>
          <!-- <a href="https://www.creative-tim.com/product/soft-ui-design-system" class="btn btn-primary btn-lg mb-3 mb-sm-0">Download HTML</a> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 
<section>
  <div class="container custom-icon">
    <div class="row">
      <div class="col-lg-6">
        <a href="#" class="custom-fab fab fa-viber"></a>
        <a href="#" class="custom-fab fab fa-telegram"></a>
        <i class="fa fa-long-arrow-right" style="font-size: 50px;"></i>
        <a href="" class="custom-fab fa fa-usd"></a>
      </div>
    </div>
  </div>
</section> -->




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