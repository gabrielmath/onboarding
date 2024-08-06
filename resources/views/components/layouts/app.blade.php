<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>{{ $title ?? 'Onboarding' }}</title>

  @vite(['resources/scss/app.scss', 'resources/js/app.js'])

  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark')
    }
  </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
  <x-nav.navbar/>
  <x-nav.sidebar/>

  <div class="p-4 pt-20 sm:ml-64">
    {{ $slot }}
  </div>
  @stack('js')
</body>
</html>
