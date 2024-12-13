@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Upload </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload  </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
 
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <h3>Detail of Child's Parent (Father)</h3>
						<div class="contactform">
							<form method="post" action="{{ route('admin.createparent') }}" enctype="multipart/form-data">
							@csrf

                @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if (Session::get('fail'))
                  <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                            @endif
								<div class="form-group">
									<h5>Surname</h5>
									<input class="form-control" type="text" name="fathersurname" value="{{ $viewsingle_parent->fathersurname }}" placeholder="Surname" required="">
								</div>
								
								<div class="form-group">
									<h5>First name</h5>
									<input class="form-control" type="text" name="fathername" value="{{ $viewsingle_parent->fathername }}" placeholder="First Name" required="">
								</div>
								<div class="form-group">
									<h5>Middle name</h5>
									<input class="form-control" type="text" name="fathermiddlename" value="{{ $viewsingle_parent->fathermiddlename }}" placeholder="Middle Name" required="">
								</div>
								<div class="form-group">
									<h5>Marital Status</h5>
                  <select name="maritalstatus" class="form-control">
                    <option value="{{ $viewsingle_parent->maritalstatus }}">{{ $viewsingle_parent->maritalstatus }}</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                  </select>
								</div>
								<div class="form-group">
									<h5>Phone</h5>
                    <input type="text" class="form-control" @error('phone')
                    @enderror value="{{ $viewsingle_parent->phone }}" name="phone" placeholder="phone">
                </div>
            
                @error('phone')
                <span class="text-danger">{{ $message }}</span>
                @enderror 

                <h5>In case of Emergency </h5>
                <div class="form-group">
									<h5>1st Contact Phone number</h5>
                    <input type="text" class="form-control" @error('femergeno')
                    @enderror value="{{ $viewsingle_parent->femergeno }}" name="femergeno" placeholder="1st Contact Phone number">
                </div>
            
                @error('femergeno')
                <span class="text-danger">{{ $message }}</span>
                @enderror 

                <div class="form-group">
									<h5>2nd Contact Phone number</h5>
                    <input type="text" class="form-control" @error('semergeno')
                    @enderror value="{{ $viewsingle_parent->semergeno }}" name="semergeno" placeholder="2nd Contact Phone number">
                </div>
            
                @error('semergeno')
                <span class="text-danger">{{ $message }}</span>
                @enderror 
                   
                <div class="form-group">
                    <h5>Nationality</h5>
                    <input class="form-control" type="text" name="nationality" value="{{ $viewsingle_parent->nationality }}" placeholder="Nationality" required="">
                </div>
                  <div class="form-group">
									<h5>Father Occupation</h5>
									<input class="form-control" type="text" name="fatheremployer" value="{{ $viewsingle_parent->fatheremployer }}" placeholder="Father Occupation" required="">
								</div>

                <div class="form-group">
									<h5>Religion</h5>
									<input class="form-control" type="text" name="religion" value="{{ $viewsingle_parent->religion }}" placeholder="Religion" required="">
								</div>

                  <div class="form-group">
                                <h5>Email</h5>
                                <input type="text" class="form-control" @error('email')
                    @enderror value="{{ $viewsingle_parent->email }}" name="email" placeholder="Email">
                  </div>
                  
                  @error('email')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror 
                   
                <div class="form-group">
                    <h5>Address</h5>
                    <input class="form-control" type="text" name="fatheraddress" value="{{ $viewsingle_parent->fatheraddress }}" placeholder="Address" required="">
                </div>
                               

                <div class="form-group">
                      <label for="exampleInputEmail1">Section</label>
                      <select name="section" class="form-control" required>
                        <option value="{{ $viewsingle_parent->section }}">{{ $viewsingle_parent->section }}</option>
                      <option value="Creche">Creche</option>
                      <option value="Pre-Nursery">Pre-Nursery</option>
                      <option value="Primary">Primary</option>
                      </select>
                    </div>
                    @error('section')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                  </div>
                                
						</div>
					</div>
					
					<!-- Form Column -->
					          <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <h3>Details of Child's Parent (Mother)</h3>
						            <div class="form-group">
                            <h5>Surname</h5>
                            <input class="form-control" type="text" name="mothersurname" value="{{ $viewsingle_parent->mothersurname }}" placeholder="Surname" required="">
                        </div>
                        
                        <div class="form-group">
                            <h5>First name</h5>
                            <input class="form-control" type="text" name="mothername" value="{{ $viewsingle_parent->mothername }}" placeholder="First Name" required="">
                        </div>
                        <div class="form-group">
                            <h5>Middle name</h5>
                            <input class="form-control" type="text" name="mothermiddlename" value="{{ $viewsingle_parent->mothermiddlename }}" placeholder="Middle Name" required="">
                        </div>
                        <div class="form-group">
                            <h5>Child's Mother Tongue</h5>
                            <input class="form-control" type="text" name="mothertongue" value="{{ $viewsingle_parent->mothertongue }}" placeholder="Child's Mother Tongue" required="">
                        </div>
                        <div class="form-group">
                            <h5>Mother Phone</h5>
                            <input class="form-control" type="text" name="motherphone" value="{{ $viewsingle_parent->motherphone }}" placeholder="Phone Number" required="">
                        </div>
                        
                        <div class="form-group">
                            <h5>Mother Occupation</h5>
                            <input class="form-control" type="text" name="motheremployer" value="{{ $viewsingle_parent->motheremployer }}" placeholder="Employer" required="">
                        </div>

                        <div class="form-group">
                            <h5>Mother Email</h5>
                            <input class="form-control" type="text" name="motheremail"@error('motheremail')
                          @enderror value="{{ $viewsingle_parent->motheremail }}" name="motheremail" placeholder="Mother Email">
                    </div>
                  
                  @error('motheremail')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror 
                        <div class="form-group">
                            <h5>Mother Address</h5>
                            <input class="form-control" type="text" name="motheraddress" value="{{ $viewsingle_parent->motheraddress }}" placeholder="Address" required="">
                        </div>

                        <div class="form-group">
                            <h5>Who will be bringing your Child to School and also take home?</h5>
                            <textarea name="whobring" class="form-control" placeholder="List them here">{{ $viewsingle_parent->whobring }}</textarea>
                            <!-- <input class="form-control" type="text" name="motheraddress" value="" placeholder="Address" required=""> -->
                        </div>
                        
                        <!-- <div class="form-group">
                            <h5>Use Parent Phone Number as Password</h5>
                            <input type="number" class="form-control" @error('password')
                            @enderror value="{{ old('password') }}" name="password" placeholder="Use Parent Phone Number as Password">
                        </div>
                        
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror  -->
                
							<div class="form-group">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>                                        
						</form>
					</div>
				</div>
    <!-- /.content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
    @include('dashboard.admin.footer')