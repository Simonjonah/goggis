@include('pages.common.header')
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ URL::asset("/public/../$view_singlemarkets->images1")}})">
    	<div class="auto-container">
			<div class="content">
				<h1>Markets <span>details</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Markets  details</li>
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
							<div class="image">
								<img src="{{ URL::asset("/public/../$view_singlemarkets->images1")}}" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li><span class="fa fa-calendar"></span>{{ $view_singlemarkets->created_at->format('h:i:s a m/d/y') }}</li>
									<li><span class="fa fa-user"></span>Admin</li>
									
								</ul>
								<h4>{!! $view_singlemarkets->title !!}</h4>
								<div class="text">
									<p>{!! $view_singlemarkets->messages !!}</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar default-sidebar">
						
						<!-- Search -->
                        {{-- <div class="sidebar-widget search-box">
                        	<form method="get" action="{{ url('search') }}">

                                <div class="form-group">
                                    <input type="search" name="title" value="" placeholder="Enter Your Keyword..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div> --}}
					
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title-two">
                                <h4>Categories</h4>
                            </div>
                            <ul class="blog-cat-two">
                                @foreach ($all_markets as $all_market)
                                <li><a href="{{ url('singleblog/'.$all_market->slug) }}">{{ $all_market->title }}</span></a></li>
                                    
                                @endforeach
                            </ul>
                        </div>


						<!--Gallery Widget-->
                        <div class="sidebar-widget instagram-widget">
                            <div class="sidebar-title-two">
                                <h4>Gallery</h4>
                            </div>
							<div class="images-outer clearfix">
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarkets->images1")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 80px;" src="{{ URL::asset("/public/../$view_singlemarkets->images1")}}" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarkets->images2")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 80px;" src="{{ URL::asset("/public/../$view_singlemarkets->images2")}}" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarkets->images3")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 80px;" src="{{ URL::asset("/public/../$view_singlemarkets->images3")}}" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarkets->images4")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 80px;" src="{{ URL::asset("/public/../$view_singlemarkets->images4")}}" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="{{ URL::asset("/public/../$view_singlemarkets->images5")}}" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img style="width: 100%; height: 80px;" src="{{ URL::asset("/public/../$view_singlemarkets->images5")}}" alt=""></figure>
                                
                            </div>
						</div>
						


						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title-two">
                                <h4>Details</h4>
                            </div>
                            <ul class="blog-cat-two">
                                
                                <li><a href="{{ url('singleblog/'.$view_singlemarkets->slug) }}">{{ $view_singlemarkets->email }}</span></a></li>
                                <li><a href="{{ url('singleblog/'.$view_singlemarkets->slug) }}">{{ $view_singlemarkets->phone }}</span></a></li>
                                <li><a href="{{ url('singleblog/'.$view_singlemarkets->slug) }}">{{ $view_singlemarkets->title }}</span></a></li>
                                <li><a href="{{ url('singleblog/'.$view_singlemarkets->slug) }}">{{ $view_singlemarkets->address }}</span></a></li>
                                <li><a href="{{ url('singleblog/'.$view_singlemarkets->slug) }}">{{ $view_singlemarkets->company_name }}</span></a></li>
                                <li><a href="{{ url($view_singlemarkets->facebook) }}">Facebook<span class="fa fa-facebook-square"></span></a></li>
								<li><a href="{{ url($view_singlemarkets->twitter) }}">X<span class="fa fa-twitter-square"></span></a></li>
								<li><a href="{{ url($view_singlemarkets->linkedin) }}">Linkedin<span class="fa fa-linkedin-square"></span></a></li>
								<li><a href="{{ url($view_singlemarkets->instagram) }}">Instagram<span class="fa fa-instagram"></span></a></li>
								<li><a href="{{ url($view_singlemarkets->whatsapp) }}">Whatsapp<span class="fa fa-whatsapp"></span></a></li>
                            </ul>
                        </div>
						
						</div>
						
						
						
						<!-- Banner Widget-->
                        <!-- <div class="sidebar-widget banner-widget">
							<div class="widget-content" style="background-image:url({{ URL::asset("/public/../$view_singlemarkets->images")}})">
								<div class="logo">
									<img src="images/icons/widget-logo.png" alt="" />
								</div>
								<div class="title" style="color: #FF0000;">Enroll your Child with us @</div>
								<h2 style="color: #FF0000;">BRIXTONN SCHOOLS</h2>
								<a href="{{ url('/') }}" class="theme-btn btn-style-seventen">Enroll now <span class="icon flaticon-link"></span></a>
							</div>
						</div> -->
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	<!--End Sidebar Page Container-->
	
	
	
    @include('pages.common.footer')