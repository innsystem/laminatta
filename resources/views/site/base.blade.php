<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('title')">
    <!-- Title-->
    <title>@yield('title') | {{$getSettings['site_name']}}</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ $getSettings['favicon'] ? asset('storage/' . $getSettings['favicon']) : asset('favicon.png') }}" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @yield('pageCSS')
</head>

<body>
    @yield('content')

    @yield('pageMODAL')

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('pageJS')
</body>

</html>