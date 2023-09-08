<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mon Application')</title>
</head>
<body>
    <div class="container">
        @yield('content')   
    </div>
     
    @yield('scripts')
</body>
</html>

