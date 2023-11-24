  <div class="sidebar w-72 h-screen bg-dark-primary flex flex-col" x-data="{tera : '{{$tera}}'}">
    <header class="sidebar__header flex flex-row bg-dark-secondary gap-x-2 px-4 pt-6 pb-2 h-fit">
      <div class="header__logo"><img src="{{ asset('/images/logo-dinas.png') }}" class="w-20" alt=""></div>
      <div class="header__text w-full">
        <div class="header__title text-base font-bold text-light">APLIKASI INTANG</div>
        <div class="header__sub-tittle ">
          <span class="block text-sm text-light">Dinas Perdagangan</span>
          <span class="block text-sm text-light">Kota Banjarbaru</span>
        </div>
      </div>
    </header>
    <div class="sidebar__link-items h-full flex flex-col justify-between bg-dark">
      <ul class="flex flex-col link-items">
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'halaman-utama' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/">Halaman Utama</a>
        </li>
        @if ($user == 'admin')
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'data-perusahaan' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/pengelolaan-layanan/data-perusahaan">Data Perusahaan</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'data-kendaraan' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/pengelolaan-layanan/data-kendaraan">Data Kendaran</a>
        </li>
        @endif
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'tum-bbm' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/layanan/data-tera/tum-bbm">TUM BBM</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-elektronik-kelas' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/layanan/data-tera/timbangan-elektronik-kelas">Timbangan Elektronik Kelas</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-jembatan' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-jembatan" class="block">Timbangan Jembatan</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-cepat' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-cepat">Timbangan Cepat</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-pegas' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-pegas" class="block">Timbangan Pegas</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-meja' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-meja" class="block">Timbangan Meja</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-bobot-ingsut' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-bobot-ingsut" class="block">Timbangan Bobot Ingsut</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-sentisimal' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-sentisimal" class="block">Timbangan Sentisimal</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'pompa-ukur-bbm' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/pompa-ukur-bbm" class="block">Pompa Ukur BBM</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'dacin' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/dacin" class="block">Dacin</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'neraca' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/neraca" class="block">Neraca</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'takaran-basah-kering' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/takaran-basah-kering" class="block">Takaran basah/kering</a>
        </li>
        <li
          class="text-light py-2 cursor-pointer select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'meter-kayu' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/meter-kayu" class="block">Meter Kayu</a>
        </li>
      </ul>
      <div
        class="text-light flex py-2 cursor-pointer mb-4 select-none px-6 font-medium text-xs transition ease-in-out duration-200 hover:text-light hover:bg-primary"
        x-bind:class="tera == 'meter-kayu' ? 'text-primary hover:bg-dark' : 'text-light'">
        <svg class="w-[16px] h-[16px] mr-2 fill-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z" />
        </svg>
        @if ($user == 'admin')
        <a href="/docs/DOKUMENTASI-ADMIN.pdf" target="_blank" class="block">Tutorial penggunaan</a>
        @else
        <a href="/docs/DOKUMENTASI-USER.pdf" target="_blank" class="block">Tutorial penggunaan</a>
        @endif
        </li>
      </div>
    </div>