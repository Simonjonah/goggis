@include('pages.common.header')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ URL::asset("/public/../$view_singlemarket->images1")}})">
    	<div class="auto-container">
			<div class="content">
				<h1>View <span>Products/Services</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li> details</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-single">
						<div class="inner-box">
							
							<div class="lower-content">
								<ul class="post-meta">
									<li><span class="fa fa-calendar"></span>{{ $view_singlemarket->created_at->format('M d Y')}}</li>
									<li><span class="fa fa-user"></span>By Admin</li>
									<li><span class="fa fa-list"></span>Uncategorized</li>
									<!-- <li><span class="fa fa-comment"></span>(3) Comment</li> -->
								</ul>
								<h4>{{ $view_singlemarket->title }}</h4>
								<div class="text">
									<p>{!! $view_singlemarket->messages !!}</p>
									<div class="news-gallery">
										<div class="row clearfix">
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<div class="image">
													<img src="{{ URL::asset("/public/../$view_singlemarket->images1")}}" alt="" />
												</div>
											</div>
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<div class="image">
													<img src="{{ URL::asset("/public/../$view_singlemarket->images2")}}" alt="" />
												</div>
											</div>

                                            <div class="column col-lg-6 col-md-6 col-sm-12">
												<div class="image">
													<img src="{{ URL::asset("/public/../$view_singlemarket->images3")}}" alt="" />
												</div>
											</div>

                                            <div class="column col-lg-6 col-md-6 col-sm-12">
												<div class="image">
													<img src="{{ URL::asset("/public/../$view_singlemarket->images4")}}" alt="" />
												</div>
											</div>

                                            <div class="column col-lg-6 col-md-6 col-sm-12">
												<div class="image">
													<img src="{{ URL::asset("/public/../$view_singlemarket->images2")}}" alt="" />
												</div>
											</div>

										</div>
									</div>
									
									
								</div>
								
							</div>
						</div>
						
						<!--post-share-options-->
						<div class="post-share-options">
							<div class="post-share-inner clearfix">
								<!-- <div class="pull-left post-tags"><span>Tags: </span><a href="#">Business</a> <a href="#">Life</a> <a href="#">Applin</a> <a href="#">Techniq</a></div> -->
								<ul class="pull-right social-links clearfix">
									<li class="facebook"><a href="{{ $view_singlemarket->facebook }}" class="fa fa-facebook"></a></li>
									<li class="twitter"><a href="{{ $view_singlemarket->twitter }}" class="fa fa-twitter"></a></li>
									<li class="google-plus"><a href="{{ $view_singlemarket->email }}" class="fa fa-google-plus"></a></li>
									<li class="dribble"><a href="{{ $view_singlemarket->whatsapp }}" class="fa fa-whatsapp"></a></li>
									<li class="dribble"><a href="{{ $view_singlemarket->instagram }}" class="fa fa-instagram"></a></li>
									<li class="dribble"><a href="{{ $view_singlemarket->linkedin }}" class="fa fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar default-sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Your Keyword..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title-two">
                                <h4>Others</h4>
                            </div>
                            <ul class="blog-cat-two">
                                @foreach ($view_pics as $view_pic)
                                    @if ($view_pic->status == 'approved')
									<li><a href="{{ url('viewmarketplace/'.$view_pic->ref_no) }}">{{ $view_pic->title }}</a></li>
                                    @else
                                    @endif
                                @endforeach
                               
                            </ul>
                        </div>
						
						<!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title-two">
                                <h4>Recent News</h4>
                            </div>
							@foreach ($view_pics as $view_pic)
                                @if ($view_pic->status == 'approved')
									<article class="post">
										<figure class="post-thumb"><img src="{{ URL::asset("/public/../$view_pic->images1")}}" alt=""><a href="{{ url('viewmarketplace/'.$view_pic->ref_no) }}" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
										<div class="text"><a href="{{ url('viewmarketplace/'.$view_pic->ref_no) }}">{{ $view_pic->title }}</a></div>
										<div class="post-info">{{ $view_pic->created_at->format('M d, Y')}}</div>
									</article>
                                	@else
                                @endif
                            @endforeach
							
							
							
						</div>
						
						<!--Archive Widget-->
                        <div class="sidebar-widget sidebar-blog-category archive-widget">
                            <div class="sidebar-title-two">
                                <h4>Archives</h4>
                            </div>
                            <ul class="blog-cat-two">
                                <li><a href="#">January 2019 <span>(3)</span></a></li>
                                <li><a href="#">February 2019 <span>(2)</span></a></li>
                                <li><a href="#">May 2019 <span>(6)</span></a></li>
                            </ul>
                        </div>
						
						<!--Gallery Widget-->
                        <div class="sidebar-widget instagram-widget">
                            <div class="sidebar-title-two">
                                <h4>Gallery</h4>
                            </div>
							<div class="images-outer clearfix">
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarket->images1")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 70px;" src="{{ URL::asset("/public/../$view_singlemarket->images1")}}" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarket->images2")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 70px;" src="{{ URL::asset("/public/../$view_singlemarket->images2")}}" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarket->images3")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 70px;" src="{{ URL::asset("/public/../$view_singlemarket->images3")}}" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarket->images4")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 70px;" src="{{ URL::asset("/public/../$view_singlemarket->images4")}}" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarket->images5")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 70px;" src="{{ URL::asset("/public/../$view_singlemarket->images5")}}" alt=""></figure>
                               
                            </div>
						</div>
						
							<!-- Banner Widget-->
                        <div class="sidebar-widget banner-widget">
							<div class="widget-content" style="background-image:url({{ URL::asset("/public/../$view_singlemarket->images1")}})">
								<div class="logo">
									<img src="images/icons/widget-logo.png" alt="" />
								</div>
								<div class="title">GOGIS SCHOOLS</div>
								<h2>GOGIS SCHOOLS</h2>
								<a href="{{ url('admissionform') }}" class="theme-btn btn-style-seventen">Let’s start now <span class="icon flaticon-link"></span></a>
							</div>
						</div>

						<!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title-two">
                                <h4>Recent News</h4>
                            </div>
							
								<article class="post">
									<figure class="post-thumb"><img src="{{ URL::asset("/public/../$view_singlemarket->images1")}}" alt=""><a href="{{ url('viewmarketplace/'.$view_singlemarket->ref_no) }}" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
									<div class="text"><a href="{{ url('viewmarketplace/'.$view_singlemarket->ref_no) }}">{{ $view_singlemarket->title }}</a></div>
									<div class="post-info">{{ $view_pic->phone }}</div>
									<div class="post-info">{{ $view_pic->email }}</div>
									<div class="post-info">{{ $view_pic->address }}</div>
								</article>
                            
						</div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	<!--End Sidebar Page Container-->
	
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
