@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        
          <section class="contact-page-section" style="margin-bottom: 30px;">
            <div class="auto-container">
              <div class="inner-container">
               
                  
                <div class="row clearfix">
                  <!-- Info Column -->
                  <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="contactform">
                      <form method="post" action="{{ url('admin/updateadmission/'.$edit_students->ref_no1) }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
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
     
      <input class="form-control" type="text" name="surname" value="{{ $edit_students->surname }}" placeholder="Surname" required="">
    </div>
    
    <div class="form-group">
      <h5>First name</h5>
      <input class="form-control" type="text" name="fname" value="{{ $edit_students->fname }}" placeholder="First Name" required="">
    </div>
    <div class="form-group">
      <h5>Middle name</h5>
      <input type="text" name="middlename" class="form-control" @error('middlename')

      @enderror value="{{ $edit_students->middlename }}" id="exampleInputEmail1" placeholder="Middlename">
    </div>
    @error('middlename')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  
    <div class="form-group">
      <h5>L.G.Area</h5>
      <input type="text" name="lga" class="form-control" @error('lga')

      @enderror value="{{ $edit_students->lga }}" id="exampleInputEmail1" placeholder="Place of Birth">
    </div>
    @error('lga')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  
    
    <div class="form-group">
      <h5>Religion</h5>
      <input type="text" name="religion" class="form-control" @error('religion')

      @enderror value="{{ $edit_students->religion }}" id="exampleInputEmail1" placeholder="Religion">
    </div>
    @error('religion')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  

    <div class="form-group">
      <h5>Term</h5>
      <select name="term" class="form-control"  id="">
        <option value="{{ $edit_students->term }}">{{ $edit_students->term }}</option>
        <option value="First Term">First Term</option>
        <option value="Second Term">Second Term</option>
        <option value="Third Term">Third Term</option>
      </select>
    </div>
  <div class="form-group">
      <h5>State of Origin</h5>
      <input type="text" name="state" class="form-control" @error('state')

      @enderror value="{{ $edit_students->state }}" id="exampleInputEmail1" placeholder="State of Origin">
    </div>
    @error('state')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  
</div>

<div class="form-group">
      <h5>Do you want your Child to stay beyond closing time? </h5>
  <select id="staybeyond" name="att" class="form-control">
    <option value="{{ $edit_students->att }}">{{ $edit_students->att }}</option>
    <option value="not">No</option>
    <option value="acept">Yes</option>
</select>

<div id="staybeyondtime" style="display: none;">
<label for="info">Why?</label>
<textarea class="form-control" id="info" name="attendedtime" value="{{ $edit_students->staybeyondtime }}" cols="30" placeholder="Why..."></textarea>
<br>

</div>



<div class="form-group">
      <h5>Is there any Medical reports on your Child you will love the School to be aware of?</h5>
      Yes <input value="Yes" value="{{ $edit_students->medreports }}"  type="checkbox" name="medreports"> 
      No  <input value="No" value="{{ $edit_students->medreports1 }}" type="checkbox" name="medreports1">
    </div>

    <div class="form-group">
      <h5>Who is your Child living with?</h5>
      <input value="{{ $edit_students->livingwith }}" class="form-control"  type="text" name="livingwith"> 
    </div>

    <div class="form-group">
      <h5>Any Other Vital Information should be provided below?</h5>
      <textarea value="" row="10" cols="10" class="form-control" name="livingwith1" placeholder="Write here"> {{ $edit_students->livingwith1 }}</textarea>
    </div>

    <div class="form-group">
      <img class="image rounded-circle" src="{{ asset('/public/../'.$edit_students->birthcert )}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">

      <h5>Submit Birth Certificate </h5>
      <input value="" class="form-control"  type="file" name="birthcert"> 
    </div>
  </div>
  <div class="form-group">
      <h5>Is your physically challenged(Handicap)</h5>
  <select id="handicap" name="handicap" class="form-control">
    <option value="nothandicap">No</option>
    <option value="ishandicap">Yes</option>
  </select>
  </div>
  <div id="addhandicap" style="display: none;">
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
      Severe  <input value="Severe" type="checkbox" name="hearing1">
      Deaf  <input value="Deaf" type="checkbox" name="hearing2">
      <br>


      <label for="info">Orthoparedically Handicapped</label>
      Legs <input value="Legs"  type="checkbox" name="ortho1"> 
      Hands  <input value="Hands" type="checkbox" name="ortho">
      <br>

      <label for="info">Mentally Detarded</label>
      Mild Case <input value="Mild Case"  type="checkbox" name="mentally"> 
      Severe Case  <input value="Severe Case" type="checkbox" name="mentally1">
      Referral Case  <input value="Referral Case" type="checkbox" name="mentally2">
      <br>
  </div>
  <div class="form-group">
    <h4>Is your Child Inquisitive or always Quiet?</h4>
      Yes <input value="Yes"  type="checkbox" name="quiet"> <br>
      No  <input value="No"  type="checkbox" name="quiet1">
  </div>

  <div class="form-group">
    <h4>Is your Child Exceptionally Gifted?</h4>
      Yes <input value="Yes"  type="checkbox" name="gifted"> <br>
      No  <input value="No"  type="checkbox" name="gifted1">
  </div>
</div>

<!-- Form Column -->
<div class="form-column col-lg-6 col-md-12 col-sm-12">
<div class="form-group">
  <h5>Date of Birth</h5>
    <input type="date" name="dob" class="form-control" @error('dob')
  
    @enderror value="{{ $edit_students->dob }}" id="exampleInputEmail1" placeholder="Date of Birth">
  </div>
  @error('dob')
  <span class="text-danger">{{ $message }}</span>
  @enderror


