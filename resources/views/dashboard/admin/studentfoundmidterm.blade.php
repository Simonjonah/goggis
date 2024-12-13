@include('dashboard.admin.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.admin.sidebar')

  @foreach ($getyour_results as $getyour_result)
      @if ($getyour_result->centername == 'Uyo')
          
      @else
          
      @endif
  @endforeach

@php
use App\Models\Academicsession;
use App\Models\Classname;
$sessions = Academicsession::all();
$view_classes = Classname::all();
@endphp
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if ($getyour_result->section == 'Early Years Foundation Stage (EYFS)')
       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Your Students Result</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Admission No</th>
                    <th>Psycomotor</th>
                    <th>Approved</th>
                    
                    <th>Comments</th>
                   
                    <th>Edit</th>
                  <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
  
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                    @endif
                    @foreach ($getyour_results as $getyour_result)
                      @if ($getyour_result->centername == 'Uyo')
                      <tr>
                        <td>{{ $getyour_result->user['surname'] }}
                          <small>{{ $getyour_result->section }} {{ $getyour_result->classname }} {{ $getyour_result->entrylevel }}</small>
                         
                        </td>

                        <td>{{ $getyour_result->user['fname'] }}
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                            Search Student
                          </button>
                        </td>
                        <td>{{ $getyour_result->user['middlename'] }} <br> Center: {{ $getyour_result->centername }}</td>
                        <td>{{ $getyour_result->regnumber }}
                        <small>
                          @if ($getyour_result->status == null)
                          <span class="badge badge-danger">Review</span>
                          @else
                          <span class="badge badge-success">Approved</span>
                          @endif
                          </small>
                        </td>
                        <td><a href="{{ url('admin/addpsychomotoradmin/'.$getyour_result->id) }}"
                          class='btn btn-default'>
                          Add Psycomotor
                           <i class="far fa-eye"></i></td>

                           <td><a href="{{ url('admin/approvedresultsad/'.$getyour_result->id) }}"
                            class='btn btn-primary'>
                            Approved
                             <i class="far fa-eye"></i></td>
  
                      <td><textarea name="comment" id="" cols="30" rows="10">{{ $getyour_result->comment }}</textarea></td>
                         
                      
                     <td><a href="{{ url('admin/editresultadmin/'.$getyour_result->id) }}"
                            class='btn btn-info'>
                             <i class="far fa-edit"></i>
                         </a></td>
                        
                       <td><a href="{{ url('admin/deletresult/'.$getyour_result->id) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                    

                      </tr>
                      @else
                        
                      @endif
                      
                     
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Admission No</th>
                    <th>Psycomotor</th>
                    <th>Approved</th>
                    
                    <th>Comments</th>
                   
                    <th>Edit</th>
                    <th>Delete</th>
                  
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    @elseif ($getyour_result->section == 'Primary')
       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Your Students Result</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Admission No</th>
                    <th>Psycomotor</th>
                    <th>Approved</th>
                    <th>CA 1</th>
                    <th>CA 2</th>
                    
                    <th>Exams</th>
                    <th>Total</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                    <th>Edit</th>
                    {{-- <th>View</th> --}}

                    <th>Delete</th>
              
                    {{-- <th>Date</th> --}}
                  </tr>
                  </thead>
                  <tbody>
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
  
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                    @endif
                    @foreach ($getyour_results as $getyour_result)
                      @if ($getyour_result->centername == 'Uyo')
                      <tr>
                        <td>{{ $getyour_result->user['surname'] }}
                          <small>{{ $getyour_result->section }} <b style="color: red;">{{ $getyour_result->classname }} </b>{{ $getyour_result->entrylevel }}</small>
                         
                        </td>

                        <td>{{ $getyour_result->user['fname'] }}
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                            Search Student
                          </button>
                        </td>
                        <td>{{ $getyour_result->user['middlename'] }}</td>
                        <td>{{ $getyour_result->regnumber }}
                        <small>
                          @if ($getyour_result->status == null)
                          <span class="badge badge-danger">Review</span>
                          @else
                          <span class="badge badge-success">Approved</span>
                          @endif
                          </small>
                        </td>
                        <td><a href="{{ url('admin/addpsychomotoradmin/'.$getyour_result->id) }}"
                          class='btn btn-default'>
                          Add Psycomotor
                           <i class="far fa-eye"></i></td>

                           <td><a href="{{ url('admin/approvedresultsad/'.$getyour_result->id) }}"
                            class='btn btn-primary'>
                            Approved
                             <i class="far fa-eye"></i></td>
  

                      <td>{{ $getyour_result->test_1 }}</td>
                      <td>{{ $getyour_result->test_2 }}</td>

                      <td>{{ $getyour_result->exams }}</td>
                      <td>{{ $getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams }}</td>
                      <td>@if ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 69)
                        <p>A</p>
                       
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 59)
                        <p>B</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 49)
                        <p>C</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 44)
                        <p>D</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 40)
                        <p>E</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 39)
                        <p>F</p>
                        @else
                        <p>F</p>
                      @endif</td>

                      <td>@if ($getyour_result->test + $getyour_result->exams > 69)
                        <p>An Excellent Performance </p>
                       
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 59)
                        <p>A good Performance</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 49)
                        <p>A fair performance</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 44)
                        <p>A Poor performance.</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 40)
                        <p>A Poor performance.</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 39)
                        <p>A Poor performance.</p>
                        @else
                        <p>A Poor performance.</p>
                      @endif</td>
                         
                      
                     <td><a href="{{ url('admin/editresultadmin/'.$getyour_result->id) }}"
                            class='btn btn-info'>
                             <i class="far fa-edit"></i>
                         </a></td>
                        
                       <td><a href="{{ url('admin/deletresult/'.$getyour_result->id) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                    

                      </tr>
                      @else
                        
                      @endif
                      
                     
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Surname</th>
                      <th>Firstname</th>
                      <th>Middlename</th>
                      <th>Admission No</th>
                      <th>Psycomotor</th>

                      <th>Approved</th>
                      <th>CA 1</th>
                      <th>CA 2</th>
                      
                      <th>Exams</th>
                      <th>Total</th>
                      <th>Grade</th>
                      <th>Remarks</th>
                      <th>Edit</th>
                      {{-- <th>View</th> --}}
                      <th>Delete</th>
                
                      {{-- <th>Date</th> --}}
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    @else


     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Your Students Result</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Admission No</th>
                    <th>Psycomotor</th>
                    <th>Approved</th>
                    <th>CA 1</th>
                    <th>CA 2</th>
                    <!--  -->
                    <th>Exams</th>
                    <th>Total</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                    <th>Edit</th>
                    {{-- <th>View</th> --}}

                    <th>Delete</th>
              
                    {{-- <th>Date</th> --}}
                  </tr>
                  </thead>
                  <tbody>
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
  
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                    @endif
                    @foreach ($getyour_results as $getyour_result)
                      @if ($getyour_result->centername == 'Uyo')
                      <tr>
                        <td>{{ $getyour_result->user['surname'] }}
                          <small>{{ $getyour_result->section }} {{ $getyour_result->classname }}</small>
                         
                        </td>

                        <td>{{ $getyour_result->user['fname'] }}
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                            Search Student
                          </button>
                        </td>
                        <td>{{ $getyour_result->user['middlename'] }}</td>
                        <td>{{ $getyour_result->regnumber }} {{ $getyour_result->type }} 
                        <small>
                          @if ($getyour_result->status == null)
                          <span class="badge badge-danger">Review</span>
                          @else
                          <span class="badge badge-success">Approved</span>
                          @endif
                          </small>
                        </td>
                        <td><a href="{{ url('admin/addpsychomotoradmin/'.$getyour_result->id) }}"
                          class='btn btn-default'>
                          Add Psycomotor
                           <i class="far fa-eye"></i></td>

                           <td><a href="{{ url('admin/approvedresultsad/'.$getyour_result->id) }}"
                            class='btn btn-primary'>
                            Approved
                             <i class="far fa-eye"></i></td>
  

                      <td>{{ $getyour_result->test_1 }}</td>
                      <td>{{ $getyour_result->test_2 }}</td>
                      <!-- <td>{{ $getyour_result->test_3 }}</td> -->
                      <td>{{ $getyour_result->exams }}</td>
                      <td>{{ $getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams }}</td>
                      <td>@if ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 69)
                        <p>A</p>
                       
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 59)
                        <p>B</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 49)
                        <p>C</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 44)
                        <p>D</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 40)
                        <p>E</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 39)
                        <p>F</p>
                        @else
                        <p>F</p>
                      @endif</td>

                      <td>@if ($getyour_result->test + $getyour_result->exams > 69)
                        <p>An Excellent Performance </p>
                       
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 59)
                        <p>A good Performance</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 49)
                        <p>A fair performance</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 44)
                        <p>A Poor performance.</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 40)
                        <p>A Poor performance.</p>
                        @elseif ($getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams > 39)
                        <p>A Poor performance.</p>
                        @else
                        <p>A Poor performance.</p>
                      @endif</td>
                         
                      
                     <td><a href="{{ url('admin/editresultadmin/'.$getyour_result->id) }}"
                            class='btn btn-info'>
                             <i class="far fa-edit"></i>
                         </a></td>
                        
                       <td><a href="{{ url('admin/deletresult/'.$getyour_result->id) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                    

                      </tr>
                      @else
                        
                      @endif
                      
                     
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Surname</th>
                      <th>Firstname</th>
                      <th>Middlename</th>
                      <th>Admission No</th>
                      <th>Psycomotor</th>

                      <th>Approved</th>
                      <th>CA 1</th>
                      <th>CA 2</th>
                      <!--  -->
                      <th>Exams</th>
                      <th>Total</th>
                      <th>Grade</th>
                      <th>Remarks</th>
                      <th>Edit</th>
                      {{-- <th>View</th> --}}
                      <th>Delete</th>
                
                      {{-- <th>Date</th> --}}
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    @endif
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2023 <a href="https://brixtoonschool.com.ng">Brixtonn</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="../../assets/plugins/jquery/jquery.min.js"></script>

