@extends('eshop.template')
@section('content')

<div class="title-wrapper">
    <div class="container"><div class="container-inner">
      <h1><span>MEN</span> CATEGORY</h1>
      <em>Over 4000 Items are available here</em>
    </div></div>
  </div>

  <div class="main">
    <div class="container">
      <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="">Store</a></li>
          <li class="active">Men category</li>
      </ul>
      <!-- BEGIN SIDEBAR & CONTENT -->
      <div class="row margin-bottom-40">
        <!-- BEGIN SIDEBAR -->
        @include('eshop.side')
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="col-md-9 col-sm-7">
          <div class="row list-view-sorting clearfix">
            <div class="col-md-2 col-sm-2 list-view">
              <a href="javascript:;"><i class="fa fa-th-large"></i></a>
              <a href="javascript:;"><i class="fa fa-th-list"></i></a>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="pull-right">
                <label class="control-label">Show:</label>
                <select class="form-control input-sm">
                  <option value="#?limit=24" selected="selected">24</option>
                  <option value="#?limit=25">25</option>
                  <option value="#?limit=50">50</option>
                  <option value="#?limit=75">75</option>
                  <option value="#?limit=100">100</option>
                </select>
              </div>
              <div class="pull-right">
                <label class="control-label">Sort&nbsp;By:</label>
                <select class="form-control input-sm">
                  <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                  <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                  <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                  <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                  <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                  <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                  <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                  <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                  <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                </select>
              </div>
            </div>
          </div>
          <!-- BEGIN PRODUCT LIST -->
          <div class="row product-list">
              @foreach ($product_categories->products as $data)
            <!-- PRODUCT ITEM START -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="product-item">
                <div class="pi-img-wrapper">
                  <img src="{{ asset('images') }}/{{$data->photo}}" class="img-responsive" alt="{{ asset('images') }}/{{$data->photo}}">
                  <div>
                    <a href="{{ asset('images') }}/{{$data->photo}}" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                  </div>
                </div>
                <h3><a href="{{ route('eshop.show.product', ['id'=>$data->name]) }}">{{$data->name}}</a></h3>
                <div class="pi-price">@currency($data->price)</div>
                <form action="{{ route('cart.store') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$data->id}}">
                    <input type="hidden" name="qty" value="1">
                    <input type="hidden" name="subtotal" value="{{$data->price}}">
                    <button href="{{ route('cart.store') }}" class="btn btn-default add2cart">Add to cart</button>
                </form>
                {{-- <a href="{{ route('cart.store') }}" class="btn btn-default add2cart" onclick="event.preventDefault(); document.getElementById('add-cart').submit();">Add to cart</a> --}}
                {{-- <form id="add-cart" action="{{ route('cart.store') }}" method="POST" class="d-none">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="product_id" value="{{$data->id}}">
                    <input type="hidden" name="qty" value="1">
                    <input type="hidden" name="subtotal" value="{{$data->price}}">
                </form> --}}
                <div class="sticker sticker-new"></div>
              </div>
            </div>
            <!-- PRODUCT ITEM END -->
            @endforeach
          </div>
          <!-- END PRODUCT LIST -->
          <!-- BEGIN PAGINATOR -->
          <div class="row">
            <div class="col-md-4 col-sm-4 items-info"></div>
            <div class="col-md-8 col-sm-8">
                {{-- {{ $products->links() }} --}}
            </div>
          </div>
          <!-- END PAGINATOR -->
        </div>
        <!-- END CONTENT -->
      </div>
      <!-- END SIDEBAR & CONTENT -->
    </div>
  </div>

@endsection
