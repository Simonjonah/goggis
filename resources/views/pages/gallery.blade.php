@include('pages.common.header')
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/gallery/1.jpeg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>Our <span>Galleries</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Galleries</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
<!-- News Section Two -->
	<section class="news-section-two alternate">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-two centered">
				
				<h2 style="color: #000;">Our Gallery</h2>
				
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block Two -->
				
				@foreach ($view_galleries as $view_gallerie)

				<div class="news-block-two brown col-lg-4 col-md-6 col-sm-12" style="margin-bottom: 50px;">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						
						<div class="image">
							<img style="width: 100%; height: 300px;" src="{{ URL::asset("/public/../$view_gallerie->images")}}" alt="" />
							<div class="overlay-box">
								<a href="{{ URL::asset("/public/../$view_gallerie->images")}}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
							</div>
						</div>
						
						{{-- <div class="lower-content">
							<h4>{!! $view_gallerie->title !!}</h4>
							<p>{!! $view_gallerie->messages !!}</p>
							
						</div> --}}
					</div>
				</div>
				
				@endforeach
				

			</div>

			<div class="d-flex justify-content-center">
				{{ $view_galleries->links() }}
			</div>
			
				
				<style>
					.w-5{
						display: none;
					}
				</style>
				<!--End Styled Pagination-->
			
		</div>
	</section>
	
	<!--Map Info Section-->


	<section class="sponsors-section">
		<div class="auto-container">
			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                	
					
					@foreach ($view_galleries as $view_gallerie)
                    	<li><div class="image-box"><a href="#"><img style="width: 100%; height: 150px;" src="{{ URL::asset("/public/../$view_gallerie->images")}}" alt=""></a></div></li>
						
					@endforeach
               
					
					

                </ul>
                <div class="text-center" style="margin-top: 20px;">
				<a href="facilities" class="theme-btn btn-style-fourteen">View Facilities</a>
			</div>
                
            </div>
		</div>
	</section>

	
	<!--Main Footer-->
	@include('pages.common.footer')
