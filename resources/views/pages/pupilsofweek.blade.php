
@include('pages.common.header')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/gallery/1.jpeg') }})">
    	<div class="auto-container">
			<div class="content">
            <h1>School <span>Activities</span></h1>

				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Pages</li>
					<li>Activities</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Team Page Section -->
	<section class="team-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2 style="color: #000;" >Pupils of   <span style="color: red;">the Week</span></h2>
			</div>

			<div class="row clearfix">

				@foreach ($view_teachersofweeks as $view_teachersofweek)
					@if ($view_teachersofweek->status == 'approved' )
					<div class="team-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img style="width: 100%; height: 300px;" src="{{ URL::asset("/public/../$view_teachersofweek->images")}}" alt="" title=""></a>
							<ul class="social-box" style="color: #fff;">
								<li>Week {{ $view_teachersofweek->dayac }}</li>
								<li>Month {{ $view_teachersofweek->monthsac }}</li>
								<li>Year {{ $view_teachersofweek->yrsac }}</li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="{{ url('viewsingleactivity/'.$view_teachersofweek->ref_no) }}">{{ $view_teachersofweek->fname }} {{ $view_teachersofweek->lname }}</a></h5>
							<div class="designation"><a href="{{ url('viewsingleactivity/'.$view_teachersofweek->ref_no) }}">{{ $view_teachersofweek->designation }}</a></div>
						</div>
					</div>
				</div>
					@else
						
					@endif
				
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->




	<!-- Team Page Section -->
	<section class="team-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2 style="color: #000;" >Pupils of   <span style="color: red;">the Month</span></h2>
			</div>

			<div class="row clearfix">

				@foreach ($view_teachersofmonths as $view_teachersofmonth)
					@if ($view_teachersofmonth->status == 'approved')
					<div class="team-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img style="width: 100%; height: 300px;" src="{{ URL::asset("/public/../$view_teachersofmonth->images")}}" alt="" title=""></a>
							<ul class="social-box" style="color: #fff;">
							<li>Month {{ $view_teachersofweek->monthsac }}</li>
							<li>Year {{ $view_teachersofweek->yrsac }}</li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="{{ url('viewsingleactivity/'.$view_teachersofmonth->ref_no) }}">{{ $view_teachersofmonth->fname }} {{ $view_teachersofmonth->lname }}</a></h5>
							<div class="designation"><a href="{{ url('viewsingleactivity/'.$view_teachersofmonth->ref_no) }}">{{ $view_teachersofmonth->designation }}</a></div>
						</div>
					</div>
				</div>
					@else
						
					@endif
				
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->




	<!-- Team Page Section -->
	<section class="team-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2 style="color: #000;" >Pupils of   <span style="color: red;">the Year</span></h2>
			</div>

			<div class="row clearfix">

				@foreach ($view_teachersofyears as $view_teachersofyear)
					@if ($view_teachersofyear->status == 'approved')
					<div class="team-block-two style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img style="width: 100%; height: 300px;" src="{{ URL::asset("/public/../$view_teachersofyear->images")}}" alt="" title=""></a>
							<ul class="social-box" style="color: #fff;">
							<li>Year {{ $view_teachersofweek->yrsac }}</li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="{{ url('viewsingleactivity/'.$view_teachersofyear->ref_no) }}">{{ $view_teachersofyear->fname }} {{ $view_teachersofyear->lname }}</a></h5>
							<div class="designation"><a href="{{ url('viewsingleactivity/'.$view_teachersofyear->ref_no) }}">{{ $view_teachersofyear->designation }}</a></div>
						</div>
					</div>
				</div>
					@else
						
					@endif
				
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->

	@include('pages.common.footer')

