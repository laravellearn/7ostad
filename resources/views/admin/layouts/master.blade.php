@include('admin.layouts.header')
@include('sweet::alert')
@include('admin.layouts.navbar')
    <!-- Page Content -->
    <div class="ecaps-page-content">
       @include('admin.layouts.topbar')
        <!-- Main Content Area -->
        @yield('content')
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->
@include('admin.layouts.footer')

</body>
</html>
