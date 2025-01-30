@extends('front_end.layout.main')
@section('content')
<!-- singup  Page Form Section Start -->
<section class="login_signup_form">
    <div class="container">
        <div class="login-signup-wrapper">
            <div class="signup_inner">
                <div class="form-container">
                    <form action="{{ route('signup.post') }}" method="post" id="login-signup">
                         @csrf
                         <h3 class="text-center">Sign Up</h3>
                         @if(Session::has('success'))
                          <span class="alert alert-success text-center" style="width: 746px;">{{ Session::get('success') }}</span>
                        @endif
                        <fieldset>
                            <input placeholder="Enter Your Name" type="text" name="name" tabindex="1" class="signup-input">
                         @error('name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </fieldset>
                        <fieldset>
                            <input placeholder="Enter Username" type="text" name="username" tabindex="1" class="signup-input">
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </fieldset>

                        <fieldset>
                            <input placeholder="Enter Email Address" type="email" name="email" tabindex="3"
                                class="signup-input">
                            @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                            @enderror      
                        </fieldset>
                        <!-- <fieldset>
                            <input placeholder="Enter Your Phone Number" type="text" tabindex="4" required
                                class="signup-input">
                        </fieldset> -->
                        <fieldset>
                            <input placeholder="Enter Your Password" type="password" name="password" tabindex="5" 
                                class="signup-input">
                        @error('password')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror       
                        </fieldset>
                        <fieldset>
                            <input placeholder="Confirm Password" type="password" tabindex="6" name="password_confirmation"
                                class="signup-input">
                        </fieldset>
                        <fieldset>
                        <div class="g-recaptcha" data-sitekey={{env('RECAPTCHA_SITE_KEY')}}></div>
                        </fieldset>

                        @error('g-recaptcha-response')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <fieldset>
                            <button name="submit" type="submit" id="signup-submit" data-submit="...Sending">Signup
                            </button>
                        </fieldset>
                        <p class="jump-text">
                            Already have an account? <a href="{{ route('login') }}">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
