@extends('layout.mainlayout_admin',['activePage' => 'login'])

@section('title', __('Admin login'))

@section('content')
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    @php
                        $app_logo = App\Models\Setting::first();
                    @endphp
                    @if(isset($app_logo->logo))
                    <img src="{{ $app_logo->logo }}" alt="logo" width="180" class="mb-5 mt-2">
                    @else
                    <img src="{{url('/images/upload_empty/logo_black.png')}}" alt="logo" width="180" class="mb-5 mt-2" />
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $item)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $item }}
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ url('admin/verify_admin') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" tabindex="1" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">{{ __('Password') }}</label>
                            </div>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2"
                                required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group text-right">
                            <a href="{{ url('admin_forgot_password') }}" class="float-left mt-3">
                                {{ __('Forgot Password?') }}
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                    <div class="mt-3 d-flex justify-content-between">
                        <a href="{{ url('doctor/doctor_login') }}">{{ __('Doctor Login') }}</a>
                        <a href="{{ url('pharmacy_login') }}">{{ __('Pharmacy admin Login') }}</a>
                        <a href="{{ url('pathologist_login') }}">{{ __('Pathologist Login') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{ url('assets_admin/img/login.webp') }}">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">{{ __('Welcome') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
