<header class="header Layout-2-header">
	<div class="container">
		<div class="header-inner">
			
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="logo">
						<a href="{{URL::to('/')}}"><img src="{{asset('images/logo-dark.png')}}" alt="logo"></a>
					</div>
					<div class="mobile-view-logo">
						<a href="{{ URL::to('/')}}"><img src="{{asset('images/mobile-view-logo.png')}}" alt="mobile-view-logo"></a>
					</div>
				</div>
				<div class="col-lg-8 col-md-8">
				
					<div class="navigation">
							
						<ul>
							


							<li><a class="btn1 btn-sign-up" href="{{ URL::to('signup-as') }}">Sign up</a></li>
							<li><a class="btn-o btn-sign-in" href="{{ URL::to('login') }}">Login</a></li>
							<li><a class="btn1 btn-upload" href="#">Upload</a></li>									
						</ul>
							
					</div>
				</div>
			</div>
			<span class="menu-btn layout-2-menu-btn">
				<a href="javascript:void(0);"><i class="fa fa-bars" aria-hidden="true"></i></a>
			</span>
			<div class="cart"><img src="{{asset('images/bag-icon-orange.png')}} " alt="bag-image"> Cart (0) <span class="cart-dd-icon"><i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
		</div>
	</div>
</header>