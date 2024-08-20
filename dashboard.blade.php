@section('style')
@stop
<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- MESSAGE -->
            @if($message = Session::get('error'))
            <div class="alert alert-danger alert-block" style="margin: 1.5rem 0rem 1.5rem;">
                {{$message}}
            </div>
            @endif
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block" style="margin: 1.5rem 0rem 1.5rem;">
                {{$message}}
            </div>
            @endif
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            @php
            $today = date("Y-m-d");
            @endphp
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.user.index') }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-danger text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-users fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($total_users) }}</h2>
                                        <h5 class="fw-normal mb-0">Total Users</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.user.index') }}?limit=10&date={{ $today }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-secondary text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-users fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($today_total_users) }}</h2>
                                        <h5 class="fw-normal mb-0">Today Total Users</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.user.index') }}?limit=10&package=true&date={{ $today }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-success text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-users fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($today_active_users) }}</h2>
                                        <h5 class="fw-normal mb-0">Today Active Users</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.user.index') }}?limit=10&package=false&date={{ $today }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-users fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($today_deactive_users) }}</h2>
                                        <h5 class="fw-normal mb-0">Today Deactive Users</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.user.index') }}?limit=10&package=true">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-info text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-users fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($buy_package_members) }}</h2>
                                        <h5 class="fw-normal mb-0">Active Users</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.user.index') }}?limit=10&package=false">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-warning text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-users fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($not_buy_package_members) }}</h2>
                                        <h5 class="fw-normal mb-0">Deactive Users</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.user.index') }}?limit=10&status=true">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-cyan text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-users fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($active_members->count()) }}</h2>
                                        <h5 class="fw-normal mb-0">Unblocked Users</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.user.index') }}?limit=10&status=false">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-orange  text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-users fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($deactive_members->count()) }}</h2>
                                        <h5 class="fw-normal mb-0">Blocked Users</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.order') }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-indigo  text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-cart fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($orders) }}</h2>
                                        <h5 class="fw-normal mb-0">Total Order</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.product.index') }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-blue  text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="zmdi zmdi-parking fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($products) }}</h2>
                                        <h5 class="fw-normal mb-0">Products</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.kit.index') }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-danger text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-inbox fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($kits) }}</h2>
                                        <h5 class="fw-normal mb-0">Packages</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.blog.index') }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-secondary  text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-dice fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($blogs) }}</h2>
                                        <h5 class="fw-normal mb-0">Blogs</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.news.index') }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-success text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-license fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($news) }}</h2>
                                        <h5 class="fw-normal mb-0">News</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.enquery.index') }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-license fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($enquery) }}</h2>
                                        <h5 class="fw-normal mb-0">Enquery</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-12 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.support.index') }}">
                            <div class="row">
                                <div class="col-4">
                                    <div class="circle-icon bg-info text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ url('assets/images/svgs/circle.svg') }}" alt="img" class="card-img-absolute">
                                        <i class="lnr lnr-bubble fs-30  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4" style="color: #282f53;">
                                        <h2 class="mb-2 fw-normal mt-2">{{ number_format($support) }}</h2>
                                        <h5 class="fw-normal mb-0">Help Query</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Member Analytics</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="MemberChart" width="100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div> <!-- COL END -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Income Analytics</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <canvas id="IncomeChart" width="100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div> <!-- COL END -->
            </div> <!-- ROW-2 END -->
        </div> <!-- CONTAINER END -->
    </div>
</div>
<!--app-content close-->
@section('script')
<!-- External Scripts -->

<script src="{{ url('assets/plugins/chart/Chart.bundle.js') }}"></script>

<script src="{{ url('assets/js/charts.js') }}"></script>
<script>
    var chart_users = "{{ $chart_users }}"
    var chart_income = "{{ $chart_income }}"
    var income_ctx = document.getElementById("IncomeChart").getContext("2d");
    var IncomeChart = new Chart(income_ctx, {
        type: "line",
        data: {
            labels: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
            datasets: [{
                label: "Income",
                data: chart_income.split(','),
                backgroundColor: "rgba(9,173,149,0.6)",
            }],
        },
    });
    var member_ctx = document.getElementById("MemberChart").getContext("2d");
    var MemberChart = new Chart(member_ctx, {
        type: "line",
        data: {
            labels: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
            datasets: [{
                label: "Member",
                data: chart_users.split(','),
                backgroundColor: "rgba(108,95,252,0.6)",
            }],
        },
    });
</script>
@stop