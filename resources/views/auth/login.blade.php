@extends('layouts/pages/default')
@section('content')
<section class="content">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-5">
            <div class="sign-up-form">
               <h2>Sign in To Your Account</h2>
               <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-field">
                     <input id="email" 
                            type="email" 
                            class="{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                            name="email"
                            placeholder="Email address" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus>
                     @if ($errors->has('email'))
                        <span class="invalid-feedback">
                           <strong>{{ $errors->first('email') }}</strong>
                        </span>
                     @endif
                  </div>
                  <div class="form-field">
                     <input id="password" 
                            type="password" 
                            class="{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                            name="password" 
                            placeholder="Password" 
                            required>
                  </div>
                  @if ($errors->has('password'))
                     <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                     </span>
                  @endif
                  <div class="form-field remember-me">

                     <input type="checkbox" 
                            name="remember" {{ old('remember') ? 'checked' : '' }}> 
                     <label for="remember-me">Remember Me</label>
                  </div>
                  <div class="form-field">
                     <button type="submit" class="submit-btn">Login</button>
                  </div>
                  <a class="forgot-password" href="{{ route('password.request') }}">Forgot Your Password?</a>
               </form>
            </div>
            <div class="signup-note">
               <p class="text-center">Don't have an account yet? <a href="{{ route('signup-as') }}">Sign up</a></p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
