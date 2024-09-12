<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8.0.7/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @vite('resources/css/app.css')
  @yield('custom_css')
</head>
<body>
  {{-- <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1> --}}
</body>

@vite('resources/js/app.js')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.5/dist/alpine.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8.0.7/swiper-bundle.min.js"></script>
</html>