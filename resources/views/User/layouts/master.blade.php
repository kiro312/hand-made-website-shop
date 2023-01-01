<!DOCTYPE html>
<html lang="en">

<head>
    @include('User.layouts.head')

</head>

<body>
    @yield('first-nav')
    @yield('second-nav')

    @yield('content')

    @include('User.layouts.scripts')
</body>

</html>
