@extends('layouts.master')

@section('content')
<nav class="py-4 px-3 sm:px-8 md:px-16 lg:hidden flex justify-between bg-dark-secondary fixed right-0 left-0 top-0">
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
  @include('components.drawer', ['page' => $layanan])
</section>
<aside class="fixed hidden lg:block top-0 left-0 z-40">
  @include('components.sidebar', ['page' => $layanan])
</aside>
<main class="bg-light-grey min-h-screen pt-18 lg:pt-4 px-2 sm:px-8 md:px-16 lg:ml-64 flex flex-col gap-y-2">
  <div class="card-header mt-2">
    @livewire('components.cards.card-header', ['title' => $layanan])
  </div>
  <div class="card-content-layanan">
    @include('components.cards.card-table', ['page' => $layanan])
  </div>
</main>
<!-- 
<section class="user__page bg-light-grey p-4 pt-44 flex flex-col gap-y-4 ml-72 min-h-screen">
  <nav>
  
  </nav>
  <div class="card-header fixed top-8 left-76 right-4 z-40">
    @livewire('components.cards.card-header', ['title' => $layanan])
  </div>

  <div clas
  <div class="card-document card">
    <h3 class="font-bold">
      Data Dokumen {{$layanan}}
    </h3>
  </div>
</section>
<h1>{{$layanan}}</h1> -->
@endsection