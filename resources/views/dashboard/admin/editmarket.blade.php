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
                <form action="{{ url('admin/updatemarkets/'.$edit_markets->ref_no) }}" method="post" enctype="multipart/form-data">
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

              @method('PUT')
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" @error('title')
                        @enderror value="{{ $edit_markets->title }}" name="title" placeholder="Title">
                      </div>
                    </div>
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" @error('phone')
                        @enderror value="{{ $edit_markets->phone }}" name="phone" placeholder="Phone">
                      </div>
                    </div>
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 
                   

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" @error('email')
                        @enderror value="{{ $edit_markets->email }}" name="email" placeholder="Email">
                      </div>
                    </div>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Facebook Link</label>
                        <input type="text" class="form-control" @error('facebook')
                        @enderror value="{{ $edit_markets->facebook }}" name="facebook" placeholder="facebook">
                      </div>
                    </div>
                    @error('facebook')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Twitter Link</label>
                        <input type="text" class="form-control" @error('twitter')
                        @enderror value="{{ $edit_markets->twitter }}" name="twitter" placeholder="twitter">
                      </div>
                    </div>
                    @error('twitter')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                   

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Linkedin Link</label>
                        <input type="text" class="form-control" @error('linkedin')
                        @enderror value="{{ $edit_markets->linkedin }}" name="linkedin" placeholder="linkedin">
                      </div>
                    </div>
                    @error('linkedin')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" @error('instagram')
                        @enderror value="{{ $edit_markets->instagram }}" name="instagram" placeholder="instagram">
                      </div>
                    </div>
                    @error('instagram')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror


                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Whatspp Link</label>
                        <input type="text" class="form-control" @error('whatsapp')
                        @enderror value="{{ $edit_markets->whatsapp }}" name="whatsapp" placeholder="whatsapp">
                      </div>
                    </div>
                    @error('whatsapp')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" @error('address')
                        @enderror value="{{ $edit_markets->address }}" name="address" placeholder="Address">
                      </div>
                    </div>
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="col-sm-6">
                      <div class="form-group">
                      <td><img style="width: 30%; height: 70px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$edit_markets->images1")}}"
                            alt="User profile picture"></td>
                        
                        <input type="file" @error('images1')
                        @enderror value="{{ old('images1') }}" class="form-control" name="images1">
                      </div>
                  
                    </div>
                    @error('images1')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 

                    
                    <!-- <div class="col-sm-6">
                      <div class="form-group">
                      <td><img style="width: 30%; height: 70px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$edit_markets->images2")}}"
                            alt="User profile picture"></td>
                        
                        <input type="file" @error('images2')
                        @enderror value="{{ old('images2') }}" class="form-control" name="images2">
                      </div>
                  
                    </div>
                    @error('images2')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 
                     
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                      <td><img style="width: 30%; height: 70px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$edit_markets->images3")}}"
                            alt="User profile picture"></td>
                        
                        <input type="file" @error('images3')
                        @enderror value="{{ old('images3') }}" class="form-control" name="images3">
                      </div>
                  
                    </div>
                    @error('images3')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 

                    <div class="col-sm-6">
                      <div class="form-group">
                      <td><img style="width: 30%; height: 70px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$edit_markets->images4")}}"
                            alt="User profile picture"></td>
                        
                        <input type="file" @error('images4')
                        @enderror value="{{ old('images4') }}" class="form-control" name="images4">
                      </div>
                  
                    </div>
                    @error('images4')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 

                    <div class="col-sm-6">
                      <div class="form-group">
                      <td><img style="width: 30%; height: 70px;" class="profile-user-img img-fluid"
                            src="{{ URL::asset("/public/../$edit_markets->images5")}}"
                            alt="User profile picture"></td>
                        
                        <input type="file" @error('images5')
                        @enderror value="{{ old('images5') }}" class="form-control" name="images5">
                      </div>
                  
                    </div>
                    @error('images5')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror 
                      -->
                     
                    <div class="col-sm-6">
                       <textarea class="textarea" name="messages" class="form-control" @error('messages') is-invalid @enderror" placeholder="Place some text here"
                      value="{{ old('messages') }}"    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! $edit_markets->messages !!}</textarea>
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

  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
  
      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function() {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function() {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function() {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
  
      $('.toastrDefaultSuccess').click(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function() {
        toastr.error('Dear {{ Auth::guard('admin')->user()->name }} you do not have upto N5000 to withraw')
      });
      $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
  
      $('.toastsDefaultDefault').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultTopLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'topLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomRight').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomRight',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultAutohide').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          autohide: true,
          delay: 750,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultNotFixed').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          fixed: false,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultFull').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          icon: 'fas fa-envelope fa-lg',
        })
      });
      $('.toastsDefaultFullImage').click(function() {
        $(document).Toasts('create', {
          body: 'Dear {{ Auth::guard('admin')->user()->name }} your account has been suspended, please contact Whatsapp',
          title: 'Suspended',
          class: 'bg-danger', 
          subtitle: 'Subtitle',
          image: '{{ asset('/public/../'.Auth::guard('admin')->user()->images)}}',
          imageAlt: 'User Picture',
        })
      });
      $('.toastsDefaultSuccess').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultInfo').click(function() {
        $(document).Toasts('create', {
          class: 'bg-info', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
          class: 'bg-warning', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
          class: 'bg-danger', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultMaroon').click(function() {
        $(document).Toasts('create', {
          class: 'bg-maroon', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });
  
  </script>
  <script>
    window.addEventListener('showtoastr', function(event){
      toastr.remove();
      if (event.detail.type == 'info') {
        toastr.info(event.detail.message);
      }eleif(event.detail.type == 'success'){
        toastr.success(event.detail.message);
      }eleif(event.detail.type == 'error'){
        toastr.error(event.detail.message);
      }eleif(event.detail.type == 'warning'){
        toastr.warning(event.detail.message);
      }else{
        return false;
      }

    });
  </script>
    @include('dashboard.admin.footer')