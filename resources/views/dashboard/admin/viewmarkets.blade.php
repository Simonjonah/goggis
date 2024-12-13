
  <!-- /.navbar -->
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
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th> ID</th>

                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Photo</th>
                        <th>Photo</th>
                        <th>Photo</th>
                        <th>Photo</th>
                        <th>Address</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Linked In</th>
                        <th>Whatsapp</th>
                        <th>Instagram</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Approved</th>
                        <th>Suspend</th>

                        <th>Delete</th>
                        <th>Date</th>
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
                    </div>
                @endif
                    @foreach ($view_markets as $view_market)

                    <tr>
                        <td>{{ $view_market->ref_no }}</td>
                        <td>{{ $view_market->title }}</td>
                        <td>{{ $view_market->phone }}</td>
                        <td>{{ $view_market->email }}</td>
                        <td><img style="width: 100%; height: 100px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$view_market->images1")}}"
                            alt="User profile picture"></td>
                            <td><img style="width: 100%; height: 100px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$view_market->images2")}}"
                            alt="User profile picture"></td>

                            <td><img style="width: 100%; height: 100px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$view_market->images3")}}"
                            alt="User profile picture"></td>

                            <td><img style="width: 100%; height: 100px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$view_market->images4")}}"
                            alt="User profile picture"></td>

                            <td><img style="width: 100%; height: 100px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$view_market->images5")}}"
                            alt="User profile picture"></td>

                           
                            <td>{{ $view_market->address }}</td>
                        <td><a href="{{ $view_market->facebook }}" target="_blank" rel="noopener noreferrer">Facebook</a></td>
                        <td><a href="{{ $view_market->twitter }}" target="_blank" rel="noopener noreferrer">Twitter</a></td>
                        <td><a href="{{ $view_market->linkedin }}" target="_blank" rel="noopener noreferrer">LinkedIn</a></td>
                        <td><a href="{{ $view_market->whatsapp }}" target="_blank" rel="noopener noreferrer">Whatsapp</a></td>
                        <td><a href="{{ $view_market->instagram }}" target="_blank" rel="noopener noreferrer">Instagram</a></td>


                        <td>{!! $view_market->messages !!}</td>
                      
                       
                        
                        
                        <td>@if ($view_market->status == null)
                          <span class="badge badge-secondary"> In progress</span>
                         @elseif($view_market->status == 'suspend')
                         <span class="badge badge-warning"> Suspended</span>
                         @elseif($view_market->status == 'sacked')
                         <span class="badge badge-danger"> Sacked</span>
                         @else
                         <span class="badge badge-success">Approved</span>
                         @endif</td>

                         
                       <td><a href="{{ url('admin/viewsingmarket/'.$view_market->ref_no) }}"
                            class='btn btn-default'>
                             <i class="far fa-eye"></i>
                         </a></td>
                        <td><a href="{{ url('admin/editmarket/'.$view_market->ref_no) }}"
                         class='btn btn-info'>
                          <i class="far fa-edit"></i>
                      </a></td>
                        <th> <a href="{{ url('admin/marketapproved/'.$view_market->ref_no) }}" class="btn btn-sm btn-primary">
                          <i class="fas fa-user"></i> 
                        </a></th>

                        <th><a href="{{ url('admin/marketsuspend/'.$view_market->ref_no) }}" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                          </a></th>
                         
                         
                       <td><a href="{{ url('admin/marketdelete/'.$view_market->ref_no) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                     <td>{{ $view_market->created_at->format('D d, M Y, H:i')}}</td>
                     {{-- <td><a href="{{ url('admin/downloadcourse/'.$view_market->id) }}" class="btn btn-success"><i class="fas fa-print"></i></a></td> --}}

                      </tr>
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                  <tr>
                        <th> ID</th>

                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Photo</th>
                        <th>Photo</th>
                        <th>Photo</th>
                        <th>Photo</th>
                        <th>Address</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Linked In</th>
                        <th>Whatsapp</th>
                        <th>Instagram</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Approved</th>
                        <th>Suspend</th>

                        <th>Delete</th>
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
    <strong>Copyright &copy; 2024 <a href="#">GOGIS</a></strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>1.1.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script src="{{ asset('assets/dist/js/adminlte.min.js?v=3.2.0') }}"></script>

<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
{{-- @include('dashboard.admin.header') --}}
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
