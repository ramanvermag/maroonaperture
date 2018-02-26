@extends('layouts.pages.default')

@section('content')
<section class="content">    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="sign-up-form">
              
              @if(isset($_GET["t"] ) && $_GET["t"]=='photographer')
                
                @php 
                  $type = "Photographer";
                  $user_type = 0;
                @endphp
              @else
                
                @php 
                  $type = "A Buyer";
                  $user_type = 1;
                @endphp
              
              @endif

                <h2>Sign Up As {{$type}}</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        

                        <div class="form-field">

                              <input type="text" name="user_type" value="{{ $user_type }}">
                                <input id="email" 
                                       type="email" 
                                       class="{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                       name="email"
                                       placeholder="Email address" 
                                       value="{{ old('email') }}" 
                                       required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-field">
                            
                                <input id="password" 
                                       type="password"
                                       placeholder="Password" 
                                       class="{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                       name="password" 
                                       required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                         
                        </div>

                        <div class="form-field">                            
                                <input id="password-confirm" 
                                       type="password" 
                                       class="" 
                                       name="password_confirmation" 
                                       placeholder="Confirm password"
                                       required>
                        </div>
                        <div class="form-field">
                                <button type="submit" class="submit-btn">Sign up</button>                          
                        </div>
                    </form>
            </div>
            <div class="su-divider"><span>OR</span></div>
            <div class="signup-social">
                <div class="row">
                    <div class="col-6"><a href="#" class="su-fb-btn"><i class="fa fa-facebook"></i> Sign up with Facebook</a></div>
                    <div class="col-6"><a href="#" class="su-gp-btn"><i class="fa fa-google-plus"></i> Sign up with Google+</a></div>
                </div>
            </div>
            <div class="signup-note">
                <p class="su-terms">By signing up you accept our Terms of Service and Privacy Policy and you agree to receive promotional emails that you can opt-out of at any time.</p>
                <p class="text-center">Already have an account? <a href="{{ URL::to('login') }} ">Sign in</a></p>
            </div>

        </div>
    </div>
    </div>
</section>
@endsection
