<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin / {{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('admin/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    @livewireStyles()
</head>
<body>
    {{ $slot }}
    <script src="{{ asset('admin/js/jquery.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.js') }}"></script>

    @livewireScripts()
</body>
</html>
