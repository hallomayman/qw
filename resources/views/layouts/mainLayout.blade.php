<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Lodge</title>

    @include('includes.pageStyle')
</head>

<body class="sub_page">

<div class="hero_area">
    @include('includes.navbar')

</div>

@yield('page')


@include('includes.footer')


@include('includes.pageJS')

</body>

</html>
