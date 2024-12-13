<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/home') }}" class="brand-link">
      <img src="{{ asset('front/images/logo.jpg') }}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light"><br>GOGIS  SCHOOLS </span>
    </a>
    
      <?php
        use App\Models\Classname;
        use App\Models\Club1;
          $view_clesses = Classname::all();
          $view_clubs = Club1::all();
      ?>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('front/images/logo.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('admin/profile') }}" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/profile') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Classes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('admin/addclass') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Class</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/viewclassestables') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Classes</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>


          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Markets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('admin/addmarkets') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Markets</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/viewmarkets') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Markets</p>
                  </a>
                </li>

              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Weekly Activities
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('admin/addativityofweek') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Activities</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/viewpupilsweek') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Pupils of the Week</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ url('admin/viewteacherweek') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Teacher of the Week</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/viewparentweek') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Parent of the Week</p>
                  </a>
                </li>

                
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Parents
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('admin/addparent') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Parents</p>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a href="{{ url('admin/viewparents/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Parents</p>
                  </a>
                </li>
                
               
              </li>
            </ul>
          </li>


         


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Assets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('admin/addgallery') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Gallery</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/viewgallery') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Galleries</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ url('admin/addfacility') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Facility</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ url('admin/viewfacility') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Facilities</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ url('admin/addmainslider') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Main Slider</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ url('admin/viewmainslider') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Main Slider</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Students
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/adminprogress') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student in Progress</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/rejectedstudent') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Students</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ url('admin/suspendstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suspeneded Students</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ url('admin/admittedstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admitted Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/allstudents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Classes Manage
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Classes
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classrooms/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach
                  
                 
                </ul>
              </li>
              
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                     Clubs Section
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/addclubs1') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Club</p>
                    </a>

                  </li>

                  <li class="nav-item">
                    <a href="{{ url('admin/addclubs') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Student to Club</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/viewclubs') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Clubs</p>
                    </a>
                  </li>


                  @foreach ($view_clubs as $view_club)
                  <li class="nav-item">
                    <a href="{{ url('admin/studentclubs/'.$view_club->clubname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_club->clubname }} Clubs</p>
                    </a>
                  </li>
                  @endforeach
                  
                </ul>
              </li>
              
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                     Clubs
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                
                <ul class="nav nav-treeview">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Centers Club
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('admin/uyoclubstudents') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>All Uyo Club students</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('admin/abujaclubstudents') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>All Abuja Club students</p>

                        </a>
                      </li>

                    </ul>
                  </li>

                  {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        NID in Hardware
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('admin/addnidhardcourses100') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Hardware Courses 100L</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('admin/addnidhardcourses200') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Hardware Courses 200L</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{ url('admin/viewardwarecourses') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> Hardware Courses </p>
                        </a>
                      </li>
                    </ul>
                  </li> --}}
{{-- 
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        NID Bus Manag
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('admin/addnidmanagecourses100') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Bus Manag Courses 100L</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('admin/addnidmanagecourses200') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Bus Manag Courses 200L</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{ url('admin/viewnidmanagecourses') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Bus Manag Courses</p>
                        </a>
                      </li>
                    </ul>
                  </li> --}}
                  
                </ul>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Subjects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/addpresubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Pre-Nursery Subject</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/viewprenurserysubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Pre-Nursery Subject</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/addsubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Nursery. Subject</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{ url('admin/viewnurserysubjects') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Nursery Subjects</p>
                </a>
              </li>

              {{-- <li class="nav-item">
                <a href="{{ url('admin/preschoolsubjects') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Pre-Nursery Sub</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{ url('admin/addprimarysub') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Primary Sub</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/viewsubject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Prim Sub</p>
                </a>
              </li>


             

              <li class="nav-item">
                <a href="{{ url('admin/allsubjects') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Subject</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Session
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/addsession') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Session</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/viewsession') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Session</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Teachers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/viewteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/approveteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Approve Teachers </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/suspendedteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Suspended Teachers </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/sackedteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Sacked Teachers </p>
                </a>
              </li>

              <!-- <li class="nav-item">
                <a href="{{ url('admin/queriedteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Queried Teachers </p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="{{ url('admin/queriedteachersreply') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Query Replied </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/allteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Teachers </p>
                </a>
              </li> -->
            
              <!-- <li class="nav-item">
                <a href="{{ url('admin/uyoteachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uyo Teachers </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/abujateachers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Abuja Teachers </p>
                </a>
              </li> -->
              
            </ul>

          </li>

          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Payments 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/addpayment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Payment</p>
                </a>
              </li>

              @foreach ($view_clesses as $view_clesse)
              <li class="nav-item">
                <a href="{{ url('admin/viewclasspayment/'.$view_clesse->classname) }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View {{ $view_clesse->classname }} Payment</p>
                </a>
              </li>
              @endforeach
             
              <li class="nav-item">
                <a href="{{ url('admin/viewallpayments') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Payment</p>
                </a>
              </li>
            </ul>
          </li>
          
           -->
          
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Questions 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/setsubjectquestions') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Questions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/questionbyadmin') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Myadmin  Questions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/uyoquestions') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uyo Centre  Questions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/abujaquestions') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Abuja Centre  Questions</p>
                </a>
              </li>
            </ul>
          </li> -->


          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Transactions 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/viewuyopayment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uyo Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/abujapayment') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Abuja Payment</p>
                </a>
              </li>

             
            </ul>
          </li>

 -->

          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Student Reg. Courses 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/certregcourses') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cert. Data Processing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/certregcourssd1') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diploma Data Processing</p>
                </a>
              </li>

            </ul>
          </li> --}}
          
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                End of Term Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresults/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Abuja Result Center
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresultsabuja/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                      
                    </ul>
                  </li> 

              <li class="nav-item">
                <a href="{{ url('admin/allresult') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Results</p>
                </a>
              </li>
            </ul>
          </li> -->
          
          
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Midterm Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresultsmidterm/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Abuja Result Center
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresultsabuja/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

                      
                    </ul>
                  </li> 

            </ul>
          </li> -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Approved Term Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classresults/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

              {{-- <li class="nav-item">
                <a href="{{ url('admin/allresult') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Results</p>
                </a>
              </li> --}}
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Disable Term Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach ($view_clesses as $view_clesse)
                  <li class="nav-item">
                    <a href="{{ url('admin/classapprovesresults/'.$view_clesse->classname) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $view_clesse->classname }}</p>
                    </a>
                  </li>
                  @endforeach

              {{-- <li class="nav-item">
                <a href="{{ url('admin/allresult') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Results</p>
                </a>
              </li> --}}
            </ul>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Administrations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ url('admin/addblog') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Press Releasse</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/viewblog') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Press Releasse</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/addtestimony') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimony</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/viewtestimony') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Testimony</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/addevent') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/viewevents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Event</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/addteam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/viewteam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Team</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Contact Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
                <!-- <li class="nav-item">
                  <a href="{{ url('admin/viewbookings') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Bookings</p>
                  </a>
                </li> -->
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/viewcontact') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact</p>
                </a>
              </li>
            </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Roles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               
                <li class="nav-item">
                  <a href="{{ url('admin/viewroles') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Role</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>


         


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Logout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
