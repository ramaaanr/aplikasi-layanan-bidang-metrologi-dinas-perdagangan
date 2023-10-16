@extends('layouts.master')

@section('content')
<section class="guest__page w-full flex flex-row">
  <div class="container__form w-1/2 h-screen">
    @livewire('login')
  </div>
  <div class="container w-3/4 h-screen bg-cover bg-center" style="background-image: url('images/hero.jpg')">
    <div class="opacity__layer bg-opacity-70 bg-primary w-full h-full flex flex-wrap flex-col justify-center content-center pb-8 gap-y-1">
      <img class="w-52 mx-auto" src="{{ asset('/images/logo-dinas.png') }}" alt="" class="hero__logo">
      <h1 class="h1 hero__title text-3xl text-light font-bold text-center">DINAS PERDAGANGAN</h1>
      <h2 class="hero__subtitle text-3xl text-light font-medium text-center">Aplikasi Layanan Bidang Metrologi</h2>
    </div>
  </div>
</section>
@endsection