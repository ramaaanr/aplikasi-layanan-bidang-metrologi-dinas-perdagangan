@extends('layouts.master')

@section('content')
<nav class="py-4 px-3 sm:px-8 md:px-16 lg:hidden flex justify-between bg-dark-secondary fixed z-50 right-0 left-0 top-0">
  <header class="nav-header">
    <h3 class="title font-bold text-light">DINAS PERDAGANGAN</h3>
    <h3 class="subtitle text-xs text-light">Aplikasi Pelayanan Tera dan Tera Ulang</h3>
  </header>
  <button data-drawer-target="drawer" data-drawer-show="drawer" class="px-2 border-2 border-dark-grey rounded-md">
    <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
      <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
    </svg>
  </button>
</nav>
<section id="drawer" class="drawer fixed top-18 left-0 z-40 h-screen w-80 overflow-y-auto transition-transform -translate-x-full">
  @include('components.drawer', ['tera' => $tera])
</section>
<aside class="fixed hidden lg:block top-0 left-0 z-40">
  @include('components.sidebar', ['tera' => $tera])
</aside>
<main class="bg-light-grey min-h-screen pt-18 lg:pt-4 px-2 sm:px-8 md:px-16 lg:ml-64 flex flex-col gap-y-2">
  <div class="card-header mt-2">
    @livewire('components.cards.card-header', ['tera' => $tera, 'layanan' => $layanan])
  </div>
  @yield('main-content')
</main>
@endsection