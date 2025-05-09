<!DOCTYPE html>
<html lang="id">
<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="storage/css/parallaxbg.css">
  <link rel="stylesheet" href="storage/css/particle.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <title>@yield('title', 'Default Title')</title>
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>
