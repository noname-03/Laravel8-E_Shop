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
        <div class="sidebar col-md-3 col-sm-5">
          <ul class="list-group margin-bottom-25 sidebar-menu">
            @foreach ($categories as $data)
            <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>{{$data->name}}</a></li>
            @endforeach
          </ul>

          <div class="sidebar-products clearfix">
            <h2>Bestsellers</h2>
            @foreach ($products as $data)
            <div class="item">
              <a href="shop-item.html"><img src="{{ asset('images') }}/{{$data->photo}}" alt="{{ asset('images') }}/{{$data->photo}}"></a>
              <h3><a href="shop-item.html">{{$data->name}}</a></h3>
              <div class="price">${{$data->price}}</div>
            </div>
            @endforeach
            <div class="item">
              <a href="shop-item.html"><img src="{{ asset('eshop/theme') }}/assets/pages/img/products/k4.jpg" alt="Some Shoes in Animal with Cut Out"></a>
              <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
              <div class="price">$23.00</div>
            </div>
            <div class="item">
              <a href="shop-item.html"><img src="{{ asset('eshop/theme') }}/assets/pages/img/products/k3.jpg" alt="Some Shoes in Animal with Cut Out"></a>
              <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
              <div class="price">$86.00</div>
            </div>
          </div>
        </div>
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
              @foreach ($products as $data)
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
                <h3><a href="shop-item.html">{{$data->name}}</a></h3>
                <div class="pi-price">${{$data->price}}</div>
                <a href="{{ route('cart.store') }}" class="btn btn-default add2cart" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Add to cart</a>
                <form id="logout-form" action="{{ route('cart.store') }}" method="POST" class="d-none">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="product_id" value="{{$data->id}}">
                    <input type="hidden" name="qty" value="1">
                    <input type="hidden" name="subtotal" value="{{$data->price}}">
                </form>
                <div class="sticker sticker-new"></div>
              </div>
            </div>
            <!-- PRODUCT ITEM END -->
            @endforeach
          </div>
          <!-- END PRODUCT LIST -->
          <!-- BEGIN PAGINATOR -->
          <div class="row">
            <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
            <div class="col-md-8 col-sm-8">
              <ul class="pagination pull-right">
                <li><a href="javascript:;">&laquo;</a></li>
                <li><a href="javascript:;">1</a></li>
                <li><span>2</span></li>
                <li><a href="javascript:;">3</a></li>
                <li><a href="javascript:;">4</a></li>
                <li><a href="javascript:;">5</a></li>
                <li><a href="javascript:;">&raquo;</a></li>
              </ul>
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
