@include('layouts.user_head')
@yield('user_styles')

<body class="presentation-page">
    <!-- Navbar -->
    @include('layouts.user_navbar')
    <div class="page-header min-vh-50 relative bg-gradient-primary">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                    <h1 class="text-white pt-3 mt-n5">User Profile</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="card card-body" id="profile">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-auto col-4">
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ Auth::user()->profile }}" alt="bruce" class="w-100 rounded-circle shadow-sm">
                            </div>
                        </div>
                        <div class="col-sm-auto col-8 my-auto">
                            <div class="h-100">
                                <h5 class="mb-1 font-weight-bolder">
                                    {{ Auth::user()->name }}

                                </h5>
                                <p class="mb-0 font-weight-normal text-sm">
                                    Account ID - 00{{ Auth::user()->id }}
                                </p>
                                <span class="mt-3">
                                    <form action="{{ route('admin.profiles.update', Auth::user()->id) }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <label>Profile Upload</label>
                                            <div class="input-group mb-2">
                                                <input type="file" class="form-control" name="profile">
                                            </div>
                                        </div>
                                        <div class="mt-4 mx-auto mb-2">
                                            <button class="btn bg-gradient-primary btn-sm float-end">Update Profile
                                            </button>
                                        </div>
                                    </form>
                                </span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Account Balance</h5>
                                </div>
                                <div class="card-body">
                                    <h5>{{ Auth::user()->balance }} MMK</h5>
                                    <a href="{{ url('/user_requestmoney') }}" class="text-primary text-sm icon-move-right my-auto">ငွေထုတ်ရန်
                                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <div class="container py-4">
                            <div class="row mt-4">
                                <div class="col-lg-12 mx-auto d-flex justify-content-center flex-column">
                                    <!-- <h3 class="text-center">Contact us</h3> -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card" id="basic-info">
                                                <div class="card-header">
                                                    <h5>{{ Auth::user()->name }} 's Info</h5>
                                                </div>
                                                <form action="{{ route('admin.changePhoneAddress', Auth::user()->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-body pt-0">
                                                        <div class="row">
                                                            <label>User Name</label>
                                                            <div class="input-group mb-2">
                                                                <input class="form-control" placeholder="" aria-label="First Name..." type="text" name="name" value="{{ Auth::user()->name }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label>Email Address</label>
                                                            <div class="input-group mb-2">
                                                                <input type="email" class="form-control" placeholder="" value="{{ Auth::user()->email }}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <label>Phone</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" class="form-control" placeholder="" name="phone" value="{{ Auth::user()->phone }}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label>Address</label>
                                                            <div class="input-group mb-2">
                                                                <input class="form-control" placeholder="" aria-label="First Name..." type="text" name="address" value="{{ Auth::user()->address }}">
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 mx-auto mb-2">
                                                            <button type="submit" class="btn bg-gradient-primary btn-sm float-end">Update
                                                                Account Info
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <hr>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Morning Session Played 2 Digit</h5>
                                                </div>
                                                <div class="card-body">

                                                    <div class="table-responsive">
                                                        <table class="table align-items-center mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">2D</th>
                                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sub-Amount</th>
                                                                    <th class="text-secondary opacity-7">Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($morningDigits['two_digits'] as $index => $digit)
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">

                                                                            <div class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs">{{ $index + 1 }}</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">{{ $digit->two_digit }}</p>
                                                                    </td>
                                                                    <td class="align-middle text-center text-sm">
                                                                        <p class="text-xs font-weight-bold mb-0">{{ $digit->pivot->sub_amount }}</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $digit->pivot->created_at->format('d M Y (l) (h:i a)') }}

                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        <p class="text-right">Total Amount for Morning: <strong>{{ $morningDigits['total_amount'] }}</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card" id="password">
                                                <div class="card-header">
                                                    <h5>Change Password</h5>
                                                    @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                    <div class="alert alert-danger">{{ $error }}</div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                                <form action="{{ route('admin.changePassword', Auth::user()->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-body pt-0">
                                                        {{-- <div class="row">
                                                        <label>Current password</label>
                                                        <div class="input-group mb-2">
                                                            <input class="form-control" placeholder=""
                                                                aria-label="First Name..." type="text"
                                                                name="old_password">
                                                        </div>
                                                    </div> --}}
                                                        <div class="row">
                                                            <label>New password</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" class="form-control" placeholder="" name="password">
                                                            </div>
                                                        </div>
                                                        {{-- <div class="row">
                                                        <label>Confirm New password</label>
                                                        <div class="input-group mb-2">
                                                            <input class="form-control" placeholder=""
                                                                aria-label="First Name..." type="text"
                                                                name="password_confirmation">
                                                        </div>
                                                    </div> --}}
                                                        <h6 class="mt-3">Password requirements</h6>
                                                        <p class="text-muted mb-2">
                                                            Please follow this guide for a strong password:
                                                        </p>
                                                        <ul class="text-muted ps-4 mb-0 float-start">
                                                            <li>
                                                                <span class="text-sm">One special characters</span>
                                                            </li>
                                                            <li>
                                                                <span class="text-sm">Min 6 characters</span>
                                                            </li>
                                                            <li>
                                                                <span class="text-sm">One number (2 are recommended)</span>
                                                            </li>
                                                            <li>
                                                                <span class="text-sm">Change it often</span>
                                                            </li>
                                                        </ul>
                                                        <button type="submit" class="btn bg-gradient-primary btn-sm float-end mt-3 mb-4">Update
                                                            password</button>
                                                    </div>
                                                </form>

                                            </div>
                                            <hr>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Evening Session Played 2 Digit</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table align-items-center mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">2D</th>
                                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sub-Amount</th>
                                                                    <th class="text-secondary opacity-7">Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($eveningDigits['two_digits'] as $index => $digit)
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">

                                                                            <div class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs">{{ $index + 1 }}</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">{{ $digit->two_digit }}</p>
                                                                    </td>
                                                                    <td class="align-middle text-center text-sm">
                                                                        <p class="text-xs font-weight-bold mb-0">{{ $digit->pivot->sub_amount }}</p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $digit->pivot->created_at->format('d M Y (l) (h:i a)') }}

                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        <p class="text-right">Total Amount for Evening Session: <strong>{{ $eveningDigits['total_amount'] }}</strong></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto mt-5">
                        <div class="container py-4">
                            <div class="row">
                                <div class="card mx-2">
                                    <h5 class="text-center">Fill Account's Balance</h5>
                                    <div class="d-flex">
                                        <a href="javascript:;" class="mt-3 ms-4">
                                            <img class="avatar avatar-l shadow" src="{{ asset('admin_app/assets/img/bank_acc_icon/kpay.png') }}">
                                        </a>
                                        <div class="mt-3 ms-2">
                                            <!-- <p class="text-sm mb-0 text-capitalize">User Name</p> -->
                                            {{-- <h6 class="mb-0">
                                            091234567
                                        </h6> --}}
                                            <a href="{{ route('user.UserKpayFillMoney') }}" class="text-primary text-sm icon-move-right my-auto">Fill
                                                Money
                                                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-3">
                                        <a href="javascript:;" class="ms-4">
                                            <img class="avatar avatar-l shadow" src="{{ asset('admin_app/assets/img/bank_acc_icon/wpay.png') }}">
                                        </a>
                                        <div class="ms-2">
                                            <!-- <p class="text-sm mb-0 text-capitalize">User Name</p> -->
                                            {{-- <h6 class="mb-0">
                                            091234567
                                        </h6> --}}
                                            <a href="{{ route('user.UserWavePayFillMoney') }}" class="text-primary text-sm icon-move-right my-auto">Fill
                                                Money
                                                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <a href="javascript:;" class="ms-4">
                                            <img class="avatar avatar-l shadow" src="{{ asset('admin_app/assets/img/bank_acc_icon/cbpay.png') }}">
                                        </a>
                                        <div class="ms-2">
                                            <!-- <p class="text-sm mb-0 text-capitalize">User Name</p> -->
                                            {{-- <h6 class="mb-0">
                                            091234567
                                        </h6> --}}
                                            <a href="{{ route('user.UserCBPayFillMoney') }}" class="text-primary text-sm icon-move-right my-auto">Fill
                                                Money
                                                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <a href="javascript:;" class="ms-4">
                                            <img class="avatar avatar-l shadow" src="{{ asset('admin_app/assets/img/bank_acc_icon/cb.png') }}">
                                        </a>
                                        <div class="ms-2">
                                            <!-- <p class="text-sm mb-0 text-capitalize">User Name</p> -->
                                            {{-- <h6 class="mb-0">
                                            091234567
                                        </h6> --}}
                                            <a href="{{ url('/user_fillmoney') }}" class="text-primary text-sm icon-move-right my-auto">Fill
                                                Money
                                                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <a href="javascript:;" class="ms-4">
                                            <img class="avatar avatar-l shadow" src="{{ asset('admin_app/assets/img/bank_acc_icon/aya_logo.png') }}">
                                        </a>
                                        <div class="ms-2">
                                            <!-- <p class="text-sm mb-0 text-capitalize">User Name</p> -->
                                            {{-- <h6 class="mb-0">
                                            091234567
                                        </h6> --}}
                                            <a href="{{ route('user.UserAYAPayFillMoney') }}" class="text-primary text-sm icon-move-right my-auto">Fill
                                                Money
                                                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <a href="javascript:;" class="ms-4">
                                            <img class="avatar avatar-l shadow" src="{{ asset('admin_app/assets/img/bank_acc_icon/a1.png') }}">
                                        </a>
                                        <div class="ms-2">
                                            <!-- <p class="text-sm mb-0 text-capitalize">User Name</p> -->
                                            {{-- <h6 class="mb-0">
                                            091234567
                                        </h6> --}}
                                            <a href="{{ url('/user_fillmoney') }}" class="text-primary text-sm icon-move-right my-auto">Fill
                                                Money
                                                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3 mb-4">
                                        <a href="javascript:;" class="ms-4">
                                            <img class="avatar avatar-l shadow" src="{{ asset('admin_app/assets/img/bank_acc_icon/kb1.png') }}">
                                        </a>
                                        <div class="ms-2">
                                            <!-- <p class="text-sm mb-0 text-capitalize">User Name</p> -->
                                            {{-- <h6 class="mb-0">
                                            091234567
                                        </h6> --}}
                                            <a href="{{ url('/user_fillmoney') }}" class="text-primary text-sm icon-move-right my-auto">Fill
                                                Money
                                                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    @include('layouts.user_footer')
    @yield('user_scripts')