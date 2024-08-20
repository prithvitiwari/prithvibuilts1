<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Change Password</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body p-5">
                            <form method="post" action="{{ route('admin.setting.admin') }}" class="login100-form needs-validation" novalidate="">
                                {{ csrf_field() }}

                                @if($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    {{$message}}
                                </div>
                                @endif
                                @if($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    {{$message}}
                                </div>
                                @endif
                                @if(count($errors->all()))
                                @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                                @endforeach
                                @endif
                                <div class="form-row">
                                    <div class="col-xl-3">
                                        {{Form::label('admin_email', 'Admin Email')}}
                                        <div class="form-group mb-3">
                                            {{Form::email('admin_email', @$admin->email, ['class' => 'form-control', 'placeholder'=>'Admin Email','required'=>'required'])}}
                                            <div class="invalid-feedback">Please enter admin email.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-3">
                                        {{Form::label('new_password', 'New Password')}}
                                        <div class="form-group mb-3 input-group">
                                            <input class="input100 form-control password1" type="password" name="new_password" placeholder="New Password" required>
                                            <a href="#" class="input-group-text bg-white text-muted view-password1"> <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i> </a>
                                            <div class="invalid-feedback">Please enter new password.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-3">
                                        {{Form::label('confirm_password', 'Confirm Password')}}
                                        <div class="form-group mb-3 input-group">
                                            <input class="input100 form-control password2" type="password" name="confirm_password" placeholder="Confirm Password" required>
                                            <a href="#" class="input-group-text bg-white text-muted view-password2"> <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i> </a>
                                            <div class="invalid-feedback">Please enter confirm password.</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-5" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ROW CLOSED -->
    </div> <!-- CONTAINER CLOSED -->
</div>
</div>
@section('script')
<script>
    $(".view-password1").click(function() {
        let input1 = $('.password1').attr('type');
        if (input1 == 'password') {
            $('.password1').attr('type', 'text');
        } else {
            $('.password1').attr('type', 'password');
        }
    });
    
    $(".view-password2").click(function() {
        let input1 = $('.password2').attr('type');
        if (input1 == 'password') {
            $('.password2').attr('type', 'text');
        } else {
            $('.password2').attr('type', 'password');
        }
    });
</script>
@stop