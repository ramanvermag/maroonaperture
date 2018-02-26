@extends('layouts.pages.default')

@section('content')
<?php 
        $laravel = app();
echo $version = $laravel::VERSION;
 ?>
<section class="content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12"><h2>Create Your Free Account</h2></div>
			<div class="col-lg-4 col-md-6 border-right">
				<span class="signup-s1-icon"><i class="fa fa-camera" aria-hidden="true"></i></span>
				<h4>I'm here to share &amp; sell my photos</h4>
				<p>Join our close-knit community of photographers earning money by doing what they love.</p>
				<a href="{{ URL::to('register?t=photographer')}}">Sign up as a photographer</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<span class="signup-s1-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
				<h4>I'm here to share &amp; sell my photos</h4>
				<p>Join our close-knit community of photographers earning money by doing what they love.</p>
				<a href="{{ URL::to('register?t=buyer')}}">Sign up as an image buyer</a>
			</div>
			<div class="col-md-12">
				<div class="signup-note">
					<p class="text-center">Already have an account? <a href="{{ route('register') }}">Log in</a></p>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection