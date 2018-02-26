<header class="header Layout-3-header">
	<div class="container-fluid">
		<div class="header-inner header-inner-section">
			
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="logo">
						<a href="{{ URL::to('/') }}"><img src="images/logo.png" alt="logo"></a>
					</div>
					<div class="mobile-view-logo">
						<a href="{{ URL::to('/') }}"><img src="images/mobile-view-logo.png" alt="mobile-view-logo"></a>
					</div>
				</div>
				<div class="col-lg-9 col-md-8">					
					<div class="navigation">
						<form class="header-form">
							<input placeholder="Search" type="text">
							<input class="searchicon" value="" type="submit">
						</form>

						<ul>
							<li><a class="btn1 btn-sign-up" href="{{ URL::to('signup-as') }}">Sign up</a></li>
							<li><a class="btn-o btn-sign-in" href="{{ URL::to('login') }}">Login</a></li>
							<li><a class="btn1 btn-upload" href="#">Upload</a></li>									
						</ul>
							
					</div>
				</div>
			</div>
			<span class="menu-btn">
				<a href="javascript:void(0);"><i class="fa fa-bars" aria-hidden="true"></i></a>
			</span>
			<div class="cart"><img src="images/bag_03.png" alt="bag-image"> Cart (0) <span class="cart-dd-icon"><i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
		</div>
	</div>
</header>