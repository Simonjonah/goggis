@include('dashboard.admin.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.admin.sidebar')

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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="color: red">Pupils</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Classes</th>
                      <th>Subjects</th>
                      <th>Lastname</th>
                      <th>Term</th>
                      <th>Images</th>
                      <th>View</th>
                      <th>Status</th>
                      <th>Actions</th>
                      <th>Admit No</th>
                      <th>Form No</th>
                      
                      <th>Add Result</th>
                      <th>Date</th>
  
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($view_student_abujas as $view_student_abuja)
                      
                    <tr>
                      <td>{{ $view_student_abuja->classname }}</td>
                      <td>{{ $view_student_abuja->middlename }}</td>
                      <td>{{ $view_student_abuja->fname }}</td>
                      <td>{{ $view_student_abuja->term }}</td>

                      <td><img style="width: 100%; height: 60px;" src="{{ URL::asset("/public/../$view_student_abuja->images")}}" alt=""></td>
                      <td><a href="{{ url('admin/viewstudents/'.$view_student_abuja->ref_no1) }}"
                          class='btn btn-default'>
                          <i class="far fa-eye"></i>
                      </a></td>
                      <td>@if ($view_student_abuja->status == null)
                        <span class="badge badge-secondary"> In progress</span>
                      @elseif($view_student_abuja->status == 'suspend')
                      <span class="badge badge-warning"> Suspended</span>
                      @elseif($view_student_abuja->status == 'reject')
                      <span class="badge badge-danger"> Rejected</span>
                      @elseif($view_student_abuja->status == 'approved')
                      <span class="badge badge-info"> Approved</span>
                      @elseif($view_student_abuja->status == 'admitted')
                      
                      <span class="badge badge-success">Admitted</span>
                      @endif</td>
                      
                    <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                     Print
                    </button></td>

                    <td>{{ $view_student_abuja->regnumber }}</td>
                    <td>{{ $view_student_abuja->ref_no1 }}</td>
    
                    <th> <a href="{{ url('admin/studentsubjects/'.$view_student_abuja->ref_no1) }}" class="btn btn-sm btn-primary">
                      Add Results
                    </a></th>
                  
                  
                  <td>{{ $view_student_abuja->created_at->format('D d, M Y, H:i')}}</td>

                    </tr>
              
              @endforeach
                
                
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Classes</th>
                      <th>Subjects</th>
                      <th>Lastname</th>
                      <th>Term</th>
                      <th>Images</th>
                      <th>View</th>
                      <th>Status</th>
                      <th>Actions</th>
                      <th>Admit No</th>
                      <th>Form No</th>
                      
                      <th>Add Result</th>
                      <th>Date</th>
  
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2024 <a href="#">GOGIS</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="{{  asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{  asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{  asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{  asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{  asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{  asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{  asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{  asset('assets/dist/js/adminlte.min.js?v=3.2.0')}}"></script>

<script src="{{  asset('assets/dist/js/demo.js')}}"></script>

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

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Print Requested Classes</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/admin/printclasses') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="">Select Classes</label>
             <select class="form-control" name="classname" id="">
              @foreach ($view_classes as $view_classe)
                <option value="{{ $view_classe->classname }}">{{ $view_classe->classname }}</option>
              @endforeach
             </select>
          </div>

          <div class="form-group">
            <label for="">Select Sections</label>

            <select class="form-control" name="centername" id="">
              <option value="Pre-Nursery">Pre-Nursery</option>
              <option value="Nursery">Nursery</option>
              <option value="Primary">Primary</option>
            </select>
         </div>
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Print</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



</body>
</html>
