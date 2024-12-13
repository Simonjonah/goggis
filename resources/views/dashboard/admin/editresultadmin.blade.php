@include('dashboard.admin.header')
@include('dashboard.admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Result of {{ $edit_resultadmin->fname }} {{ $edit_resultadmin->middlename }} {{ $edit_resultadmin->surname }} in {{ $edit_resultadmin->classname }} {{ $edit_resultadmin->entrylevel }} {{ $edit_resultadmin->section }}  {{ $edit_resultadmin->regnumber }} Section</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subjects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      @if ($edit_resultadmin->section == 'Pre-Nursery' && $edit_resultadmin->classname === 'Lower pre-Nursery')
        
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        {{-- <small class="float-right">{{ $edit_resultadmin->created_at->format('D d, M Y, H:i')}}</small> --}}
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-2 invoice-col">
                    <img style="width: 80px; height: 80px;" src="{{ asset('front/images/logo.jpg') }}" alt=""> <br>

                
                </div> 
                <!-- /.col -->
               <div class="col-sm-8 invoice-col" style="text-align: center">
                 
                  <h1><strong>GRACE OF GOD INTERNATIONAL SCHOOL</strong></h1>
                  
                  <address>
                    
                    61 Ntiedo Udosen Street, Uyo 
                    Akwa Ibom State, Nigeria <br>
                    Website: gogischools.org
                    
                    <br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col">
                    <img style="width: 100px; height: 100px;" src="{{ URL::asset("/public/../$edit_resultadmin->images")}}" alt="">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                    <div class="col-12 table-responsive">
                      <form action="{{ url('admin/updateresultad/'.$edit_resultadmin->id) }}" method="post" enctype="multipart/form-data">
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
                            @method('PUT')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                              <th>Subjects</th>
                              
                              <th>Comments</th>
                            </tr>
                            </thead>
                            <tbody>
      
                              
                                  <tr>
                                      <td style="width: 90px;">{{ $edit_resultadmin->subjectname }}</td>

                                      <td><textarea cols="10" rows="10" value="" class="form-control" name="comment" placeholder="Test 1">{{ $edit_resultadmin->comment }} </textarea></td>
                                     
                            </tbody>
                          </table>
                      
                        {{-- @else
                            
                      @endif --}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> 
                  Submit 
              </button>
                  
              </div>
           

                </form>
                
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


      
      @elseif ($edit_resultadmin->section == 'Primary')
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        {{-- <small class="float-right">{{ $edit_resultadmin->created_at->format('D d, M Y, H:i')}}</small> --}}
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-2 invoice-col">
                    <img style="width: 80px; height: 80px;" src="{{ asset('front/images/logo.jpg') }}" alt=""> <br>

                
                </div> 
                <div class="col-sm-8 invoice-col" style="text-align: center">
                 
                  <h1><strong>GRACE OF GOD INTERNATIONAL SCHOOL</strong></h1>
                  
                  <address>
                    
                    61 Ntiedo Udosen Street, Uyo 
                    Akwa Ibom State, Nigeria <br>
                    Website: gogischools.org
                    
                    <br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col">
                    <img style="width: 100px; height: 100px;" src="{{ URL::asset("/public/../$edit_resultadmin->images")}}" alt="">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                    <div class="col-12 table-responsive">
                      <form action="{{ url('admin/updateresultad/'.$edit_resultadmin->id) }}" method="post" enctype="multipart/form-data">
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
                            @method('PUT')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                              <th>Subjects</th>
                              <th>Ca 1</th>
                              
                              
                              <th>Exams</th>
                            </tr>
                            </thead>
                            <tbody>
      
                              
                                  <tr>
                                      <td>{{ $edit_resultadmin->subjectname }}</td>

                                      <td><input type="number" value="{{ $edit_resultadmin->test_1 }}" class="form-control" name="test_1" placeholder="Test 1"></td>
                                      <td><input type="number" value="{{ $edit_resultadmin->exams }}" class="form-control" name="exams" placeholder="Exams"></td>
                                      
                                    
                            </tbody>
                          </table>
                      
                        {{-- @else
                            
                      @endif --}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> 
                  Submit 
              </button>
                  
              </div>
           

                </form>
                
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    @elseif ($edit_resultadmin->section == 'Pre-Nursery' && $edit_resultadmin->classname === 'Upper pre-Nursery')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        {{-- <small class="float-right">{{ $edit_resultadmin->created_at->format('D d, M Y, H:i')}}</small> --}}
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-2 invoice-col">
                    <img style="width: 80px; height: 80px;" src="{{ asset('front/images/logo.jpg') }}" alt=""> <br>

                
                </div> 
                <div class="col-sm-8 invoice-col" style="text-align: center">
                 
                  <h1><strong>GRACE OF GOD INTERNATIONAL SCHOOL</strong></h1>
                  
                  <address>
                    
                    61 Ntiedo Udosen Street, Uyo 
                    Akwa Ibom State, Nigeria <br>
                    Website: gogischools.org
                    
                    <br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col">
                    <img style="width: 100px; height: 100px;" src="{{ URL::asset("/public/../$edit_resultadmin->images")}}" alt="">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                    <div class="col-12 table-responsive">
                      <form action="{{ url('admin/updateresultad/'.$edit_resultadmin->id) }}" method="post" enctype="multipart/form-data">
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
                            @method('PUT')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                              <th>Subjects</th>
                              <th>CA 1</th>
                             
                              <th>Exams</th>
                            </tr>
                            </thead>
                            <tbody>
      
                              
                                  <tr>
                                      <td>{{ $edit_resultadmin->subjectname }}</td>

                                      <td><input type="number" value="{{ $edit_resultadmin->test_1 }}" class="form-control" name="test_1" placeholder="Test 1"></td>
                                      <td><input type="number" value="{{ $edit_resultadmin->exams }}" class="form-control" name="exams" placeholder="Exams"></td>
                                      
                                    
                            </tbody>
                          </table>
                      
                        {{-- @else
                            
                      @endif --}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> 
                  Submit 
              </button>
                  
              </div>
           

                </form>
                
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
      @else


      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        {{-- <small class="float-right">{{ $edit_resultadmin->created_at->format('D d, M Y, H:i')}}</small> --}}
                    </h2>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-2 invoice-col">
                    <img style="width: 80px; height: 80px;" src="{{ asset('front/images/logo.jpg') }}" alt=""> <br>

                
                </div> 
                <!-- /.col -->
                <div class="col-sm-8 invoice-col" style="text-align: center">
                 
                  <h1><strong>GRACE OF GOD INTERNATIONAL SCHOOL</strong></h1>
                  
                  <address>
                    
                    61 Ntiedo Udosen Street, Uyo 
                    Akwa Ibom State, Nigeria <br>
                    Website: gogischools.org
                    
                    <br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col">
                    <img style="width: 100px; height: 100px;" src="{{ URL::asset("/public/../$edit_resultadmin->images")}}" alt="">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                    <div class="col-12 table-responsive">
                      <form action="{{ url('admin/updateresultad/'.$edit_resultadmin->id) }}" method="post" enctype="multipart/form-data">
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
                            @method('PUT')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                              <th>Subjects</th>
                              <th>Ca 1</th>
                              <th>Ca 2</th>
                              <!-- <th>Ca 3</th> -->
                              <th>Exams</th>
                            </tr>
                            </thead>
                            <tbody>
      
                              
                                  <tr>
                                      <td>{{ $edit_resultadmin->subjectname }}</td>

                                      <td><input type="number" value="{{ $edit_resultadmin->test_1 }}" class="form-control" name="test_1" placeholder="Test 1"></td>
                                     
                                      <td><input type="number" value="{{ $edit_resultadmin->exams }}" class="form-control" name="exams" placeholder="Exams"></td>
                                      {{-- <td><input type="hidden" name="teacher_id[]" value="{{ $edit_resultadmin->id }}" placeholder="Teacher ID"></td> --}}
                                      
                                    
                            </tbody>
                          </table>
                      
                        {{-- @else
                            
                      @endif --}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> 
                  Submit 
              </button>
                  
              </div>
           

                </form>
                
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

        
      @endif

  
    </div>
    <!-- /.row -->
















    

  </div>
  <!-- /.content-wrapper -->

  
 @include('dashboard.admin.footer')