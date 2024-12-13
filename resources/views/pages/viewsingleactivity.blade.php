@include('pages.common.header')
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ URL::asset("/public/../$view_singleact->images")}})">
    	<div class="auto-container">
			<div class="content">
				<h1>Activities <span>details</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Activities  details</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
<!-- Portfolio Single Section -->
<section class="portfolio-single-section">
	<div class="auto-container">
		<!-- Sec Title -->
		{{-- <div class="sec-title centered">
			<div class="title">Portfolio</div>
			<h2>We are very happy for our <br> Project <span>done</span></h2>
		</div> --}}
		
		<div class="row clearfix">
		
			<!-- Image Column -->
			<div class="image-column col-lg-4 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="image">
						<img src="{{ URL::asset("/public/../$view_singleact->images")}}" alt="" />
					</div>
				</div>
			</div>
			
			<!-- Content Column -->
			<div class="content-column col-lg-8 col-md-12 col-sm-12">
				<div class="inner-column">
					<h3>{{ $view_singleact->fname }} {{ $view_singleact->lname }}</h3>
				
					<div class="text">
						<p>{!! $view_singleact->fname !!}</p>
					</div>
					<ul class="project-list">
						<li><span class="icon fa fa-tag"></span> <strong>{{ $view_singleact->role }} </strong></li>
						<li><span class="icon fa fa-user"></span> <strong>{{ $view_singleact->designation }}: </strong></li>
						<li><span class="icon fa fa-calendar"></span> <strong>Date: </strong>{{ $view_singleact->created_at->format('m/d/y') }}</li>
						<li><span class="icon fa fa-external-link"></span> <strong>Website: </strong>www.gogischools.org</li>
					</ul>
				</div>
			</div>
			
		</div>
		
	
	</div>
</section>
<!-- End Portfolio Single Section -->

    @include('pages.common.footer')