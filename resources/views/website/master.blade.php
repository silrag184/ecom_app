<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bigdeal |@yield('title')</title>
    @include('website.includes.meta')

    @include('website.includes.style')

</head>

<body class="bg-light">

<!-- loader start -->
<div class="loader-wrapper">
    <div>
        <img src="{{asset('/')}}website/assets/images/loader.gif" alt="loader">
    </div>
</div>
<!-- loader end -->


@include('website.includes.header')

<div id="mainContainer">
@yield('body')
</div>

@include('website.includes.footer')


@include('website.includes.script')

</body>
</html>
