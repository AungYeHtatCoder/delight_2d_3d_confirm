@extends('layouts.user_app')
@section('user_styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
<style>
/* --------------------
        wave
---------------------- */
.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
.waves-height {
  width: 100%;
  height: 100px;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
.coin-img {
  width: 30px;
  margin-right: 5px;
}



  .bg-darkblue {
    background-color: #130a2b;
  }
  .digit.selected {
    background-color: #007bff;
    color: white;
    background-image: linear-gradient(310deg, #cb0c9f 0%, darkorchid 100%);
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    margin: 0 4px;
    /* Spacing between digits */
  }

  .digit {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 5px 0;
    background: linear-gradient(white, white) padding-box,
    linear-gradient(to right, darkblue, darkorchid) border-box;
    border-radius: 15px;
    border: 3px solid transparent;
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
  .account-box {
    box-shadow: 0 6px 20px 0 rgb(0 0 0 / 19%);
    padding: 10px;
    font-size: 14px;
    border-radius: 10px;
  }
  .account-box h5,
  .balance-btn .btn {
    margin-bottom: 0;
  }
  
  @media (max-width: 768px) {
  .coin-img {
    margin-left: 5px;
  }
  .waves-height {
    height:40px;
    min-height:40px;
  }
  .account-box h5 {
    font-size: 14px;
  }
  
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
    {{-- remove comment --}}
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
    {{-- remove comment --}}
    <svg class="position-absolute waves-height z-index-1 bottom-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
    </svg>
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
            <div class="account-box d-flex align-items-center justify-content-between">
              <h5 class="font-weight-bolder">Delight 2D - {{ Auth::user()->name }} 's account balance -
                <span id="userBalance" data-balance="{{ Auth::user()->balance }}">{{ Auth::user()->balance }} MMK</span>
              </h5>
              <div class="balance-btn">
                <a href="{{ route('user.UserProfile') }}" class="btn btn-sm bg-gradient-primary"><img src="{{ asset('admin_app/assets/img/top-up.png')}}" alt="coin-img" class="coin-img">Fill
                  Balance</a>
              </div>
            </div>

            <div class="scrollable-container overflow-scroll mt-6">
              @foreach($twoDigits->chunk(4) as $chunk)
              <div class="row beauty d-flex justify-content-around ">
                @foreach($chunk as $digit)
                @php
                $totalBetAmountForTwoDigit = DB::table('lottery_two_digit_copy')
                ->where('two_digit_id', $digit->id)
                ->sum('sub_amount');
                @endphp

                @if($totalBetAmountForTwoDigit < 5000) <div class="col-2 text-center digit" style="background-color: {{ 'javascript:getRandomColor();' }};" onclick="selectDigit('{{ $digit->two_digit }}', this)">
                  {{ $digit->two_digit }}
                  <small class="d-block" style="font-size: 10px">ထိုးနိုင်သောပမာဏ - {{ $remainingAmounts[$digit->id] }}</small>
              </div>
              @else
              <div class="col-2 text-center digit disabled" style="background-color: {{ 'javascript:getRandomColor();' }}" onclick="showLimitFullAlert()">
                {{ $digit->two_digit }}
              </div>

              @endif
              @endforeach
            </div>
            @endforeach
          </div>

          @if($lottery_matches->is_active == 1)
          <form action="{{ route('admin.two-d-play.store') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6 mt-4">
                <input type="text" name="selected_digits" id="selected_digits" class="form-control">
                <div id="amountInputs"></div>
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
              <div class="col-md-6">
                
              </div>
            </div>
            <!-- Add this right above your PlayNow & Close buttons in the modal-body -->

          </form>
          @else
          <p>
          <h3 class="text-center">Sorry, you can't play now. Please wait for the next round.</h3>
          </p>
          @endif
        </div>
      </div>

    </div>

  </div>
  {{-- add more col --}}
</div>
</div>
@endsection
@section('user_scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
<script>
  function showLimitFullAlert() {
    Swal.fire({
      icon: 'info',
      title: 'Limit Reached',
      text: 'This two digit\'s amount limit is full.'
    });
  }

  function selectDigit(num, element) {
    const selectedInput = document.getElementById('selected_digits');
    const amountInputsDiv = document.getElementById('amountInputs');

    let selectedDigits = selectedInput.value ? selectedInput.value.split(",") : [];

    // Get the remaining amount for the selected digit
    const remainingAmount = Number(element.querySelector('small').innerText.split(' ')[1]);

    // Check if the user tries to bet more than the remaining amount
    if (selectedDigits.includes(num)) {
      const betAmountInput = document.getElementById('amount_' + num);

      if (Number(betAmountInput.value) > remainingAmount) {
        Swal.fire({
          icon: 'error',
          title: 'Bet Limit Exceeded',
          text: `You can only bet up to ${remainingAmount} for the digit ${num}.`
        });
        return;
      }
    }

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
      amountInput.onchange = function() {
        updateTotalAmount();
        checkBetAmount(this, num);
      };
      amountInputsDiv.appendChild(amountInput);
    }
  }

  //   function selectDigit(num, element) {
  //     const selectedInput = document.getElementById('selected_digits');
  //     const amountInputsDiv = document.getElementById('amountInputs');
  //     let selectedDigits = selectedInput.value ? selectedInput.value.split(",") : [];

  //     // Get the remaining amount for the selected digit
  //     const remainingAmount = Number(element.querySelector('small').innerText.split(' ')[1]);

  //     // Check if the user tries to bet more than the remaining amount
  //     if (selectedDigits.includes(num)) {
  //         const betAmountInput = document.getElementById('amount_' + num);
  //         if (Number(betAmountInput.value) > remainingAmount) {
  //             Swal.fire({
  //                 icon: 'error',
  //                 title: 'Bet Limit Exceeded',
  //                 text: `You can only bet up to ${remainingAmount} for the digit ${num}.`
  //             });
  //             return;
  //         }
  //     }

  //     // Check if the digit is already selected
  //     if (selectedDigits.includes(num)) {
  //       // If it is, remove the digit, its style, and its input field
  //       selectedInput.value = selectedInput.value.replace(num, '').replace(',,', ',').replace(/^,|,$/g, '');
  //       element.classList.remove('selected');
  //       const inputToRemove = document.getElementById('amount_' + num);
  //       amountInputsDiv.removeChild(inputToRemove);
  //     } else {
  //       // Otherwise, add the digit, its style, and its input field
  //       selectedInput.value = selectedInput.value ? selectedInput.value + "," + num : num;
  //       element.classList.add('selected');

  //       const amountInput = document.createElement('input');
  //       amountInput.setAttribute('type', 'number');
  //       amountInput.setAttribute('name', 'amounts[' + num + ']');
  //       amountInput.setAttribute('id', 'amount_' + num);
  //       amountInput.setAttribute('placeholder', 'Amount for ' + num);
  //       amountInput.setAttribute('min', '100');
  //       amountInput.setAttribute('max', '5000');
  //       amountInput.setAttribute('class', 'form-control mt-2');
  //       amountInput.onchange = updateTotalAmount; // Add this line to call the total update function
  //       amountInputsDiv.appendChild(amountInput);
  //     }

  //     //updateTotalAmount();
  //     amountInput.onchange = function() {
  //     updateTotalAmount();
  //     checkBetAmount(this, num);  // Add this line
  // };

  //   }
  function checkBetAmount(inputElement, num) {
    // Replace the problematic line with the following code
    const digits = document.querySelectorAll('.digit');
    let digitElement = null;

    for (let i = 0; i < digits.length; i++) {
      if (digits[i].textContent.includes(num)) {
        digitElement = digits[i];
        break;
      }
    }

    // Ensure that the digitElement was found before proceeding
    if (!digitElement) {
      console.error('Could not find the digit element for', num);
      return;
    }

    // Continue with the rest of your function as before
    const remainingAmount = Number(digitElement.querySelector('small').innerText.split(' ')[1]);

    // Check if the entered bet amount exceeds the remaining amount
    if (Number(inputElement.value) > remainingAmount) {
      Swal.fire({
        icon: 'error',
        title: 'Bet Limit Exceeded',
        text: `You can only bet up to ${remainingAmount} for the digit ${num}.`
      });
      inputElement.value = ""; // Reset the input value
    }
  }

  //   function checkBetAmount(inputElement, num) {
  //     // Get the remaining amount for the selected digit
  //     const digitElement = document.querySelector(`.digit:contains('${num}')`);
  //     const remainingAmount = Number(digitElement.querySelector('small').innerText.split(' ')[1]);

  //     // Check if the entered bet amount exceeds the remaining amount
  //     if (Number(inputElement.value) > remainingAmount) {
  //         Swal.fire({
  //             icon: 'error',
  //             title: 'Bet Limit Exceeded',
  //             text: `You can only bet up to ${remainingAmount} for the digit ${num}.`
  //         });
  //         inputElement.value = "";  // Reset the input value
  //     }
  // }


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