@include('layouts.user_head')
@yield('user_styles')
<style>
 body {
  width: 100vw;
  overflow-x: hidden;
 }

 /* .custom-fab {
  padding: 0px;
  font-size: 50px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
 } */
 .card {
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
 }

 .fa-telegram {
  border-radius: 50%;
  font-size: 60px;
  text-align: center;
  color: #229ED9;

 }

 .fa-phone {
  color: goldenrod;
 }

 .fa-viber {
  /* border-radius: 50%; */
  font-size: 60px;
  /* text-align: center; */
  /* background: #59267c; */
  color: #59267c;

 }
</style>

<body class="presentation-page">
 <!-- Navbar -->
 @include('layouts.user_navbar')

 <header class="header-2">
  <div class="page-header min-vh-50 relative" style="background-image: url('{{ asset('user_app/assets/img/lotto/pt2.jpg') }}')">
   <div class="container">
    <div class="row mt-4">
     <div class="col-lg-7 text-center mx-auto">
      <!-- <h1 class="pt-3 mt-n5">Our Service</h1> -->
     </div>
    </div>
   </div>
   <!-- <div class="position-absolute w-100 z-index-1 bottom-0">
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
   </div> -->
  </div>
 </header>
 <section style="padding-top: 50px;">
  <div class="container">
   <div class="row">
    <div class="text-center mb-4">
     <h6>အောက်ပါဖုန်းနံပါတ်သည် shwemyanmar2d ကုမ္ပဏီ၏ ဝန်ဆောင်မှုဖုန်းနံပါတ်ဖြစ်သည်</h6>
     <h6>နေ့စဉ်(၂၄) နာရီ ၊ ပိတ်ရက်မရှိ ဝန်ဆောင်ပေးနေပါသည်။</h6>
    </div>
    <div class="col-lg-6 mb-3">
     <div class="card p-4">
      <div class="d-flex">
       <span class="fab fa-telegram"></span>
       <div class="ps-4">Telegram ဖြင့်ဆက်သွယ်ပေးပါ <p class="text-bold">Our Service is 24/7</p>
       </div>
      </div>
      <div>
       <p>ဝန်ဆောင်မှုဖုန်းနံပါတ်များ</p>
       <table class="table">
        <tr>
         <td>+959897080030</td>
         <td class="my-auto"><span class="fa fa-phone"></span></td>
        </tr>
        <tr>
         <td>+959897080031</td>
         <td class="my-auto"><span class="fa fa-phone"></span></td>
        </tr>
        <tr></tr>
       </table>
      </div>


     </div>
    </div>
    <div class="col-lg-6">
     <div class="card p-4">
      <div class="d-flex">
       <span class="fab fa-viber"></span>
       <div class="ps-4">Viber ဖြင့်ဆက်သွယ်ပေးပါ <p class="text-bold">Our Service is 24/7</p>
       </div>
      </div>
      <div>
       <p>ဝန်ဆောင်မှုဖုန်းနံပါတ်များ</p>
       <table class="table">
        <tr>
         <td>+959897080030</td>
         <td class="my-auto"><span class="fa fa-phone"></span></td>
        </tr>
        <tr></tr>
       </table>
      </div>


     </div>
    </div>
   </div>
  </div>
 </section>

 @include('layouts.user_footer')
 @yield('user_scripts')