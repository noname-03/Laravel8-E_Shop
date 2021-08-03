<div class="header">
    <div class="container">
      <a class="site-logo" href="{{ route('eshop.index') }}"><img src="{{ asset('eshop/theme') }}/assets/corporate/img/logos/logo-shop-red.png" alt="Metronic Shop UI" width="150" height="65"></a>

      <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>



      <!-- BEGIN NAVIGATION -->
      <div class="header-navigation">
        <ul>
          <li><a href="{{ route('eshop.index') }}">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
              Category

            </a>

            <!-- BEGIN DROPDOWN MENU -->
            <ul class="dropdown-menu">
              {{-- <li class="dropdown-submenu">
                <a href="shop-product-list.html">Hi Tops <i class="fa fa-angle-right"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="shop-product-list.html">Second Level Link</a></li>
                  <li><a href="shop-product-list.html">Second Level Link</a></li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                      Second Level Link
                      <i class="fa fa-angle-right"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="shop-product-list.html">Third Level Link</a></li>
                      <li><a href="shop-product-list.html">Third Level Link</a></li>
                      <li><a href="shop-product-list.html">Third Level Link</a></li>
                    </ul>
                  </li>
                </ul>
              </li> --}}
              @foreach ($categories as $data)
              <li><a href="{{ route('eshop.show', ['category_id'=>$data->name]) }}">{{$data->name}}</a></li>
              @endforeach
            </ul>
            <!-- END DROPDOWN MENU -->
          </li>
          <li><a href="{{ route('cart.index') }}">Cart</a></li>

          <!-- BEGIN TOP SEARCH -->
          <li class="menu-search">
            <span class="sep"></span>
            <i class="fa fa-search search-btn"></i>
            <div class="search-box">
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Search</button>
                  </span>
                </div>
              </form>
            </div>
          </li>
          <!-- END TOP SEARCH -->
        </ul>
      </div>
      <!-- END NAVIGATION -->
    </div>
  </div>
