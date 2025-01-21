@extends('front_end.layout.main')
@section('content')
  <!-- Login Page  -->
  <section class="login_signup_form">
      <div class="container">
          <div class="login-signup-wrapper">
              <div class="signup_inner">
                  <div class="form-container">
                      <form action="{{ route('login.post') }}" method="post" id="login-signup">
                          @csrf
                          <h3 class="text-center">Login</h3>
                          @if(Session::has('error'))
                            <span class="alert alert-danger text-center" style="width: 746px;">{{ Session::get('error') }}</span>
                            @endif
                          <fieldset>
                              <input placeholder="Enter Your E-Mail" type="Email" name="email" tabindex="1" autofocus
                                  class="signup-input">
                            @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                            @enderror    
                          </fieldset>
                          <fieldset>
                              <input placeholder="Enter Your Password" type="password" name="password" tabindex="2"
                                  class="signup-input">
                            @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                            @enderror   
                          </fieldset>
                          <fieldset>
                              <button name="submit" type="submit" id="login-submit" data-submit="...Sending"
                                  class="login_btn">
                                  Login</button>
                          </fieldset>
                          <p class="jump-text">
                              You don't have an account yet? <a href="{{ route('signup') }}">Signup</a>
                          </p>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  @endsection
