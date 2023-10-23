@include('layouts.user_head')
@yield('user_styles')

<body class="presentation-page">
 <!-- Navbar -->
 @include('layouts.user_navbar')
 <section style="margin-top: 150px;">
  <div class="container">

   <div class="row">
    <div class="col-lg-12">
     <div class="alert alert-primary text-white" role="alert">
      <strong>From Delight 2D </strong> Winner Lists
     </div>
     <div class="card">
      <div class="table-responsive">
       @if($winners->isEmpty())
        <p>No winners found for the past month.</p>
    @else
       <table class="table align-items-center mb-0">
        <tbody>
          @foreach($winners as $winner)
         <tr>
          <td>
           <div class="d-flex px-2 py-1">
            <div>
             <img src="{{ $winner->profile }}" class="avatar avatar-sm me-3">
            </div>
            <div class="d-flex flex-column justify-content-center">
             <h6 class="mb-0 text-l">{{ $winner->name }}</h6>

            </div>
           </div>
          </td>
          <td>
           <div class="d-flex px-2 py-1">
            <div>
             <h6> Session - {{ ucfirst($winner->session) }}</h6>
            </div>
           
           </div>
          </td>
          <td>
            <div class="d-flex px-2 py-1">
             <h6 class="mb-0 text-l">Win No - {{ $winner->prize_no }}</h6>
            </div>
          </td>
          <td>
            <div class="d-flex px-2 py-1">
             <h6 class="mb-0 text-l">Play Amount - {{ $winner->sub_amount }}</h6>
            </div>
          </td>

          <td>
           <i class="fa fa-money" style="font-size: 20px;color: blue"></i>
           <p class="text-xl text-secondary mb-0">Prize Amount - {{ $winner->prize_amount }}</p>
          </td>
          <td>
            <div class="d-flex px-2 py-1">
             <h6 class="mb-0 text-l">{{ \Carbon\Carbon::parse($winner->created_at)->format('l, d M Y') }}</h6>
            </div>
          </td>
         </tr>

        
          @endforeach
            </tbody>
        </table>
    @endif
      </div>
     </div>
    </div>
    {{-- <div class="col-lg-6">
     <div class="alert alert-secondary text-white" role="alert">
      <strong>Evening</strong> Winner Lists
     </div>
     
    </div> --}}
   </div>

  </div>
 </section>

 @include('layouts.user_footer')
 @yield('user_scripts')