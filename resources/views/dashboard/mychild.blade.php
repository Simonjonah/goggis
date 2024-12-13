@include('dashboard.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.sidebar')

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
            {{-- @foreach ($view_classess as $view_classes)
            <ol class="breadcrumb float-sm-right">
              Class
              
               
                  <a href="{{ url('web/classes/'.$view_classes->classname) }}">{{ $view_classes->classname }}</a>

            </ol>
            @endforeach --}}
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
                <h3 class="card-title" style="color: red">Your {{ Auth::guard('web')->user()->centername }} Center</h3>
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
                      <th>Centername</th>
                      <th>Images</th>
                      <th>View</th>
                      <th>Status</th>
  
                      <th>Admit No</th>
                      {{-- <th>Form No</th> --}}
                      {{-- <th>Edit</th> --}}
                      <th>Add Another Child</th>
       
                     
  
                      <th>Date</th>
  
                    </tr>
                  </thead>
                  <tbody>
                  {{-- @if (Auth::guard('web')->user()->promotion == 'Pre-School Head') --}}
                    @foreach ($view_mychilds as $view_mychild)
                    {{-- @if ($view_mychild->centername == Auth::guard('web')->user()->centername && $view_mychild->role == null) --}}
                      <tr>
                        <td>{{ $view_mychild->classname }}</td>
                        <td>{{ $view_mychild->middlename }}</td>
                        <td>{{ $view_mychild->fname }}</td>
                        <td>{{ $view_mychild->term }}</td>
                        <td>{{ $view_mychild->section }}
                        {{-- <small>{{ $view_mychild->section }}</small> --}}
                        </td>
  
                        <td><img style="width: 100%; height: 60px;" src="{{ URL::asset("/public/../$view_mychild->images")}}" alt=""></td>
                        <td><a href="{{ url('web/viewstudentsbyparent/'.$view_mychild->ref_no1) }}"
                            class='btn btn-default'>
                            <i class="far fa-eye"></i>
                        </a></td>
                        <td>@if ($view_mychild->status == null)
                          <span class="badge badge-secondary"> In progress</span>
                        @elseif($view_mychild->status == 'suspend')
                        <span class="badge badge-warning"> Suspended</span>
                        @elseif($view_mychild->status == 'reject')
                        <span class="badge badge-danger"> Rejected</span>
                        @elseif($view_mychild->status == 'approved')
                        <span class="badge badge-info"> Approved</span>
                        @elseif($view_mychild->status == 'admitted')
                        
                        <span class="badge badge-success">Admitted</span>
                        @endif</td>
                      
                   
  
                      <td>{{ $view_mychild->regnumber }}</td>
                      
                      <th> <a href="{{ url('web/registeryourchild/'.$view_mychild->ref_no) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> 
                     
                    
                    <td>{{ $view_mychild->created_at->format('D d, M Y, H:i')}}</td>
  
                      </tr>
                      
                    
                  @endforeach
                    
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Classes</th>
                        <th>Subjects</th>
                        <th>Lastname</th>
                        <th>Term</th>
                        <th>Centername</th>
                        <th>Images</th>
                        <th>View</th>
                        <th>Status</th>
    
                        <th>Admit No</th>
                        {{-- <th>Form No</th> --}}
                        {{-- <th>Edit</th> --}}
                        <th>Add Another Child</th>
         
                       
    
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
    <strong>Copyright &copy; 2023 <a href="#">GOGGIS.com.ng</a>.</strong> All rights
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

<script src="{{  asset('assets/dist/js/weblte.min.js?v=3.2.0')}}"></script>

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




</body>
</html>
