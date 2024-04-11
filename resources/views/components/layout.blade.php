<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home Page</title>
</head>
<body>
<nav>
  <x-nav-link>Home</x-nav-link>
  <x-nav-link>About</x-nav-link>
  <x-nav-link>Contact</x-nav-link>
  <a href="/">Home</a>
  <a href="/about">About</a>
  <a href="/contact">Contact</a>
</nav>
{{ $slot }}
</body>
</html>