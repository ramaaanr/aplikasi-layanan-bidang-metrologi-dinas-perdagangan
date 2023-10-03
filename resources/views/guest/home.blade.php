@extends('layouts.master')

@section('content')
<main>
  <section class="hero h-screen bg-cover bg-center" style="background-image: url('images/hero.jpg')">
    <div
      class="hero-gradient__container bg-gradient-to-t from-primary h-full py-8 px-2 sm:px-8 md:px-16 lg:px-44 md:pb-24 flex flex-col justify-between md:justify-end ">
      <h2
        class="subtitle sm:text-lg md:text-xl text-light border-l-2 md:border-l-4 border-primary mb-2 font-medium pl-2">
        Dinas Perdagangan
        Kota Banjarbaru</h2>
      <div class="title__container">
        <h1 class="title  text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-light font-bold text-center sm:text-left">
          Pelayanan Tera dan Tera Ulang Online
        </h1>
        <div class="hint__container lg:hidden h-12 flex items-center justify-center gap-x-3 mt-4">
          <p class="hint-text text-light">Scroll untuk memilih layanan</p>
          <svg class="hint-icon self-start animate-wiggle fill-light" xmlns="http://www.w3.org/2000/svg" height="24"
            viewBox="0 -960 960 960" width="24">
            <path
              d="M245-400q-51-64-78-141t-27-159q0-27 3-54t9-54l-70 70-42-42 140-140 140 140-42 42-65-64q-7 25-10 50.5t-3 51.5q0 70 22.5 135.5T288-443l-43 43Zm413 273q-23 8-46.5 7.5T566-131L304-253l18-40q10-20 28-32.5t40-14.5l68-5-112-307q-6-16 1-30.5t23-20.5q16-6 30.5 1t20.5 23l148 407-100 7 131 61q7 3 15 3.5t15-1.5l157-57q31-11 45-41.5t3-61.5l-55-150q-6-16 1-30.5t23-20.5q16-6 30.5 1t20.5 23l55 150q23 63-4.5 122.5T815-184l-157 57Zm-90-265-54-151q-6-16 1-30.5t23-20.5q16-6 30.5 1t20.5 23l55 150-76 28Zm113-41-41-113q-6-16 1-30.5t23-20.5q16-6 30.5 1t20.5 23l41 112-75 28Zm8 78Z" />
          </svg>
        </div>
      </div>
    </div>
  </section>
  <section class="layanan px-8 sm:px-8 md:px-16 lg:px-44 pb-8 bg-primary">
    <h3 class=" font-semibold text-light text-center md:text-lg">Layanan tera dan tera ulang</h3>
    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 my-2">
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/tum-bbm">TUM BBM</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/timbangan-elektronik-kelas">Timbangan Elektronik Kelas</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/timbangan-jembatan">Timbangan Jembatan</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/timbangan-pegas">Timbangan Pegas</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/timbangan-meja">Timbangan Meja</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/timbangan-cepat">Timbangan Cepat</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/timbangan-bobot-ingsut">Timbangan Bobot Ingsut</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/timbangan-sentisimal">Timbangan Sensitisimal</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/pompa-ukur-bbm">Pompa Ukur BBM</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/dacin">Dacin</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/neraca">Neraca</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/takaran-basah-kering">Takaran Basah Kering</a>
      </li>
      <li>
        <a class="block text-center bg-light py-1 rounded-md text-primary font-semibold hover:opacity-80"
          href="/layanan/data-tera/meter-kayu">Meter Kayu</a>
      </li>
    </ul>
  </section>
  <footer class="bg-dark px-11 flex py-1 justify-between md:justify-center gap-x-2">
    <p class="text-xs">
      © 2023 Dinas Perdagangan Kota Banjarbaru
    </p>
    <img src="{{ asset('/images/logo-dinas.png') }}" class="h-4" alt="">

  </footer>
</main>
@endsection