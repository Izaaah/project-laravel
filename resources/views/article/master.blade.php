<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content</title>
    <link rel="stylesheet" href="storage/css/sidebar.css">
</head>
<body>
    <div class="main-wrapper">
        @include('partials.navbar')
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <script src="storage/js/foto.js"></script>
</body>
</html>
