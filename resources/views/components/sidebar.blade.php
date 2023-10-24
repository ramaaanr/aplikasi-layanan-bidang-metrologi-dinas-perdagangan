  <div class="sidebar w-72 h-screen bg-dark-primary flex flex-col" x-data="{tera : '{{$tera}}'}">
    <header class="sidebar__header flex flex-row bg-dark-secondary gap-x-2 px-4 pt-6 pb-2 h-fit">
      <div class="header__logo"><img src="{{ asset('/images/logo-dinas.png') }}" class="w-20" alt=""></div>
      <div class="header__text w-full">
        <div class="header__title text-base font-bold text-light">DINAS PERDAGANGAN</div>
        <div class="header__sub-tittle ">
          <span class="block text-sm text-light">APLIKASI LAYANAN</span>
          <span class="block text-sm text-light">TERA DAN TERA ULANG</span>
        </div>
      </div>
    </header>
    <div class="sidebar__link-items h-full bg-dark">
      <ul class="link-items">
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'halaman-utama' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/">Halaman Utama</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'tum-bbm' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/layanan/data-tera/tum-bbm">TUM BBM</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-elektronik-kelas' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/layanan/data-tera/timbangan-elektronik-kelas">Timbangan Elektronik Kelas</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-jembatan' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-jembatan" class="block">Timbangan Jembatan</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-cepat' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-cepat">Timbangan Cepat</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-pegas' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-pegas" class="block">Timbangan Pegas</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-meja' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-meja" class="block">Timbangan Meja</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-bobot-ingsut' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-bobot-ingsut" class="block">Timbangan Bobot Ingsut</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'timbangan-sentisimal' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/timbangan-sentisimal" class="block">Timbangan Sentisimal</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'pompa-ukur-bbm' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/pompa-ukur-bbm" class="block">Pompa Ukur BBM</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'dacin' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/dacin" class="block">Dacin</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'neraca' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/neraca" class="block">Neraca</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'takaran-basah-kering' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/takaran-basah-kering" class="block">Takaran basah/kering</a>
        </li>
        <li
          class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary"
          x-bind:class="tera == 'meter-kayu' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/data-tera/meter-kayu" class="block">Meter Kayu</a>
        </li>
      </ul>
    </div>
  </div>