<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../../assets/dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../assets/dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Search for Student Results</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('admin/searchforstudentresultmidterm') }}" method="post">
          @csrf
       <div class="form-group">
            <label for="">Reg. Number</label>
            <select name="regnumber"  class="form-control" id="">
              @foreach ($getyour_results as $getyour_result)
                <option value="{{ $getyour_result->regnumber }}">{{ $getyour_result->fname }} {{ $getyour_result->surname }} {{ $getyour_result->section }}  {{ $getyour_result->regnumber }}</option>
              @endforeach
            </select>
              
          </div>

          <div class="form-group">
            <label for="">Study Center</label>
            <select name="centername"  class="form-control" id="">
              @foreach ($getyour_results as $getyour_result)
                <option value="{{ $getyour_result->centername }}">{{ $getyour_result->centername }} </option>
              @endforeach
            </select>
              
          </div>

          <div class="form-group">
            <label for="">Term</label>
            <select name="entrylevel"  class="form-control" id="">
                <option value="Pioneer Term">Pioneer Term</option>
                <option value="Penultimate Term">Penultimate Term</option>
                <option value="Premium Term">Premium Term</option>
            </select>
              
          </div>

          <div class="form-group">
            <label for="">Session</label>
            <select name="academic_session"  class="form-control" id="">
              @foreach ($sessions as $session)
                <option value="{{ $session->academic_session }}">{{ $session->academic_session }}</option>
              @endforeach
            </select>
              
          </div>
          <div class="form-group">
            <label for="">Class</label>
            <select name="classname"  class="form-control" id="">
              @foreach ($view_classes as $view_classe)
                <option value="{{ $view_classe->classname }}">{{ $view_classe->classname }}</option>
              @endforeach
            </select>
              
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Section</label>
            <select name="section" class="form-control" required>
            <option value="Early Years Foundation Stage (EYFS)">Early Years (EYFS)</option>
            <option value="Primary">Primary</option>
            <option value="High School">High School</option>
            </select>
          </div>

          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
        </div>
        </form>
        
      </div>
     
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->