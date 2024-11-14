<!DOCTYPE html>
<html lang="en">
<head>
    @yield('styles')
    <title></title>
</head>

<body>
    <h1>@yield('title')</h1>
    <div>
        @if (session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
        @yield('content')</div>

</body>

</html>