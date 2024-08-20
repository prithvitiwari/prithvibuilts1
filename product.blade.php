@section('style')

@stop
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Products</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </div>
            </div> <!-- PAGE-HEADER END -->
            <div class="mt-3 mb-3">
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
            </div>
            <!-- ROW-1 OPEN -->
            <div class="row row-cards">
                <div class="col-xl-12 col-lg-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card p-0">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-8 col-md-8 col-sm-8">
                                            <form method="GET">
                                                <div class="input-group d-flex w-100 float-start">
                                                    <input type="text" name="s" class="form-control border-end-0 my-2" placeholder="Search ...">
                                                    <button class="btn input-group-text bg-transparent border-start-0 text-muted my-2">
                                                        <i class="fe fe-search text-muted" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xl-7 col-lg-4 col-md-4 col-sm-4">

                                            <div class="nav item2-gl-menu float-end my-2shopping-cart">
                                                <a href="{{ route('admin.cart',$user->id) }}" class="nav-link icon text-center">
                                                    <i class="fe fe-shopping-cart"></i>
                                                    @if($user->cartcount)
                                                    <span class="badge cart-badge bg-secondary header-badge" style="margin-top:-15px;">{{ $user->cartcount }}</span>
                                                    @endif
                                                </a>
                                            </div>
                                            <!-- <ul class="nav item2-gl-menu float-end my-2">
                                                <li class="border-end"><a href="#tab-11" class="show active" data-bs-toggle="tab" title="List style"><i class="fa fa-th"></i></a></li>
                                                <li><a href="#tab-12" data-bs-toggle="tab" class="" title="Grid"><i class="fa fa-list"></i></a></li>
                                            </ul> -->
                                        </div>
                                        <!-- <div class="col-xl-3 col-lg-12"> <a href="add-product.html" class="btn btn-primary btn-block float-end my-2"><i class="fa fa-plus-square me-2"></i>New Product</a> </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-11">
                            <div class="row">
                                @foreach($lists as $list)
                                <div class="col-md-4 col-xl-3">
                                    <div class="card">
                                        <div class="product-grid6">
                                            <div class="product-image6 p-5">
                                                <!-- <ul class="icons">
                                                    <li> <a href="shop-description.html" class="bg-primary text-white border-primary border"> <i class="fe fe-eye"> </i> </a> </li>
                                                    <li><a href="add-product.html" class="bg-success text-white border-success border"><i class="fe fe-edit"></i></a></li>
                                                    <li><a href="#" class="bg-danger text-white border-danger border"><i class="fe fe-x"></i></a></li>
                                                </ul>  -->
                                                <a href="javascript:void(0)" class="bg-light">

                                                    @foreach($list->images as $key => $img)
                                                    @if($key < 1) <img class="img-fluid br-7 w-100" src="{{ url('storage/product',$img->image) }}" alt="img">
                                                        @endif
                                                        @endforeach
                                                </a>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="product-content text-center">
                                                    <h1 class="title fw-bold fs-20"><a href="javascript:void(0)">{{ $list->name }}</a></h1>
                                                    <!-- <div class="mb-2 text-warning"> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star-half-o text-warning"></i> <i class="fa fa-star-o text-warning"></i> </div> -->
                                                    <div class="price">₹{{ number_format($list->price) }} /-
                                                        <!-- <span class="ms-4">$799</span>  -->
                                                    </div>
                                                    <!-- <p class="">{{ $list->excerpt }}</p> -->
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <a href="javascript:void(0)" data-url="{{ route('admin.cart.store',[$user->id,$list->id]) }}" class="btn btn-primary mb-1 add_cart"><i class="fe fe-shopping-cart me-2"></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- COL-END -->
                </div> <!-- ROW-1 CLOSED -->
            </div> <!-- ROW-1 END -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>
@section('script')
<script>
    // single delete
    $(document).on("click", ".buyPackage", function(e) {
        $('body').removeClass('timer-alert');
        let url = $(this).data('url');
        swal({
                title: "Alert",
                text: "Are you sure, buy this package.",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: 'No, cancel it!'
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location.href = url;
                }
            });
    });
</script>
@stop