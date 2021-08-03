<div class="sidebar col-md-3 col-sm-5">
    <ul class="list-group margin-bottom-25 sidebar-menu">
      @foreach ($categories as $data)
      <li class="list-group-item clearfix"><a href="{{ route('eshop.show', ['category_id'=>$data->name]) }}"><i class="fa fa-angle-right"></i>{{$data->name}}</a></li>
      @endforeach
    </ul>

    <div class="sidebar-products clearfix">
      <h2>Bestsellers</h2>
      @foreach ($products as $data)
      <div class="item">
        <a href="shop-item.html"><img src="{{ asset('images') }}/{{$data->photo}}" alt="{{ asset('images') }}/{{$data->photo}}"></a>
        <h3><a href="shop-item.html">{{$data->name}}</a></h3>
        <div class="price">@currency($data->price)</div>
      </div>
      @endforeach
      {{-- <div class="item">
        <a href="shop-item.html"><img src="{{ asset('eshop/theme') }}/assets/pages/img/products/k4.jpg" alt="Some Shoes in Animal with Cut Out"></a>
        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
        <div class="price">$23.00</div>
      </div>
      <div class="item">
        <a href="shop-item.html"><img src="{{ asset('eshop/theme') }}/assets/pages/img/products/k3.jpg" alt="Some Shoes in Animal with Cut Out"></a>
        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
        <div class="price">$86.00</div>
      </div> --}}
    </div>
  </div>
