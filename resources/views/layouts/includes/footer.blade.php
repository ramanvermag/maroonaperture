<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-sm-4">
				<div class="footer-item">
					<a href="#"> <img src="images/footer-logo.png" alt="footer-logo"></a>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4">
				<div class="footer-item">
					<h6>Company</h6>
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Partners</a></li>
						<li><a href="#">Press</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4">
				<div class="footer-item">
					<h6>For Buyers</h6>
					<ul>
						<li><a href="pricing-and-plans">Plans and Pricing</a></li>
						<li><a href="#">License information</a></li>
						<li><a href="#">Join</a></li>						
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4">
				<div class="footer-item">
					<h6>Support</h6>
					<ul>
						<li><a href="#">Sell Content</a></li>
						<li><a href="#">Contributor Aggrements</a></li>
						<li><a href="#">Referrals</a></li>						
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4">
				<div class="footer-item">
					<h6>Support</h6>
					<ul>
						<li><a href="#">Contact Us</a></li>
						<li><a href="faq">FAQ</a></li>
						<li><a href="#">Legal</a></li>
						<li><a href="#">Privacy</a></li>						
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4">
				<div class="footer-item footer-social-icon">
					<h6>Connect with us</h6>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>						
					</ul>
					<a class="btn-blog" href="#">Blog</a>
				</div>
			</div>
			<div class="copyright">
				<p>&copy; 2017 MaroonAperture.</p>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript"></script>
<script>
jQuery(document).ready(function () {	
	jQuery('').meanmenu();
	
	$("a#gotohome").click(function(){
   	      $("html,body").animate({scrollTop:0},500)	
   	}) 

	$(".menu-btn").click(function(){
	    $(".navigation").slideToggle("fast");
	});

	function stickyFunction() {
			// body...
			var scoll = $(window).scrollTop();
			if(scoll > 100 ){
				$("body").addClass("sticky");
			}
			else{
				$("body").removeClass("sticky");
			}
	};

		$(window).scroll(stickyFunction);
		stickyFunction();
		$(document).ready(function(){
    $(".questions h6").click(function(){
    	$(this).toggleClass("angle-down");
    	$(this).siblings("p").slideToggle();
    });
});
	
});
</script>
</body>
</html>