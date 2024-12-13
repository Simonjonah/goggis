@include('pages.common.header')


    <!--End Main Header -->
	<style type="text/css">
		.brixton{
			display: inline-block;
    		max-width: 100%;
   		 	height: auto;
    		margin-left: 161px;
		}
	</style>
	<!--Page Title-->
    {{-- <section class="page-title" style="background-image:url(images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Nursery <span>Form</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section> --}}
    
	<!-- Contact Page Section -->
	<section class="contact-page-section" style="margin-bottom: 30px;">
		<div class="auto-container">
			<div class="inner-container">
				<div class="sec-title centered">
				<!-- <h2>BRIXTONN SCHOOLS </h2> -->

				<span><img style="width: 200px; " src="{{ asset('images/sch14.jpg') }}"></a></span>
			</div>
					
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="contactform">
						<form method="post" action="{{ url('admin/createadminbyparents') }}" enctype="multipart/form-data">
							
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
								<div class="form-group">
									<h5>Surname</h5>
									<input class="form-control" type="text" name="surname" value="" placeholder="Surname" required="">
								</div>
								
								<div class="form-group">
									<h5>First name</h5>
									<input class="form-control" type="text" name="fname" value="" placeholder="First Name" required="">
								</div>
								<div class="form-group">
									<h5>Middle name</h5>
                  <input type="text" name="middlename" class="form-control" @error('middlename')
        
                  @enderror value="{{ old('middlename') }}" id="exampleInputEmail1" placeholder="Middlename">
                </div>
                @error('middlename')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              
								<div class="form-group">
									<h5>L.G.Area</h5>
                  <input type="text" name="lga" class="form-control" @error('lga')
        
                  @enderror value="{{ old('lga') }}" id="exampleInputEmail1" placeholder="Place of Birth">
                </div>
                @error('lga')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              
								
								<div class="form-group">
									<h5>Religion</h5>
                  <input type="text" name="religion" class="form-control" @error('religion')
        
                  @enderror value="{{ old('religion') }}" id="exampleInputEmail1" placeholder="Religion">
                </div>
                @error('religion')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              

								<div class="form-group">
									<h5>Term</h5>
									<select name="entrylevel" class="form-control"  id="">
										<option value="First Term">First Term</option>
										<option value="Second Term">Second Term</option>
										<option value="Third Term">Third Term</option>
									</select>
								</div>
              <div class="form-group">
                  <h5>State of Origin</h5>
                  <input type="text" name="state" class="form-control" @error('state')
        
                  @enderror value="{{ old('state') }}" id="exampleInputEmail1" placeholder="State of Origin">
                </div>
                @error('state')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              
						</div>

            <div class="form-group">
                  <h5>Do you want your Child to stay beyond closing time? </h5>
                No <input type="checkbox" name="" id=""> <br>
                Yes <input type="checkbox" name="" id="">
			<h5>If yes give Reasons</h5>
			<div class="form-group">
            <label for="info">Why?</label>
            <textarea class="form-control" id="info" name="attendedtime" name="" id="" cols="30" placeholder="Why..."></textarea>
            <br>
           
          </div>


          
          <div class="form-group">
                  <h5>Is there any Medical reports on your Child you will love the School to be aware of?</h5>
                  Yes <input value="Yes"  type="checkbox" name="medreports"> 
                  No  <input value="No" type="checkbox" name="medreports">
                </div>

                <div class="form-group">
                  <h5>Who is your Child living with?</h5>
                  <input value="" class="form-control"  type="text" name="livingwith"> 
                </div>

                <div class="form-group">
                  <h5>Any Other Vital Information should be provided below?</h5>
                  <textarea value="" row="10" cols="10" class="form-control" name="livingwith" placeholder="Write here"> </textarea>
                </div>

                <div class="form-group">
                  <h5>Submit Birth Certificate </h5>
                  <input value="" class="form-control"  type="file" name="birthcert"> 
                </div>
              </div>
              <div class="form-group">
                  <h5>Is your physically challenged(Handicap)</h5>
                No <input type="checkbox" name="" id="">
                Yes <input type="checkbox" name="" id="">
              </div>
			  <div class="form-group">

                  <label for="info">Visual Disorder</label>
                  Partially Sighted <input  type="checkbox" name="sighted"> 
                  Blind  <input  type="checkbox" name="sighted">
                  <br>
                  <label for="info">Speech Disorder</label>
                  Shuttering <input value="Shuttering"  type="checkbox" name="speech"> 
                  Dumb  <input value="Dumb" type="checkbox" name="speech">
                  <br>

                  <label for="info">Hearing Disorder</label>
                  Mild <input value="Mild"  type="checkbox" name="hearing"> 
                  Severe  <input value="Severe" type="checkbox" name="hearing">
                  Deaf  <input value="Deaf" type="checkbox" name="hearing">
                  <br>


                  <label for="info">Orthoparedically Handicapped</label>
                  Legs <input value="Legs"  type="checkbox" name="ortho"> 
                  Hands  <input value="Hands" type="checkbox" name="ortho">
                  <br>

                  <label for="info">Mentally Detarded</label>
                  Mild Case <input value="Mild Case"  type="checkbox" name="mentally"> 
                  Severe Case  <input value="Severe Case" type="checkbox" name="mentally">
                  Referral Case  <input value="Referral Case" type="checkbox" name="mentally">
                  <br>
              </div>
              <div class="form-group">
								<h4>Is your Child Inquisitive or always Quiet?</h4>
                  Yes <input value="Yes"  type="checkbox" name="quiet"> <br>
                  No  <input value="No"  type="checkbox" name="quiet">
							</div>

              <div class="form-group">
								<h4>Is your Child Exceptionally Gifted?</h4>
                  Yes <input value="Yes"  type="checkbox" name="gifted"> <br>
                  No  <input value="No"  type="checkbox" name="gifted">
							</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="form-group">
							<h5>Date of Birth</h5>
                <input type="date" name="dob" class="form-control" @error('dob')
              
                @enderror value="{{ old('dob') }}" id="exampleInputEmail1" placeholder="Date of Birth">
              </div>
              @error('dob')
              <span class="text-danger">{{ $message }}</span>
              @enderror
      

			<div class="form-group">
                  <h5>Has the child started school Already?</h5>
				  No <input type="radio" class="form-control" id="info" name="info" placeholder="Name of School">
				  Yes <input type="radio" class="form-control" id="info" name="info" placeholder="Name of School">
			<!-- </div> -->
			<h5>If yes fill information belew:</h5>
			<div class="form-group">

            <label for="info">Name of School</label>
            <input type="text" class="form-control" id="info" name="info" placeholder="Name of School">
            <br>
            <label for="info">Class Admitted</label>
            <input type="text" class="form-control" id="info" name="info" placeholder="Class Admitted">
            <label for="info">Evidence of Fee payment at last School Attended</label>
            <input type="file" class="form-control" id="info" name="info" placeholder="Evidence of Fee payment at last School Attended">

            <label for="info">Transfer Certificate Number</label>
            <input type="text" class="form-control" id="info" name="info" placeholder="Transfer Certificate Number">

            <label for="info">Report Card of the Last School</label>
            <input type="file" class="form-control" id="info" name="info" placeholder="Name of School">
        
          </div>
        </div>
             
      
						<div class="form-group">
							<h5>Classes </h5>
							<input type="text" class="form-control" id="info" name="info" placeholder="Class">

							
						</div>
						<h5>Select Gender</h5>
						<div class="form-group">
							<select class="form-control" name="gender" required="">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>

						<div class="form-group">
							<h5>Section </h5>
							<select required class="form-control" type="text" name="section">
                <option value="Creche">Creche</option>
                <option value="Pre-Nursery">Pre-Nursery</option>
                <option value="Primary">Primary</option>
																	
							</select>
						</div>  
						
								
							<div class="form-group">
								<h4>Child Passport</h4>
                  <input required class="form-control" type="file" name="images" id="fileToUpload">
							</div>

              
							

              <div class="form-group">
                  <h5>Do you want your child, while in Shool to be attended to by any person than you and the school staff?</h5>
                No <input type="checkbox" name="" id="">
                Yes <input type="checkbox" name="" id="">
			<div class="form-group">
                  <label for="info">Name of the Person</label>
                  <input type="text" class="form-control" id="info" name="attended" placeholder="Name of the Person">
                </div>
              </div>

              <div class="form-group">
								<h4>Can your Child use water Cistern?</h4>
                  Yes <input  type="checkbox" name="cistern"> <br>
                  No  <input  type="checkbox" name="cistern1">
							</div>
              <div class="form-group">
								<h4>Which Game does your Child like best?</h4>
                  <input class="form-control" type="text" name="game" id="">
							</div>

              <div class="form-group">
								<h4>Mention types of Toys your child plays with?</h4>
                  <input class="form-control" type="text" name="toys" id="">
							</div>

              <div class="form-group">
								<h4>Who does your child like playing with at home? Tick one</h4>
                  Father <input  type="checkbox" name="playwith"> 
                  Mother  <input  type="checkbox" name="playwith1">
                  Brothers  <input  type="checkbox" name="playwith2">
                  Sisters  <input  type="checkbox" name="playwith3">
                  Playmate  <input  type="checkbox" name="playwith4">
                  Others  <input  type="checkbox" name="playwith5">
							</div>
              <div class="form-group">
								<h4>How many hours do you spend with your Child?</h4>
                  <input class="form-control" type="text" name="spent" id="">
							</div>

              <div class="form-group">
								<h4>Is your Child playful or Shy?</h4>
                  Yes <input  type="checkbox" name="playful"> <br>
                  No  <input  type="checkbox" name="playful">
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
</section>
	<!-- End Team Page Section -->
	
	
	
	
	

	<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>