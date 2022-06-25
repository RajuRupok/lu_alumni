<footer class="footer-part p-t-40 p-b-40">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="logo-part text-center">
					<figure><img src="{{ asset('images/logo1.png') }}" alt="" class="img-responsive"></figure>
					{{--  <h3><a href="">L O G O</a></h3>  --}}
					<p class="footer-info text-justify">Student for short time alumni for life time</p>
				</div>
			</div>
			<div class="col-3 col-md-2">
				<div class="resources">
					<h5>Rerources</h5>
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="{{ route('about.index') }}">About</a></li>
						{{-- <li><a href="#">Our Vision</a></li> --}}
						<li><a href="{{ route('search.index') }}">Top Alumni</a></li>
						{{-- <li><a href="#">Contact</a></li> --}}
					</ul>
				</div>
			</div>
			<div class="col-3 col-md-2">
				<div class="important-links">
					<h5>Important Links</h5>
					<ul>
						{{-- <li><a href="#">Blog</a></li> --}}
						<li><a href="#">Help Center</a></li>
						<li><a href="#">Community</a></li>
						<li><a href="#">Marketplace</a></li>
						<li><a href="#">Career</a></li>
					</ul>
				</div>
			</div>
			<div class="col-6 col-md-4">
				<div class="connection">
					<h5>Contact Us</h5>
					<ul>
						<li>
							<i class="fas fa-map-marker-alt"></i>
							Leading University, Kamalbazar <span>Sylhet, Bangladesh</span>
						</li>
						<li>
							<i class="fas fa-phone-volume"></i>
							+880 1712 345678 <span>+880 1712 345679</span>
						</li>
						<li>
							<i class="far fa-envelope"></i>
							info@lu_alumni.com
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>