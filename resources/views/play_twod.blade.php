@extends('layouts.user_app')
@section('user_styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
<style>
  .digit.selected {
    background-color: #007bff;
    color: white;
    border-radius: 50%;
    width: 2.2rem;
    /* Reduced size */
    height: 2.2rem;
    /* Reduced size */
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #007bff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    margin: 0 4px;
    /* Spacing between digits */
  }

  .digit {
    border: 3px solid #7A316F;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
    background-color: #1B6B93;
    color: white;
    border-radius: 8px;
    font-size: 20px;
    font-weight: bold;
    transition: all 0.3s ease;
    cursor: pointer;
    margin: 0 5px;
    /* Spacing between digits */
  }

  .beauty {
    font-family: 'Arial', sans-serif;
    /* Change as per your preference */
    /* background: linear-gradient(45deg, #f3f4f6, #ddd); */
    /* Light gradient background */
    padding: 0.5em;
  }

  @keyframes goldAnimate {
    0% {
      border-color: #ffd700;
    }

    50% {
      border-color: #ffcc00;
    }

    100% {
      border-color: #ffdb58;
    }
  }

  */
  /* General styles */

  .digit:hover {
    transform: translateY(-5px);
    /* Slight lift effect */
    box-shadow: 0 6px 2px rgba(0, 0, 0, 0.15);
    /* Increased shadow on hover */
  }

  .disabled {
    cursor: not-allowed;
    /* Indicates non-clickable */
  }

  .disabled:hover {
    transform: none;
    /* No lift effect for disabled */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* No change in shadow for disabled */
  }

  .scrollable-container {
    max-height: 450px;
    /* Adjust the height as needed */
    overflow-y: auto;
    /* Enable vertical scrolling when content overflows */
  }
</style>
@endsection
@section('content')
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{ asset('user_app/assets/img/lotto/banner2.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Delight 2D | 3D System</h1>
          {{-- <p class="lead text-white mt-3">Free & Open Source Web UI Kit built over Bootstrap 5. <br /> Join over 1.4 million developers around the world. </p> --}}
        </div>
      </div>
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
  </div>
</header>
<div class="container">
  <div class="row align-items-center">
    <div class="col-lg-10 mx-auto">
      <div class="row justify-content-center">
        <div class="col-md-11">
          <div class="info">
            <div class="icon icon-sm">
              {{-- 1 --}}
            </div>
            <div class="d-flex">
              <h5 class="font-weight-bolder mt-3">Delight 2D - {{ Auth::user()->name }} 's account balance -
                <span id="userBalance" data-balance="{{ Auth::user()->balance }}">{{ Auth::user()->balance }} MMK</span>
              </h5>
              <div class="mt-3 ms-4">
                <a href="{{ url('/user_profile') }}" class="btn btn-sm bg-gradient-primary btn-round mb-0 me-1 mt-md-0">Fill
                  Balance</a>
              </div>
            </div>

            <div class="scrollable-container mt-2">
              @foreach($twoDigits->chunk(5) as $chunk)
              <div class="row beauty">
                @foreach($chunk as $digit)
                @php
                $totalBetAmountForTwoDigit = DB::table('lottery_two_digit_pivot')
                ->where('two_digit_id', $digit->id)
                ->sum('sub_amount');
                @endphp

                @if($totalBetAmountForTwoDigit < 5000) <div class="col-2 mx-auto text-center digit" style="background-color: {{ 'javascript:getRandomColor();' }};" onclick="selectDigit('{{ $digit->two_digit }}', this)">
                  {{ $digit->two_digit }}
              </div>
              @else
              <div class="col-2 text-center digit disabled" style="background-color: {{ 'javascript:getRandomColor();' }}" onclick="alert('This two digit\'s amount limit is full.')">
                {{ $digit->two_digit }}
              </div>
              @endif
              @endforeach
            </div>
            @endforeach
          </div>

        <form action="{{ route('admin.two-d-lotteries.store') }}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-6 mt-4">
              <input type="text" name="selected_digits" id="selected_digits" class="form-control">
              <div id="amountInputs"></div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="totalAmount">Total Amount</label>
                <input type="text" id="totalAmount" name="totalAmount" class="form-control" readonly>
              </div>
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              {{-- PlayNow & Close buttons --}}
              <div class="modal-footer">
                <button type="submit" class="btn bg-gradient-primary mx-3">playNow</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          <!-- Add this right above your PlayNow & Close buttons in the modal-body -->

          </form>
        </div>
      </div>

    </div>

  </div>
</div>

{{-- add more col --}}
</div>
@endsection
@section('user_scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
<script>
  function selectDigit(num, element) {
    const selectedInput = document.getElementById('selected_digits');
    const amountInputsDiv = document.getElementById('amountInputs');
    let selectedDigits = selectedInput.value ? selectedInput.value.split(",") : [];

    // Check if the digit is already selected
    if (selectedDigits.includes(num)) {
      // If it is, remove the digit, its style, and its input field
      selectedInput.value = selectedInput.value.replace(num, '').replace(',,', ',').replace(/^,|,$/g, '');
      element.classList.remove('selected');
      const inputToRemove = document.getElementById('amount_' + num);
      amountInputsDiv.removeChild(inputToRemove);
    } else {
      // Otherwise, add the digit, its style, and its input field
      selectedInput.value = selectedInput.value ? selectedInput.value + "," + num : num;
      element.classList.add('selected');

      const amountInput = document.createElement('input');
      amountInput.setAttribute('type', 'number');
      amountInput.setAttribute('name', 'amounts[' + num + ']');
      amountInput.setAttribute('id', 'amount_' + num);
      amountInput.setAttribute('placeholder', 'Amount for ' + num);
      amountInput.setAttribute('min', '100');
      amountInput.setAttribute('max', '5000');
      amountInput.setAttribute('class', 'form-control mt-2');
      amountInput.onchange = updateTotalAmount; // Add this line to call the total update function
      amountInputsDiv.appendChild(amountInput);
    }

    updateTotalAmount();
  }

  // New function to calculate and display the total amount
  function updateTotalAmount() {
    let total = 0;
    const inputs = document.querySelectorAll('input[name^="amounts["]');
    inputs.forEach(input => {
      total += Number(input.value);
    });

    // Get the user's current balance from the data attribute
    const userBalanceSpan = document.getElementById('userBalance');
    let userBalance = Number(userBalanceSpan.getAttribute('data-balance'));

    // Check if user balance is less than total amount
    if (userBalance < total) {
      //alert('Your balance is not enough to play two digit.');
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Your balance is not enough to play two digit. - သင်၏လက်ကျန်ငွေ မလုံလောက်ပါ - ကျေးဇူးပြု၍ ငွေဖြည့်ပါ။',
        footer: `<a href=
        "{{ route('admin.profiles.index') }}" style="background-color: #007BFF; color: #FFFFFF; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Fill Balance - ငွေဖြည့်သွင်းရန် နိုပ်ပါ </a>`
      });
      return; // Exit the function to prevent further changes 
    }
    // Decrease the user balance by the total
    userBalance -= total;

    // Update the displayed balance and the data attribute
    userBalanceSpan.textContent = userBalance;
    userBalanceSpan.setAttribute('data-balance', userBalance);

    document.getElementById('totalAmount').value = total;
  }

  function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }
  // sweet alert
  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // prevent the form from submitting immediately

    Swal.fire({
      title: 'Are you sure- ထိုးမှာလား ?',
      text: 'You are about to submit your lottery choices.',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, submit it! - ထိုးမယ်!',
      cancelButtonText: 'No, cancel! - မထိုးပါ!'
    }).then((result) => {
      if (result.isConfirmed) {
        // If the user clicked "Yes", submit the form
        event.target.submit();
      }
    });
  });
</script>
@endsection