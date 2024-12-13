@include('pages.common.header')

   <!--End Main Header -->

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/gallery/1.jpeg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>About <span>Us</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Pages</li>
					<li>About Us</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Services Section Three-->
	<section class="services-section-three">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box" style="background-color: #e23013;">
							<span class="icon flaticon-bar-chart"></span>
						</div>
						<h6><a href="#">Mission Statement</a></h6>
						<div class="text">To be the reference Institution laying a divine educational foundation for the sustainablility of whole life education in Nigeria and across the world.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon-box" style="background-color: #e23013;">
							<span class="icon flaticon-board"></span>
						</div>
						<h6><a href="#">Vision Statement</a></h6>
						<div class="text">To build a school where every child is given equal opportunity to excel to the highest level of competence in every chosen field of studies through unreserved exposure to sound educational principles based on the bible-the word of God.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-12 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="icon-box" style="background-color: #e23013;">
							<span class="icon flaticon-student"></span>
						</div>
						<h6><a href="#">Goals/Objectives</a></h6>
						<div class="text">We are strategically and eminently positioned to offer value-added and first class educational training.</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	
	<!-- About Section Two -->
	<section class="about-section-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Video Column -->
				<div class="video-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                                <img src="{{ asset('front/images/gallery/about.jpeg') }}" alt="">
                            </figure>
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a>
                        </div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- <h3> <span></span></h3> -->
				<!-- <h2 style="color: #000;" >Grace of God International  <span style="color: pink;">Schools - GOGIS</span></h2> -->

					<h3 style="color: #000;" >Grace of God International  <span style="color: pink;">Schools - GOGIS</span></h3>
						<div class="text">
							<p>Grace of God International Schools - GOGIS (Nursery/Primary), Christ Centered private school with unique difference. A place to be your child/Ward's second home for the next six (6) or so years. </p>
							<p>please we implore you to carefully study this information to understand and explain same to your child/ward's understanding, what is expected of you </p>
						</div>
						<!-- <a href="#" class="theme-btn btn-style-three">About us</a> -->
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- Video Section -->
	<section class="video-section" style="background-image:url({{ asset('front/images/gallery/about.jpeg') }})">
		<div class="auto-container">
			<div class="title">Video</div>
			<h2>Watch us in our youtube</h2>
			<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple"></span></a>
		</div>
	</section>
	<!-- End Video Section -->
<!-- Team Page Section -->
<section class="team-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				@foreach ($view_teams as $view_team)
				<div class="team-block-two style-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img style="width: 100%; height: 300px;" src="{{ URL::asset("/public/../$view_team->images")}}" alt="" title=""></a>
							<ul class="social-box">
								<li><a href="{{ $view_team->facebook }}" class="fa fa-facebook"></a></li>
								<li><a href="{{ $view_team->twitter }}" class="fa fa-twitter"></a></li>
								<li><a href="{{ $view_team->linkedin }}" class="fa fa-linkedin"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="{{ url('viewsinglemember/'.$view_team->ref_no) }}">{{ $view_team->fname }} {{ $view_team->lname }}</a></h5>
							<div class="designation"><a href="{{ url('viewsinglemember/'.$view_team->ref_no) }}">{{ $view_team->designation }}</a></div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	

	@include('pages.common.footer')


