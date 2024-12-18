<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Streaming Movie</title>
  <link rel="shortcut icon" href="/assets/img/Logo.svg" type="image/x-icon">
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full bg-[#16181E]">
    <div class="min-h-full">
        <x-navbar></x-navbar>
      
        <main class="bg-[#16181E]">
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
          </div>
        </main>
      </div>
</body>
</html>