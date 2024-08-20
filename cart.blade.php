@section('style')
<style>
    .custom-radio-lg.custom-control {
        padding-top: 0;
    }

    /* .custom-radio-lg .custom-control-label::before {
        display: block;
    }

    .custom-radio-lg .custom-control-label::after {
        display: block;
    } */
</style>
@stop
<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            <!-- PAGE-HEADER -->
            
            <div class="page-header">
                <h1 class="page-title">Cart</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.user.product.list',$user->id) }}">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
                    <div class="card cart">
                        <div class="card-header">
                            <h3 class="card-title">Products</h3>
                        </div>
                        {{ Form::open(['url' => route('admin.cart.update',$user->id), 'method'=>'POST', 'files' => true, 'class' => '']) }}
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-vcenter">
                                    @if($lists->count())
                                    <thead>
                                        <tr class="border-top">
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lists as $list)
                                        <tr>
                                            <td>
                                                <div class="text-center">

                                                    @foreach($list->product->images as $key => $img)
                                                    @if($key < 1) <img class="cart-img text-center" src="{{ url('storage/product',$img->image)}}" alt="img">
                                                        @endif
                                                        @endforeach
                                                </div>
                                            </td>
                                            <td>{{ $list->product->name }}</td>
                                            <td class="fw-bold">₹ {{ $list->product->price }}</td>
                                            <td>
                                                <div class="handle-counter" id="handleCounter4">
                                                    <button type="button" data-id="{{ $list->id }}" class="counter-minus btn btn-white lh-2 shadow-none">
                                                        <i class="fa fa-minus text-muted"></i>
                                                    </button>
                                                    <input type="text" name="{{ $list->id }}" value="{{ $list->quantity }}" class="qty input_{{ $list->id }}" readonly>
                                                    <button type="button" data-id="{{ $list->id }}" class="counter-plus btn btn-white lh-2 shadow-none">
                                                        <i class="fa fa-plus text-muted"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>₹ <span>{{ (float)$list->product->price*$list->quantity }}</span></td>
                                            <td>
                                                <div class=" d-flex g-2">
                                                    <a href="{{ route('admin.cart.delete',[$user->id,$list->id]) }}" class="btn text-danger bg-danger-transparent btn-icon py-1" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                        <span class="bi bi-trash fs-16"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    @else
                                    <div class="text-center">
                                        Cart Empty.
                                    </div>
                                    @endif
                                </table>
                            </div>
                        </div>
                        @if($lists->count())
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-end"><button href="javascript:void(0)" class="btn btn-default btn-md">Update Cart</button></div>
                            </div>
                        </div>
                        @endif

                        </form>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Cart Totals</div>
                        </div>
                        <div class="card-body py-2">
                            <div class="table-responsive">
                                <table class="table table-borderless text-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="text-start">Product </td>
                                            <td class="text-end"><span class="fw-bold  ms-auto"><span>{{ number_format($lists->count()) }}</span></span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-start fs-18">Total</td>
                                            <td class="text-end"><span class="ms-2 fw-bold fs-23">₹ <span>{{ number_format($total_price,2) }}</span></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if($lists->count())
                        <div class="card-footer">
                            <div class="btn-list">
                                <a href="{{ route('admin.cart.checkout',$user->id) }}" class="btn btn-success float-sm-end">Submit<i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->
        </div> <!-- CONTAINER CLOSED -->
    </div>
</div>

@section('script')
<script>
    $(document).on("click", "#handleCounter4 .counter-minus", function(e) {
        let id = $(this).data('id');
        let class_name = 'input_' + id;
        let val = $('.' + class_name).val();
        if (val > 1) {
            $('.' + class_name).val(parseInt(val) - 1);
        }
    });
    $(document).on("click", "#handleCounter4 .counter-plus", function(e) {
        let id = $(this).data('id');
        let class_name = 'input_' + id;
        let val = $('.' + class_name).val();
        $('.' + class_name).val(parseInt(val) + 1);
    });
</script>
@stop