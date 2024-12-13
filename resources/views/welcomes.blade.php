@include('pages.common.header')
	<!--Main Slider-->
    <section class="main-slider style-four">
        <div class="main-slider-carousel owl-carousel owl-theme">
			@foreach ($view_sliders as $view_slider)
				
            <div class="slide" style="background-image:url({{ URL::asset("/public/../$view_slider->images")}});  background-size: cover; background-repeat: no-repeat; background-position: center;">
                <div class="auto-container">
					<div class="content">
						<div class="title">{{ $view_slider->name }}</div>
						<h2 style="color: #fff; font-weight: bold">{{ $view_slider->name }}</h2>
						<div class="text">{{ $view_slider->facts }}</div>
						<div class="link-box">
							<a href="contact" class="theme-btn btn-style-twelve">Let’s start now <span class="fa fa-angle-right"></span></a>
							<!-- <a href="services" class="theme-btn btn-style-thirteen">Our services <span class="fa fa-angle-right"></span></a> -->
						</div>
					</div>
                </div>
            </div>
			@endforeach

		</div>

    </section>
    <!--End Main Slider-->

	
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
					<h3 style="color: #000;" >Grace of God International  <span style="color: red;">Schools - GOGIS</span></h3>

						<!-- <h3>Grace of God International <span>Schools - GOGIS</span></h3> -->
						<div class="text">
							<p>Grace of God International Schools - GOGIS (Nursery/Primary), Christ Centered private school with unique difference. A place to be your child/Ward's second home for the next six (6) or so years. </p>
							<p>please we implore you to carefully study this information to understand and explain same to your child/ward's understanding, what is expected of you </p>
						</div>
						<a href="#" class="theme-btn btn-style-three">About us</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- Services Section Ten -->
	<section class="services-section-ten">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-three centered">
				<div class="title">Our services</div>
				<h2>Our services</h2>
			</div>
			<div class="row clearfix">

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Science <br> Practicals</a></h6>
						<div class="text">To develop scientific knowledge and understanding, encourage critical thinking and problem-solving skill and help to foster curosity and enquiry-base learning.</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Sporting <br> Activities</a></h6>
						<div class="text">Sports and games are a great way to keep pupils active and healthy. they teach pupils life skill like teamwork, leadership and patience.</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Music <br> Clasess</a></h6>
						<div class="text">The pupils will boast their self-confidence and also expand the capacity of their memory by learning how to play various musical instruments like the bass guitar,lead guitar, keyboard,drums etc, which will present them with a great opportunity to become future professionals.</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Standard English Diction/ <br> Phonetics course</a></h6>
						<div class="text">Heightens learners awareness of addressing Alphabet, sounds of letters, digraphs, trigraphs, silent letters, vowels, consonant clusters, stress, intonation, standard speech, speech making and other English Diction/Phonetics challenges amid English speakers, and keep learners abreast of the world class standard accent that is loud and clear.</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				{{-- <div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Science <br> Practical</a></h6>
						<div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
					</div>
				</div> --}}

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Creative <br> Arts</a></h6>
						<div class="text">
							It brings about  a well-rounded education that fosters creativity, critical thinking, and innovation.</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Entrepreneurial <br> Development:</a></h6>
						<div class="text">This helps in empowering pupils/ students with the skills, knowledge, and mindset necessary to succeed in an ever-changing business landscape.</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Computer coding <br>  and Artificial intelligent (AI)</a></h6>
						<div class="text"> Equip learners with a playful experience to learn and interact with the computer and kits, and learn coding skills. With more well-designed AI services, young children could develop their AI literacy even at a Nursery level.</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Services Section Ten -->

	
	<!-- Faq Section -->
	<section class="faq-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Faq Column -->
				<div class="faq-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Frequently asked <span style="color: red;">Questions</span></h2>
						</div>
						
						<!--Accordion Box-->
						<ul class="accordion-box">

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-pie-chart-3"></span> What extra-curricular activities do you offer ?<span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content current">
									<div class="content">
										<p>Pupils are exposed to in-depth tutorials and hands-on experience in:
											-Music: voice training, piano, guitar, trumpet, violin and band practice
											-ICT: computer appreciation. Coding, AI tools, and research
											-Leadership Training Programmes including the art of public speaking, communication arts, and socio-cultural etiquette
											-Financial Literacy
											These activities are put in place to equip every child for the dynamic society they are growing into. 
											. 
											</p>
									</div>
								</div>
							</li>

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-up-arrow-1"></span>Can I send someone to pick up my child?<span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content">
									<div class="content">
										<p>Yes – but only the person that is registered in the school. At admission, three people are recognized and documented as relations to a child. These three are <br> (1) the father <br> (2) the mother, and <br> (3) any other relation recommended by the parents. This entails that a child cannot be released to any other person, not even through phone call. A child’s security and safety is our priority, and this will not be compromised.</p>
									</div>
								</div>
							</li>

							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-pyramid-scheme"></span>How do you communicate with parent(s)? <span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content">
									<div class="content">
										<p>We communicate with parent(s) through various media which include <br>
											<br> (1) physical conversation in the school premises 
											<br> (2) phone calls 
											<br> (3) communication book 
											<br> (4) emails and other social media handle available to the parent(s). 											 
											</p>
									</div>
								</div>
							</li>
							
						</ul>
						
					</div>
				</div>
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">
							
							<!--Image Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<div class="image">
									<img src="images/resource/counter-img.jpg" alt="" title="">
								</div>
							</div>
							
							<!--Content Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								
								<div class="fact-counter style-two">
									
									<!--Column-->
									<div class="column counter-column">
										<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2500" data-stop="1200">0</span>+
												<h4 class="counter-title">Happy Pupils</h4>
											</div>
										</div>
									</div>
							
									<!--Column-->
									<div class="column counter-column">
										<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3000" data-stop="50">0</span>
												<h4 class="counter-title">Parents</h4>
											</div>
										</div>
									</div>
							
									<!--Column-->
									<div class="column counter-column">
										<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3500" data-stop="800">0</span>+
												<h4 class="counter-title">Alumni</h4>
											</div>
										</div>
									</div>
							
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="side-image" style="background-image:url({{ asset('front/images/gallery/about.jpeg') }})"></div>
		</div>
	</section>
	<!-- End Faq Section -->
	

	
	<!-- Testimonial Section Two -->
	<section class="testimonial-section-two">
		<div class="image-layer" style="background-image:url({{ asset('front/images/gallery/about.jpeg') }})"></div>
		<div class="auto-container">
			<h2 style="color: red;">What some  <span>clients Say</span></h2>
			<div class="testimonial-carousel-two owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				@foreach ($view_testimonies as $view_testimony)

				<div class="testimonial-block-three">
					<div class="inner-box">

						<div class="row clearfix">
							<!-- Image Column -->
							 <div class="image-column col-lg-3 col-md-4 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<img style="height: 200px; with: 60px;" src="{{ URL::asset("/public/../$view_testimony->images")}}" alt="" />
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-9 col-md-8 col-sm-12">
								<div class="inner-column">
									<div class="text"><span class="icon flaticon-left-quote"></span>{!! $view_testimony->message !!}.</div>
									<h5>{{ $view_testimony->surname }} {{ $view_testimony->fname }}</h5>
									<div class="designation">{{ $view_testimony->designation }}</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section Two -->
	

	<!-- News Section Two -->
	<section class="news-section-two" style="margin-bottom: 50px;">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our latest <span style="color: red;">News</span></h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block Two -->
				 @foreach ($view_blogs as $view_blog)
				 <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
						<img style="width: 100%; height: 250px;" src="{{ URL::asset("/public/../$view_blog->images")}}" alt="">
							<div class="overlay-box">
								<a href="{{ URL::asset("/public/../$view_blog->images")}}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>{{ $view_blog->created_at->format('h:i:s a m/d/y') }}</li>
								<li><span class="fa fa-user"></span>Admins</li>
							</ul>
							<h5><a href="{{ url('singleblog/'.$view_blog->slug) }}">{{ $view_blog->title }}</a></h5>
							<a href="{{ url('blog') }}" class="theme-btn btn-style-four">View more</a>
						</div>
					</div>
				</div>
				
				 @endforeach
				
			</div>
		</div>
	</section>
	
	

	<!--Sponsors Section-->
	<section class="sponsors-section">
		<div class="auto-container">
			<div class="carousel-outer">
				<ul class="sponsors-carousel owl-carousel owl-theme">
					@foreach ($view_markets as $view_market)
						@if ($view_market->status == 'approved')
							<li><div class="image-box"><a href="{{ url('viewmarketplace/'.$view_market->ref_no) }}"><img style="width: 100%; height: 80px;" src="{{ URL::asset("/public/../$view_market->images1")}}" alt=""></a></div></li>
						@endif
					@endforeach
				</ul>
            </div>
		</div>
	</section>
	<!--End Sponsors Section-->
	<!-- End Call To Action Two -->
	@include('pages.common.footer')
