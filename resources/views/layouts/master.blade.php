<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aplikasi Layanan Bidang Metrologi Dinas Perdagangan</title>
  <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles

</head>

<body>
  @yield('content')
  @include('sweetalert::alert')
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  @livewireScripts
</body>

</html>