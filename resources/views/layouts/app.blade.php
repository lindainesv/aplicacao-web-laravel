<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
    <script>src="https://cdn.tailwindcss.com"</script>
    <livewire:styles />
</head>
<body>
  {{ $slot }}
  <livewire:scripts />
</body>
</html>