@include('pages.common.header')
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/gallery/1.jpeg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>PRESS <span>RELEASE</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Press Release</li>
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

				<h2 style="color: black;">Our Events</h2>
			</div>
			<div class="row clearfix">
			
                @foreach ($viewour_events as $viewour_event)
                    <!-- News Block Three -->
				<div class="news-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="press_single/view?id=">
                    		<img style="width: 1000px; height: 200px;" src="{{ URL::asset("/public/../$viewour_event->images")}}" alt=""></a></h2></span>
							
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>{{ $viewour_event->created_at->format('h:i:s a m/d/y') }}</li>
								<li><span class="fa fa-user"></span> Admin</li>
							</ul>
							<h4><a href="{{ url('viewsingleevent/'.$viewour_event->ref_no)  }}">{{ $viewour_event->title }}</a></h4> 
							<p>{!! Illuminate\Support\Str::limit($viewour_event->message, 20) !!} <br><a href="{{ url('viewsingleevent/'.$viewour_event->ref_no)  }}">Read More</a></p>
						</div>
					</div>
				</div>
                @endforeach
				
		
			
			</div>
		</div>
	</section>
	
@include('pages.common.footer')
