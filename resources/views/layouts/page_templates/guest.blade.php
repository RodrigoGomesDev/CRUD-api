@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="purple" style="background-image: url('{{ asset('material') }}/img/login.jpg'); background-size: cover; background-position:center;align-items: center center; background-attachment: scroll" data-color="purple">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    @yield('content')
    @include('layouts.footers.guest')
  </div>
</div>
