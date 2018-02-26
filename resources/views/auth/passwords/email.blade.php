@extends('layouts.pages.default')

@section('content')
<section class="forgot-password">
    <div class="container">
        <h2>Forgot Password</h2>
        <p>Enter your e-mail address below and we'll send you a link to reset your password.</p>
        <div class="row justify-content-center">
            
            <div class="col-md-4">
                <div class="sign-up-form">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-field">
                            <input id="email" 
                                   type="email" 
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
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
                            <button type="submit" class="submit-btn">Send Password Reset Link</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
