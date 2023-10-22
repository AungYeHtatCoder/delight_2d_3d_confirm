@include('layouts.user_head')
@yield('user_styles')
<style>
 .number-circle {
  width: 30px;
  height: 30px;
  border-radius: 50% !important;
  background-color: #0074d9 !important;
  color: #fff;
  text-align: center;
  line-height: 30px;
 }
</style>

<body class="presentation-page">
 <!-- Navbar -->
 @include('layouts.user_navbar')
 <section style="margin-top: 100px;">
  <div class="container justify-content-center">
   <div class="row">
    <div class="col-lg-10 mx-auto">
     <div class="text-center">
      <h2>Lottery Results</h2>
     </div>
     <div class="card">
      <div class="table-responsive">
       <table class="table align-items-center mb-0 text-center">
        <tbody>
         <tr>
          <th>Name</th>
          <th>Draw Date</th>
          <th>Winning Number</th>
          <th>Winning Price</th>
         </tr>
         <tr>
          <td>
           <div class="d-flex px-2 py-1">
            <div>
             <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
            </div>
            <div class="d-flex flex-column justify-content-center">
             <h6 class="mb-0 text-l">John Michael</h6>
            </div>
           </div>
          </td>
          <td>02-10-2023</td>
          <td>
           <div class="number-circle mx-auto">12</div>
          </td>
          <td>
           <i class="fa fa-money" style="font-size: 20px;color: blue"></i>
           <p class="text-xl text-secondary mb-0">20,000</p>
          </td>
         </tr>

         <tr>
          <td>
           <div class="d-flex px-2 py-1">
            <div>
             <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
            </div>
            <div class="d-flex flex-column justify-content-center">
             <h6 class="mb-0 text-l">John Michael</h6>
            </div>
           </div>
          </td>
          <td>02-10-2023</td>
          <td>
           <div class="number-circle mx-auto">34</div>
          </td>
          <td>
           <i class="fa fa-money" style="font-size: 20px;color: blue"></i>
           <p class="text-xl text-secondary mb-0">20,000</p>
          </td>
         </tr>

         <tr>
          <td>
           <div class="d-flex px-2 py-1">
            <div>
             <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" class="avatar avatar-sm me-3">
            </div>
            <div class="d-flex flex-column justify-content-center">
             <h6 class="mb-0 text-l">John Michael</h6>
            </div>
           </div>
          </td>
          <td>02-10-2023</td>
          <td>
           <div class="number-circle mx-auto">56</div>
          </td>
          <td>
           <i class="fa fa-money" style="font-size: 20px;color: blue"></i>
           <p class="text-xl text-secondary mb-0">20,000</p>
          </td>
         </tr>

         <tr>
          <td>
           <div class="d-flex px-2 py-1">
            <div>
             <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
            </div>
            <div class="d-flex flex-column justify-content-center">
             <h6 class="mb-0 text-l">John Michael</h6>
            </div>
           </div>
          </td>
          <td>02-10-2023</td>
          <td>
           <div class="number-circle mx-auto">78</div>
          </td>
          <td>
           <i class="fa fa-money" style="font-size: 20px;color: blue"></i>
           <p class="text-xl text-secondary mb-0">20,000</p>
          </td>
         </tr>

         <tr>
          <td>
           <div class="d-flex px-2 py-1">
            <div>
             <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
            </div>
            <div class="d-flex flex-column justify-content-center">
             <h6 class="mb-0 text-l">John Michael</h6>
            </div>
           </div>
          </td>
          <td>02-10-2023</td>
          <td>
           <div class="number-circle mx-auto">98</div>
          </td>
          <td>
           <i class="fa fa-money" style="font-size: 20px;color: blue"></i>
           <p class="text-xl text-secondary mb-0">20,000</p>
          </td>
         </tr>

         <tr>
          <td>
           <div class="d-flex px-2 py-1">
            <div>
             <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" class="avatar avatar-sm me-3">
            </div>
            <div class="d-flex flex-column justify-content-center">
             <h6 class="mb-0 text-l">John Michael</h6>
            </div>
           </div>
          </td>
          <td>02-10-2023</td>
          <td>
           <div class="number-circle mx-auto">00</div>
          </td>
          <td>
           <i class="fa fa-money" style="font-size: 20px;color: blue"></i>
           <p class="text-xl text-secondary mb-0">20,000</p>
          </td>
         </tr>
        </tbody>
       </table>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 @include('layouts.user_footer')
 @yield('user_scripts')