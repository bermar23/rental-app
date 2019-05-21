@extends('layouts.master')
@include('layouts.header')
@include('layouts.footer')

@section('content')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">                
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="text" placeholder="First name" name="first_name" required/>
                        <input type="text" placeholder="Last name" name="last_name" required/>
                        <input type="email" placeholder="Email Address" name="email" required/>
                        <input type="password" placeholder="Password" name="password" required/>
                        <input type="password" placeholder="Confirm password" name="password_confirmation" required/>
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
@endsection
