<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('backend/assets/img/favicon.png') }}">
  <title>{{ env('APP_NAME') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('backend.layouts.partials.styles')
  <style>
     /* body{*/
     /*  background: #28104e !important;*/
     /*}*/
  </style>
  @yield('styles')
</head>
{{-- bg-gray-100 --}}
<body class="g-sidenav-show bg-gray-100">
    @include('backend.layouts.partials.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    @include('backend.layouts.partials.header')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @yield('admin-content')
      @include('backend.layouts.partials.footer')
    </div>
  </main>
  <!--   Core JS Files   -->
  @include('backend.layouts.partials.scripts')
  @yield('scripts')
</body>
</html>
