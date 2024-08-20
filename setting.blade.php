<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Settings</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="panel panel-primary">
                            <div class="card-header tab-menu-heading px-5 pt-3">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#tab5" class="active" data-bs-toggle="tab">General</a></li>
                                        <li><a href="#tab7" data-bs-toggle="tab" class="">Root (%)</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab" class="">Level (₹)</a></li>
                                        <li><a href="#tab9" data-bs-toggle="tab" class="">Product Reward (%)</a></li>
                                        <li><a href="#tab8" data-bs-toggle="tab" class="">Withdraw Amount (₹)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body panel-body tabs-menu-body p-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <form method="post" action="{{ route('admin.setting.update') }}" files="true" class="needs-validation" novalidate="" enctype="multipart/form-data">
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
                                                <div class="col-xl-3 mb-3">
                                                    {{Form::label('site_name', 'Site Name')}}
                                                    {{Form::text('site_name', '', ['class' => 'form-control', 'placeholder'=>'Site Name','required'=>'required'])}}
                                                    <div class="invalid-feedback">Please enter site name.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Tagline</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Tagline">
                                                    <div class="invalid-feedback">Please enter tagline.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    {{Form::label('email', 'Email')}}
                                                    {{Form::email('email', '', ['class' => 'form-control', 'placeholder'=>'Email','required'=>'required'])}}
                                                    <div class="invalid-feedback">Please enter email.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    {{Form::label('mobile', 'Mobile')}}
                                                    {{Form::text('mobile', '', ['class' => 'form-control', 'placeholder'=>'Mobile'])}}
                                                    <div class="invalid-feedback">Please enter mobile.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    {{Form::label('logo', 'Logo')}}
                                                    {{Form::file('logo', ['class' => 'form-control', 'placeholder'=>'Logo'])}}
                                                    <div class="invalid-feedback">Please enter logo.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    {{Form::label('Logo', 'Logo Image')}}
                                                    <div>
                                                        @if($setting->logo)
                                                        <img src="{{ url('storage/logo',$setting->logo) }}" width="100px">
                                                        @else
                                                        N/A
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    {{Form::label('favicon', 'Favicon')}}
                                                    {{Form::file('favicon', ['class' => 'form-control', 'placeholder'=>'Favicon'])}}
                                                    <div class="invalid-feedback">Please enter favicon.</div>
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    {{Form::label('favicon', 'Favicon Image')}}
                                                    <div>
                                                        @if($setting->favicon)
                                                        <img src="{{ url('storage/favicon',$setting->favicon) }}" width="25px">
                                                        @else
                                                        N/A
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 mb-3">
                                                    {{Form::label('address', 'Address')}}
                                                    {{Form::textarea('address', '', ['class' => 'form-control', 'placeholder'=>'Address','rows'=>'3'])}}
                                                    <div class="invalid-feedback">Please enter address.</div>
                                                </div>
                                                <div class="col-xl-6 mb-3">
                                                    {{Form::label('map', 'Map')}}
                                                    {{Form::textarea('map', '', ['class' => 'form-control', 'placeholder'=>'Map','rows'=>'3'])}}
                                                    <div class="invalid-feedback">Please enter map.</div>
                                                </div>
                                                <hr>
                                                @php
                                                $social_links = json_decode($setting->social_links);
                                                @endphp
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Youtube</label>
                                                    <input type="text" name="social_links[youtube]" value="{{ @$social_links->youtube }}" class="form-control" id="validationCustom02" placeholder="Youtube">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Facebook</label>
                                                    <input type="text" name="social_links[facebook]" value="{{ @$social_links->facebook }}" class="form-control" id="validationCustom02" placeholder="Facebook">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Instagram</label>
                                                    <input type="text" name="social_links[instagram]" value="{{ @$social_links->instagram }}" class="form-control" id="validationCustom02" placeholder="Instagram">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Twitter</label>
                                                    <input type="text" name="social_links[twitter]" value="{{ @$social_links->twitter }}" class="form-control" id="validationCustom02" placeholder="Twitter">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Linkedin</label>
                                                    <input type="text" name="social_links[linkedin]" value="{{ @$social_links->linkedin }}" class="form-control" id="validationCustom02" placeholder="Linkedin">
                                                </div>
                                                <div class="col-xl-3 mb-3">
                                                    <label for="validationCustom02">Whatsap (with country code)</label>
                                                    <input type="text" name="social_links[whatsapp]" value="{{ @$social_links->whatsapp }}" class="form-control" id="validationCustom02" placeholder="Whatsapp">
                                                </div>

                                                <div class="col-xl-3 mb-3">
                                                    {{Form::label('gst_number', 'Gst Number')}}
                                                    {{Form::text('gst_number', '', ['class' => 'form-control', 'placeholder'=>'Gst Number'])}}
                                                    <div class="invalid-feedback">Please enter gst number.</div>
                                                </div>
                                                <div class="col-xl-2 mb-3">
                                                    {{Form::label('marketing_plan', 'Marketing Plan')}}
                                                    {{Form::file('marketing_plan', ['class' => 'form-control', 'accept'=>'.pdf', 'placeholder'=>'Marketing Plan'])}}
                                                    <div class="invalid-feedback">Please select marketing plan.</div>
                                                </div>
                                                <div class="col-xl-1 mb-3">
                                                    <!-- <label style="margin-bottom: 20px;"></label> -->
                                                    <div  style="margin-top: 30px;">
                                                        @if($setting->marketing_plan)
                                                        <a href="{{ $setting->marketing_plan_url }}" target="_blank">Link</a>
                                                        @else
                                                        N/A
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 mb-3">
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    {{Form::label('register_subject', 'After Register Email Subject')}}
                                                    {{Form::text('register_subject', '', ['class' => 'form-control', 'placeholder'=>'After Register Email Subject','rows'=>'3'])}}
                                                    <div class="invalid-feedback">Please enter After register email subject.</div>
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    {{Form::label('register_message', 'After Register Email Message')}}
                                                    {{Form::textarea('register_message', '', ['class' => 'form-control', 'placeholder'=>'After Register Email Message','rows'=>'3'])}}
                                                    <div class="invalid-feedback">Please enter After register email Message.</div>
                                                </div>
                                                <div class="col-xl-12 mb-3">
                                                    {{Form::label('android_app', 'Android App Url')}}
                                                    {{Form::textarea('android_app', '', ['class' => 'form-control', 'placeholder'=>'Android App Url','rows'=>'3'])}}
                                                    <div class="invalid-feedback">Please enter android app url.</div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <form method="post" action="{{ route('admin.setting.update') }}" class="needs-validation" novalidate="">
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
                                            @php
                                            $s = json_decode($setting->reward);
                                            $val = 0;
                                            @endphp
                                            <div class="form-row">
                                                <div class="col-xl-3">
                                                    @for ($i = 1; $i <= 7; $i++) @if(array_key_exists('lavel_'.$i,$s)) @php $v='lavel_' .$i; $val=$s->{$v};
                                                        @endphp
                                                        @endif
                                                        <div class="form-group mb-3">
                                                            {{Form::label('lavel', 'Lavel '.$i.' Reward')}}
                                                            {{Form::number('reward[lavel_'.$i.']', $val, ['class' => 'form-control', 'placeholder'=>'Reward Price','required'=>'required','min'=>0])}}
                                                            <div class="invalid-feedback">Please enter reward price.</div>
                                                        </div>
                                                        @endfor
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-3 mb-3">
                                                    {{Form::label('site_name', 'Site Name')}}
                                                    {{Form::text('site_name', '', ['class' => 'form-control', 'placeholder'=>'Site Name','required'=>'required'])}}
                                                    <div class="invalid-feedback">Please enter site name.</div>
                                                </div> -->
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab7">
                                        <form method="post" action="{{ route('admin.setting.update') }}" class="needs-validation" novalidate="">
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
                                            @php
                                            $s = json_decode($setting->reward);
                                            $val = 0;
                                            @endphp
                                            <div class="form-row">
                                                <div class="col-xl-3">
                                                    <div class="form-group mb-3">
                                                        {{Form::label('lavel', 'Root user %')}}
                                                        {{Form::number('rootuser',0 , ['class' => 'form-control', 'placeholder'=>'Root user %','required'=>'required','min'=>10])}}
                                                        <div class="invalid-feedback">Please enter reward price.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-3 mb-3">
                                                    {{Form::label('site_name', 'Site Name')}}
                                                    {{Form::text('site_name', '', ['class' => 'form-control', 'placeholder'=>'Site Name','required'=>'required'])}}
                                                    <div class="invalid-feedback">Please enter site name.</div>
                                                </div> -->
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab9">
                                        <form method="post" action="{{ route('admin.setting.update') }}" class="needs-validation" novalidate="">
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
                                            @php
                                            $s = json_decode($setting->product_reward);
                                            $val = 0;
                                            @endphp
                                            <div class="form-row">
                                                <div class="col-xl-3">
                                                    @for ($i = 1; $i <= 7; $i++) @if(array_key_exists('lavel_'.$i,$s)) @php $v='lavel_' .$i; $val=$s->{$v};
                                                        @endphp
                                                        @endif
                                                        <div class="form-group mb-3">
                                                            {{Form::label('lavel', 'Lavel '.$i.' Reward')}}
                                                            {{Form::number('product_reward[lavel_'.$i.']', $val, ['class' => 'form-control', 'placeholder'=>'Reward Price','required'=>'required','min'=>0])}}
                                                            <div class="invalid-feedback">Please enter reward price.</div>
                                                        </div>
                                                        @endfor
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab8">
                                        <form method="post" action="{{ route('admin.setting.update') }}" class="needs-validation" novalidate="">
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
                                            @php
                                            $dayArr = [
                                            ''=>'Select Day',
                                            'monday'=>'Monday',
                                            'tuesday'=>'Tuesday',
                                            'wednesday'=>'Wednesday',
                                            'thursday'=>'Thursday',
                                            'friday'=>'Friday',
                                            'saturday'=>'Saturday',
                                            'sunday'=>'Sunday',
                                            ];
                                            @endphp
                                            <div class="form-row">
                                                <div class="col-xl-3">
                                                    {{Form::label('withdraw_amount_day', 'Select Withdraw Day')}}
                                                    <div class="form-group mb-3">
                                                        {{ Form::select('withdraw_amount_day', $dayArr, '', ['class' => 'form-control select2 w-100','required'=>'required','style'=>'width: 100%;']) }}
                                                        <div class="invalid-feedback">Please select day.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xl-3 mb-3">
                                                    {{Form::label('site_name', 'Site Name')}}
                                                    {{Form::text('site_name', '', ['class' => 'form-control', 'placeholder'=>'Site Name','required'=>'required'])}}
                                                    <div class="invalid-feedback">Please enter site name.</div>
                                                </div> -->
                                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ROW CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
@section('script')

@stop