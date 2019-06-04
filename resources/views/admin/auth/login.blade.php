@extends('admin.layouts.master')
@include('admin.layouts.header')
@include('admin.layouts.footer')

@section('content')
<section id="form-no-top-margin"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Admin Login</h2>
                    <form method="POST" action="{{ route('admin.auth.loginAdmin') }}">
                        @csrf
                        <input type="email" placeholder="Email" name="email" required/>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="password" placeholder="Password" name="password" required/>
                        
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <span>
                            <input type="checkbox" class="checkbox" name="remember"> 
                            Remember me
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>

                        @if (Route::has('password.request'))
                        <p><a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                        </a></p>
                        @endif
                    </form>
                </div><!--/login form-->
            </div>            
        </div>
    </div>
</section><!--/form-->
@endsection
