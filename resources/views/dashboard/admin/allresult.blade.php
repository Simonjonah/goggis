@include('dashboard.admin.header')
@include('dashboard.admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subjects </h1>
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

    @if ($addpsychomotoradmin->section == 'Pre-Nursery')
      
    
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Terminal Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                {{-- <p class="text-center">
                  <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p> --}}

                <div class="table-responsive">
                  {{-- <p class="lead">Behaviour</p> --}}
    
                  <form action="{{ url('web/createpsychomotoro1') }}" method="post">
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
                    
                      <table class="table table-bordered">
                        <tr>
                          <th style="width:50%">BEHAVIOUR/SKILLS</th>
                          <th style="width:50%">A</th>
                          <th style="width:50%">B</th>
                          <th style="width:50%">C</th>
                          <th style="width:50%">D</th>
                          <th style="width:50%">E</th>
                        </tr>
                        <td><input type="hidden" name="teacher_id" value="{{ $addpsychomotoradmin->id }}" id=""></td>
                        <td><input type="hidden" name="user_id" value="{{ $addpsychomotoradmin->id }}" id=""></td>
                        <td><input type="hidden" name="term" value="{{ $addpsychomotoradmin->term }}" id=""></td>
                        <td><input type="hidden" name="academic_session" value="{{ $addpsychomotoradmin->academic_session }}" id=""></td>
                        <td><input type="hidden" name="classname" value="{{ $addpsychomotoradmin->classname }}" id=""></td>
                        <td><input type="hidden" name="regnumber" value="{{ $addpsychomotoradmin->regnumber }}" id=""></td>
                        <td><input type="hidden" name="section" value="{{ $addpsychomotoradmin->section }}" id=""></td>
    
    
                        {{--  --}}
    
                        {{-- --}}
                        {{--  --}}
                        <tr>
                          <th>Neatness</th>
                    
                          <td><input type="checkbox" value="Yes" name="neat1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Politeness</th>
                  
                          <td><input type="checkbox" value="Yes" name="polite1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite5" id=""></td>
                          
                        </tr>

                        <tr>
                          <th>Attendance</th>
                          <td><input type="checkbox" name="punt1" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt3" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt4" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt5" value="Yes" id=""></td>
                          
                        </tr>


                        <tr>
                          <th>Perseverance</th>
                          <td><input type="checkbox" value="Yes" name="mentalalert1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert5" id=""></td>
                        </tr> 


                        <tr>
                          <th>Self Control</th>
                          <td><input type="checkbox" value="Yes" name="respect1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect5" id=""></td>
                        </tr>

    
                        <tr>
                          <th>Obedience</th>
                          <td><input type="checkbox" value="Yes" name="honesty1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty5" id=""></td>
                        </tr>


                        <tr>
                          <th>Initiative</th>
                  
                          <td><input type="checkbox" value="Yes" name="relationship1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Responsibility</th>
                      
                          <td><input type="checkbox" value="Yes" name="williness1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Self Reliance</th>
                          
                          <td><input type="checkbox" value="Yes" name="teamspirit1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit5" id=""></td>
                          
                        </tr>
                      </table>
                      <div class="form-group">
                          <textarea class="form-control" name="headteacher_comment" id="" cols="20" rows="5" placeholder="Teacher's Comment"></textarea>
                      </div>

                      <div class="form-group">
                        <input class="form-control" name="nextterm"  placeholder="Next Term Begin"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="">Times School Opened</label>
                      <input class="form-control" name="schoolopen"  placeholder="Times School Opened">
                  </div>
                  <div class="form-group">
                    <label for="">Times Present</label>
                    <input class="form-control" name="timespresent"  placeholder="Times Present">
                </div>
                <div class="form-group">
                  <label for="">Times Absent</label>
                  <input class="form-control" name="timeabsent"  placeholder="Times Present">
              </div>

               
              </div>
             
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
               
              </button>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->


    @elseif ($addpsychomotoradmin->section == 'Nursery')
          
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Terminal Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                {{-- <p class="text-center">
                  <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p> --}}

                <div class="table-responsive">
                  {{-- <p class="lead">Behaviour</p> --}}
    
                  <form action="{{ url('web/createpsychomotoro1') }}" method="post">
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
                    
                      <table class="table table-bordered">
                        <tr>
                          <th style="width:50%">BEHAVIOUR/SKILLS</th>
                          <th style="width:50%">A</th>
                          <th style="width:50%">B</th>
                          <th style="width:50%">C</th>
                          <th style="width:50%">D</th>
                          <th style="width:50%">E</th>
                        </tr>
                        <td><input type="hidden" name="teacher_id" value="{{ $addpsychomotoradmin->id }}" id=""></td>
                        <td><input type="hidden" name="user_id" value="{{ $addpsychomotoradmin->id }}" id=""></td>
                        <td><input type="hidden" name="term" value="{{ $addpsychomotoradmin->term }}" id=""></td>
                        <td><input type="hidden" name="academic_session" value="{{ $addpsychomotoradmin->academic_session }}" id=""></td>
                        <td><input type="hidden" name="classname" value="{{ $addpsychomotoradmin->classname }}" id=""></td>
                        <td><input type="hidden" name="regnumber" value="{{ $addpsychomotoradmin->regnumber }}" id=""></td>
                        <td><input type="hidden" name="section" value="{{ $addpsychomotoradmin->section }}" id=""></td>
    
    
                        {{--  --}}
    
                        {{-- --}}
                        {{--  --}}
                        <tr>
                          <th>Neatness</th>
                    
                          <td><input type="checkbox" value="Yes" name="neat1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Politeness</th>
                  
                          <td><input type="checkbox" value="Yes" name="polite1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite5" id=""></td>
                          
                        </tr>

                        <tr>
                          <th>Attendance</th>
                          <td><input type="checkbox" name="punt1" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt3" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt4" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt5" value="Yes" id=""></td>
                          
                        </tr>


                        <tr>
                          <th>Perseverance</th>
                          <td><input type="checkbox" value="Yes" name="mentalalert1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert5" id=""></td>
                        </tr> 


                        <tr>
                          <th>Self Control</th>
                          <td><input type="checkbox" value="Yes" name="respect1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect5" id=""></td>
                        </tr>

    
                        <tr>
                          <th>Obedience</th>
                          <td><input type="checkbox" value="Yes" name="honesty1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty5" id=""></td>
                        </tr>


                        <tr>
                          <th>Initiative</th>
                  
                          <td><input type="checkbox" value="Yes" name="relationship1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Responsibility</th>
                      
                          <td><input type="checkbox" value="Yes" name="williness1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Self Reliance</th>
                          
                          <td><input type="checkbox" value="Yes" name="teamspirit1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit5" id=""></td>
                          
                        </tr>
                      </table>
                      <div class="form-group">
                          <textarea class="form-control" name="headteacher_comment" id="" cols="20" rows="5" placeholder="Teacher's Comment"></textarea>
                      </div>

                      <div class="form-group">
                        <input class="form-control" name="nextterm"  placeholder="Next Term Begin"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="">Times School Opened</label>
                      <input class="form-control" name="schoolopen"  placeholder="Times School Opened">
                  </div>
                  <div class="form-group">
                    <label for="">Times Present</label>
                    <input class="form-control" name="timespresent"  placeholder="Times Present">
                </div>
                <div class="form-group">
                  <label for="">Times Absent</label>
                  <input class="form-control" name="timeabsent"  placeholder="Times Present">
              </div>

               
              </div>
             
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
               
              </button>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->


    @else
      

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Terminal Report</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                {{-- <p class="text-center">
                  <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p> --}}

                <div class="table-responsive">
                  {{-- <p class="lead">Behaviour</p> --}}
    
                  <form action="{{ url('web/createpsychomotoro1') }}" method="post">
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
                    
                      <table class="table table-bordered">
                        <tr>
                          <th style="width:50%">BEHAVIOUR/SKILLS</th>
                          <th style="width:50%">A</th>
                          <th style="width:50%">B</th>
                          <th style="width:50%">C</th>
                          <th style="width:50%">D</th>
                          <th style="width:50%">E</th>
                        </tr>
                        <td><input type="hidden" name="teacher_id" value="{{ $addpsychomotoradmin->id }}" id=""></td>
                        <td><input type="hidden" name="user_id" value="{{ $addpsychomotoradmin->id }}" id=""></td>
                        <td><input type="hidden" name="term" value="{{ $addpsychomotoradmin->term }}" id=""></td>
                        <td><input type="hidden" name="academic_session" value="{{ $addpsychomotoradmin->academic_session }}" id=""></td>
                        <td><input type="hidden" name="classname" value="{{ $addpsychomotoradmin->classname }}" id=""></td>
                        <td><input type="hidden" name="regnumber" value="{{ $addpsychomotoradmin->regnumber }}" id=""></td>
                        <td><input type="hidden" name="section" value="{{ $addpsychomotoradmin->section }}" id=""></td>
    
    
                        {{--  --}}
    
                        {{-- --}}
                        {{--  --}}
                        <tr>
                          <th>Neatness</th>
                    
                          <td><input type="checkbox" value="Yes" name="neat1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="neat5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Politeness</th>
                  
                          <td><input type="checkbox" value="Yes" name="polite1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="polite5" id=""></td>
                          
                        </tr>

                        <tr>
                          <th>Attendance</th>
                          <td><input type="checkbox" name="punt1" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt2" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt3" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt4" value="Yes" id=""></td>
                          <td><input type="checkbox" name="punt5" value="Yes" id=""></td>
                          
                        </tr>


                        <tr>
                          <th>Perseverance</th>
                          <td><input type="checkbox" value="Yes" name="mentalalert1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="mentalalert5" id=""></td>
                        </tr> 


                        <tr>
                          <th>Self Control</th>
                          <td><input type="checkbox" value="Yes" name="respect1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="respect5" id=""></td>
                        </tr>

    
                        <tr>
                          <th>Obedience</th>
                          <td><input type="checkbox" value="Yes" name="honesty1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="honesty5" id=""></td>
                        </tr>


                        <tr>
                          <th>Initiative</th>
                  
                          <td><input type="checkbox" value="Yes" name="relationship1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="relationship5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Responsibility</th>
                      
                          <td><input type="checkbox" value="Yes" name="williness1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="williness5" id=""></td>
                          
                        </tr>
                        <tr>
                          <th>Self Reliance</th>
                          
                          <td><input type="checkbox" value="Yes" name="teamspirit1" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit2" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit3" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit4" id=""></td>
                          <td><input type="checkbox" value="Yes" name="teamspirit5" id=""></td>
                          
                        </tr>
                      </table>
                      <div class="form-group">
                          <textarea class="form-control" name="headteacher_comment" id="" cols="20" rows="5" placeholder="Teacher's Comment"></textarea>
                      </div>

                      <div class="form-group">
                        <input class="form-control" name="nextterm"  placeholder="Next Term Begin"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="">Times School Opened</label>
                      <input class="form-control" name="schoolopen"  placeholder="Times School Opened">
                  </div>
                  <div class="form-group">
                    <label for="">Times Present</label>
                    <input class="form-control" name="timespresent"  placeholder="Times Present">
                </div>
                <div class="form-group">
                  <label for="">Times Absent</label>
                  <input class="form-control" name="timeabsent"  placeholder="Times Present">
              </div>

               
              </div>
             
              <button type="submit" class="btn btn-success"><i class="far fa-bell"></i> Submit
               
              </button>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
  </div>


    @endif
  







    

  </div>
  <!-- /.content-wrapper -->

  
 @include('dashboard.admin.footer')