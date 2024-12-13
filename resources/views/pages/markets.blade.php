@include('pages.common.header')
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/gallery/1.jpeg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>Our <span>Markets</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Markets</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Blog Press Section -->
	<section class="blog-Press-section" style="margin-top: 50px;">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2 style="color: black;">Our latest Markets</h2>
			</div>
			<div class="row clearfix">
			
				@foreach ($view_marketables as $view_marketable)
				<!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ url('singlemarket/'.$view_marketable->slug) }}">
                    		<img style="width: 1000px; height: 250px;" src="{{ URL::asset("/public/../$view_marketable->images1")}}" alt=""></a></h2></span>
							
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>{{ $view_marketable->created_at->format('h:i:s m/d/y') }}</li>
								{{-- <li><span class="fa fa-user"></span></li> --}}
							</ul>
							<h4><a href="{{ url('singlemarket/'.$view_marketable->ref_no) }}">{{ $view_marketable->title }}</a></h4>
						</div>
					</div>
				</div>

			@endforeach


			
			</div>
		</div>
	</section>
	<!-- End Blog Press Section -->
	
	
	
	
	<!--Main Footer-->
@include('pages.common.footer')
