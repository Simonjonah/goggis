@include('pages.common.header')

    <!--End Main Header -->

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/gallery/11.jpeg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>Check <span>Result</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Check Result</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Contact Page Section -->
	<section class="contact-page-section">

		<div class="auto-container">
			<div class="inner-container">
				<h2 style="color: red; text-align: center; margin-bottom: 15px;">CHECK RESULT</span></h2>
				<div class="row clearfix">

					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<img src="{{ asset('front/images/gallery/11.jpeg') }}" alt="">
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="innercolumn">

							<!--Contact Form-->
							<div class="contactform">
								<form action="{{ route('generatllePDF') }}" method="post" enctype="multipart/form-data">
									@csrf
									@if (Session::get('success'))
									<div class="alert alert-success">
										{{ Session::get('success') }}
									</div>
									@endif
						  
									@if (Session::get('fail'))
									<div class="alert alert-danger">
									{{ Session::get('fail') }}
									</div>
								  @endif
									<div class="card-body">
										<div class="form-group">
											<label> Registration Number</label>
											<input required type="text" class="form-control" @error('regnumber')
											@enderror value="{{ old('regnumber') }}" name="regnumber" placeholder="Registration number">
										</div>
										
										@error('regnumber')
										<span class="text-danger">{{ $message }}</span>
										@enderror 

										
										
										<div class="form-group">
										  <label for="">Term</label>
										  <select required name="term" class="form-control"  id="">
											<option value="First Term">First Term</option>
											<option value="Second Term">Second Term</option>
											<option value="Third Term">Third Term</option>
										  </select>
										</div>
						  
						  
						  
									  <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Year</label>
										<select required name="academic_session" class="form-control" id="">
										  @foreach ($view_sessions as $view_session)
										  <option value="{{ $view_session->academic_session }}">{{ $view_session->academic_session }}</option>
										  @endforeach
										</select>
										
									  </div>
						  
									  <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Class</label>
										<select required name="classname" class="form-control" id="">
										  @foreach ($view_classes as $view_classe)
										  <option value="{{ $view_classe->classname }}">{{ $view_classe->classname }}</option>
										  @endforeach
										</select>
										
									  </div>
									  
						  
									  <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 col-form-label">Section</label>
										<select required name="section" required class="form-control" id="">
										  <option value="">Select Section</option>
										  <option value="Pre-Nursery">Pre-Nursery</option>
										  <option value="Nursery">Nursery</option>
										  <option value="Primary">Primary</option>
										</select>
										
									  </div>
						  

									

									<div class="form-group">
										<button type="submit" class="btn btn-success">Submit</button>
									</div>

								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	

	@include('pages.common.footer')

