<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('admin.includes.meta')
    <!-- TITLE -->
    <title>Noa - @yield('title')</title>

    @include('admin.includes.style')
</head>

<body class="ltr app sidebar-mini">

<!-- Switcher-->
<!-- Switcher -->
@include('admin.includes.right-sidebar')
<!-- End Switcher -->
<!-- Switcher-->

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{ asset('/') }}admin/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        @include('admin.includes.header')
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        @include('admin.includes.left-sidebar')
        <!--/APP-SIDEBAR-->

        <!--app-content open-->
        @yield('body')
        <!-- CONTAINER CLOSED -->
    </div>
    @include('admin.includes.modal')
    <!-- FOOTER -->
    @include('admin.includes.footer')
    <!-- FOOTER CLOSED -->

</div>
<!-- page -->
@include('admin.includes.script')

</body>
</html>
