<!DOCTYPE html>
<html lang="id">
<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <title>@yield('title')</title>
</head>
<body class="bg-gray-50">
    @include('layout.navbar')
    @include('layout.hero')

    <main>
        @yield('content')
    </main>
</body>
</html>
