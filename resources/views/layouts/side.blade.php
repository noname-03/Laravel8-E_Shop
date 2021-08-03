<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-table"></i> Data <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ route('category.index') }}">Category</a></li>
            <li><a href="{{ route('product.index') }}">Product</a></li>
            <li><a href="{{ route('user.index') }}">User</a></li>
            <li><a href="{{ route('datatransaction') }}">Data Transaction</a></li>
          </ul>
        </li>
        {{-- <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ asset('dashboard/production') }}/chartjs.html">Chart JS</a></li>
            <li><a href="{{ asset('dashboard/production') }}/chartjs2.html">Chart JS2</a></li>
            <li><a href="{{ asset('dashboard/production') }}/morisjs.html">Moris JS</a></li>
            <li><a href="{{ asset('dashboard/production') }}/echarts.html">ECharts</a></li>
            <li><a href="{{ asset('dashboard/production') }}/other_charts.html">Other Charts</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ asset('dashboard/production') }}/fixed_sidebar.html">Fixed Sidebar</a></li>
            <li><a href="{{ asset('dashboard/production') }}/fixed_footer.html">Fixed Footer</a></li>
          </ul>
        </li> --}}
      </ul>
    </div>
    {{-- <div class="menu_section">
      <h3>Live On</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ asset('dashboard/production') }}/e_commerce.html">E-commerce</a></li>
            <li><a href="{{ asset('dashboard/production') }}/projects.html">Projects</a></li>
            <li><a href="{{ asset('dashboard/production') }}/project_detail.html">Project Detail</a></li>
            <li><a href="{{ asset('dashboard/production') }}/contacts.html">Contacts</a></li>
            <li><a href="{{ asset('dashboard/production') }}/profile.html">Profile</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ asset('dashboard/production') }}/page_403.html">403 Error</a></li>
            <li><a href="{{ asset('dashboard/production') }}/page_404.html">404 Error</a></li>
            <li><a href="{{ asset('dashboard/production') }}/page_500.html">500 Error</a></li>
            <li><a href="{{ asset('dashboard/production') }}/plain_page.html">Plain Page</a></li>
            <li><a href="{{ asset('dashboard/production') }}/login.html">Login Page</a></li>
            <li><a href="{{ asset('dashboard/production') }}/pricing_tables.html">Pricing Tables</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
              <li><a href="#level1_1">Level One</a>
              <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li class="sub_menu"><a href="{{ asset('dashboard/production') }}/level2.html">Level Two</a>
                  </li>
                  <li><a href="#level2_1">Level Two</a>
                  </li>
                  <li><a href="#level2_2">Level Two</a>
                  </li>
                </ul>
              </li>
              <li><a href="#level1_2">Level One</a>
              </li>
          </ul>
        </li>
        <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
      </ul>
    </div> --}}

  </div>
