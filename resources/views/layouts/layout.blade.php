<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('layouts.metas')
    @include('layouts.styles')
    <title>Arie Setiadi</title>
</head>

<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.modals')
    @include('layouts.footer')
    @include('layouts.scripts')
</body>

</html>