<div class="form-group">
      <h5>Has the child started school Already?</h5>
  <select id="yesNo" name="started_school" class="form-control">
    <option value="{{ $edit_students->started_school }}">{{ $edit_students->started_school }}</option>
    <option value="no">No</option>
    <option value="yes">Yes</option>
</select>

<div id="additionalInfo" style="display: none;">
<label for="info">Name of School</label>
<input type="text" value="{{ $edit_students->school_name }}" class="form-control" id="info" name="school_name" placeholder="Name of School">
<br>
<label for="info">Class Admitted</label>
<input type="text" class="form-control" value="{{ $edit_students->class_attended }}" id="info" name="class_attended" placeholder="Class Admitted">
<label for="info">Evidence of Fee payment at last School Attended</label>
<img class="image rounded-circle" src="{{ asset('/public/../'.$edit_students->payment_evid )}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">

<input type="file" class="form-control" id="info" name="payment_evid" placeholder="Evidence of Fee payment at last School Attended">

<label for="info">Transfer Certificate Number</label>
<input type="text" class="form-control" id="info" name="transfer_cert" placeholder="Transfer Certificate Number">

<label for="info">Report Card of the Last School</label>
<img class="image rounded-circle" src="{{ asset('/public/../'.$edit_students->report_card )}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">

<input type="file" class="form-control" id="info" name="report_card" placeholder="Name of School">

</div>
</div>
 

<div class="form-group">
  <h5>Classes </h5>
  <select class="form-control" type="text" name="classname" required="">
    <option value="{{ $edit_students->classname }}">{{ $edit_students->classname }}</option>
    @foreach ($add_class as $add_clas)
      <option value="{{ $add_clas->classname }}">{{ $add_clas->classname }}</option>
    @endforeach
  </select>
  
</div>
<h5>Select Gender</h5>
<div class="form-group">
  <select class="form-control" name="gender" required="">
    <option value="{{ $edit_students->gender }}">{{ $edit_students->gender }}</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
</div>

<div class="form-group">
  <h5>Section </h5>
  <select required class="form-control" type="text" name="section">
    <option value="{{ $edit_students->section }}">{{ $edit_students->section }}</option>
    <option value="Pre-Nursery">Pre-Nursery</option>
    <option value="Nursery">Nursery</option>
    <option value="Primary">Primary</option>
                      
  </select>
</div>  

    
  <div class="form-group">
    <h4>Child Passport</h4>
<img class="image rounded-circle" src="{{ asset('/public/../'.$edit_students->images )}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">

      <input class="form-control" type="file" name="images" id="fileToUpload">
  </div>

  <div class="form-group">
      <h5>Academic Session</h5>
      <select class="form-control" name="academic_session" id="">
        <option value="{{ $edit_students->academic_session }}">{{ $edit_students->academic_session }}</option>
          @foreach ($view_sessions as $view_session)
          <option value="{{ $view_session->academic_session }}">{{ $view_session->academic_session }}</option>
          @endforeach
      </select>
  </div>
  

  <div class="form-group">
      <h5>Do you want your chhild, while in Shool to be attended to by any person than you and the school staff?</h5>
  <select id="attend" name="tobeattended" class="form-control">
    <option value="{{ $edit_students->attend }}">{{ $edit_students->attend }}</option>
    <option value="notAccepted">No</option>
    <option value="accepted">Yes</option>
</select>

  <div id="addedthings" style="display: none;">
      <label for="info">Name of the Person</label>
      <input type="text" class="form-control" value="{{ $edit_students->attended }}" id="info" name="attended" placeholder="Name of the Person">
    </div>
  </div>

  <div class="form-group">
    <h4>Can your Child use water Cistern?</h4>
      Yes <input  type="checkbox" name="cistern"> <br>
      No  <input  type="checkbox" name="cistern1">
  </div>
  <div class="form-group">
    <h4>Which Game does your Child like best?</h4>
      <input value="{{ $edit_students->game }}" class="form-control" type="text" name="game" id="">
  </div>

  <div class="form-group">
    <h4>Mention types of Toys your child plays with?</h4>
      <input class="form-control" type="text" name="toys" value="{{ $edit_students->toys }}">
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
      <input class="form-control" type="text" name="spent" value="{{ $edit_students->spent }}">
  </div>

  <div class="form-group">
    <h4>Is your Child playful or Shy?</h4>
      Yes <input  type="checkbox" name="playful1"> <br>
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


  </div>
</div>
</div>
<!-- /.card -->

</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
</div>

@include('dashboard.admin.footer')


<script>
document.getElementById('yesNo').addEventListener('change', function() {
var additionalInfo = document.getElementById('additionalInfo');
if (this.value === 'yes') {
additionalInfo.style.display = 'block';
} else {
additionalInfo.style.display = 'none';
}
});


document.getElementById('attend').addEventListener('change', function() {
var addedthings = document.getElementById('addedthings');
if (this.value === 'accepted') {
addedthings.style.display = 'block';
} else {
addedthings.style.display = 'none';
}
});


document.getElementById('staybeyond').addEventListener('change', function() {
var staybeyondtime = document.getElementById('staybeyondtime');
if (this.value === 'acept') {
staybeyondtime.style.display = 'block';
} else {
staybeyondtime.style.display = 'none';
}
});


document.getElementById('handicap').addEventListener('change', function() {
var addhandicap = document.getElementById('addhandicap');
if (this.value === 'ishandicap') {
addhandicap.style.display = 'block';
} else {
addhandicap.style.display = 'none';
}
});
</script>