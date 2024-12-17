@extends('layout2.index')
@section('main')
<script src="https://cdn.tailwindcss.com"></script>

<div class="">
    <div class="lg:flex justify-between items-center pt-10 pb-10 gap-10 lg:flex-row xxsm:flex-col xxsm:mx-5 xl:mx-0 2xl:mx-0">
        <div class="bg-slate-100 justify-center items-center p-10 2xl:w-2/4 xxsm:w-full ">
            <h1 class="font-fira-sans leading-10 font-medium text-3xl mb-10">{{__('Talk to thousands of specialist doctors.')}}</h1>
            <div>
                <img src="{{asset('assets/image/login.png')}}" class="w-full h-3/5" alt="">
            </div>
        </div>
        <div class="2xl:w-2/4 xxsm:w-full p-2">
            <h1 class="font-fira-sans leading-10 font-normal text-3xl" >{{__('Welcome Back,')}}</h1>
            <h1 class="font-fira-sans leading-10 font-medium text-3xl">{{__('Patient Login to get started!')}}</h1>
            <form action="{{ url('patient-login') }}" method="post">
                @csrf
                <div class="pt-5">
                    <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Email')}}</label>
                    <input type="text" name="email" class="@error('email') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="{{__('Enter email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="pt-3">
                    <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Password')}}</label>
                    <input type="password" name="password" class="@error('password') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="{{__('Enter password')}}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                @if (session('error'))
                <div class="text-center">
                    <span class="custom_error  text-red font-fira-sans font-normal text-base mt-1" style="color: red;">{{ session('error') }}</span>
                </div>
                @endif
                <div class="pt-10">
                    <button type="submit" class="font-fira-sans shadow-blue-400 shadow bg-blue-400 w-full text-sm font-normal py-3 text-black">{{__('Login')}}</button>
                </div>
                <div class="flex justify-between pt-4">
                   
                    <div class="font-fira-sans font-medium text-sm leading-5" style="color: green; font-weight: 700; font-size:large;" >{{__('Don’t have an account?  ')}} <a href="{{url('/signup')}}" class="text-primary text-normal" style="color: blue;">{{__('Signup')}}</a>
                    </div>
                    <div class="font-fira-sans font-medium text-sm leading-5 text-primary text-normal">
                        <a href="{{url('/forgot_password')}}" style="font-size: large; font-weight:700;">{{__('Forgot Password?')}}</a>
                    </div>
                  
                </div>
                <hr class="mt-4">
                <div class="font-semibold text-xl flex gap-3 place-items-center place-content-center">
                   <a href="{{url('pharmacy_login')}}"> <span>Pharmacy <span class="text-blue-700 font-semibold font-serif">Login</span></span></a>
                   <a href="{{url('pathologist_login')}}"> <span>Pathologist <span class="text-blue-700 font-semibold font-serif">Login</span></span></a>
                   <a href="{{url('login')}}"> <span>Company <span class="text-blue-700 font-semibold font-serif">Login</span></span></a>
                   </div>
            </form>
        </div>
    </div>
</div>
@endsection
