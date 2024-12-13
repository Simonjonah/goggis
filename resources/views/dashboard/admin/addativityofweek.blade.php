@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
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
                <h3 class="card-title">Add Activities other week</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ url('admin/createactivities') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>  Firstname</label>
                        <input type="text" class="form-control" @error('fname')
                        @enderror value="{{ old('fname') }}" name="fname" placeholder=" First Name">
                      </div>
                    </div>
                    @error('fname')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>  Lastname</label>
                        <input type="text" class="form-control" @error('lname')
                        @enderror value="{{ old('lname') }}" name="lname" placeholder=" Last Name">
                      </div>
                    </div>
                    @error('lname')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label> Designation</label>
                        <input type="text" class="form-control" @error('designation')
                        @enderror value="{{ old('designation') }}" name="designation" placeholder="Designation">
                      </div>
                    </div>
                    @error('designation')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label> Day </label>
                        <select name="dayac" class="form-control">
                            <option value="">Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                      </div>
                    </div>
                    @error('dayac')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label> Month </label>
                        <select name="monthsac" class="form-control">
                          <option value="">Month</option>
                          <option value="01">Jan</option>
                          <option value="02">Feb</option>
                          <option value="03">Mar</option>
                          <option value="04">Apr</option>
                          <option value="05">May</option>
                          <option value="06">Jun</option>
                          <option value="07">Jul</option>
                          <option value="08">Aug</option>
                          <option value="09">Sep</option>
                          <option value="10">Oct</option>
                          <option value="11">Nov</option>
                          <option value="12">Dec</option>
                        </select>
                      </div>
                    </div>
                    @error('monthsac')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label> Year </label>
                        <select name="yrsac" class="form-control">
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                        </select>
                      </div>
                    </div>
                    @error('yrsac')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label> Role </label>
                        <select name="role" required class="form-control">
                          <option value="">Role</option>
                          <option value="Pupils of the Week">Pupils of the Week</option>
                          <option value="Pupils of the Month">Pupils of the Month</option>
                          <option value="Pupils of the Year">Pupils of the Year</option>
                          
                          <option value="Teacher of the Week">Teacher of the Week</option>
                          <option value="Teacher of the Month">Teacher of the Month</option>
                          <option value="Teacher of the Year">Teacher of the Year</option>
                          
                          <option value="Parent of the Week">Parent of the Week</option>
                          <option value="Parent of the Month">Parent of the Month</option>
                          <option value="Parent of the Year">Parent of the Year</option>
                        </select>
                      </div>
                    </div>
                    @error('role')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>  Image</label>
                        <input type="file" @error('images')
                        @enderror value="{{ old('images') }}" class="form-control" name="images">
                      </div>
                  
                    </div>
                    @error('images')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 
                     
                    <div class="col-sm-6">
                      
                       <textarea class="textarea"  name="messages" class="form-control" @error('messages') is-invalid @enderror" placeholder="Place some text here"
                      value="{{ old('messages') }}"     style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                     </div>
                      @error('messages')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    

                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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