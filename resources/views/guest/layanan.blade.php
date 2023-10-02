@extends('layouts.master')

@section('content')
<aside class="fixed top-0 left-0 z-40">
  @include('components.sidebar', ['page' => 'halaman-utama'])
</aside>
<section class="user__page bg-light-grey p-4 pt-44 flex flex-col gap-y-4 ml-72 min-h-screen">
  <div class="card-header fixed top-8 left-76 right-4 z-40">
    @livewire('components.cards.card-header', ['title' => $layanan])
  </div>
  <div class="card-document card">
    <h3 class="font-bold">
      Data Dokumen {{$layanan}}
    </h3>
  </div>
</section>
<h1>{{$layanan}}</h1>
@endsection