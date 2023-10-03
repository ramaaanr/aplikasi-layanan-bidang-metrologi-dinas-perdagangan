  <div class="sidebar w-72 h-screen bg-dark-primary flex flex-col" x-data="{page : '{{$page}}'}">
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
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'halaman-utama' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/">Halaman Utama</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'tum-bbm' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/layanan/tum-bbm">TUM BBM</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'timbangan-elektronik-kelas' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a class="block" href="/layanan/timbangan-elektronik-kelas">Timbangan Elektronik Kelas</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'timbangan-jembatan' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/timbangan-jembatan" class="block">Timbangan Jembatan</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'timbangan-cepat' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/timbangan-cepat">Timbangan Cepat</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'timbangan-pegas' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/timbangan-pegas" class="block">Timbangan Pegas</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'timbangan-meja' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/timbangan-meja" class="block">Timbangan Meja</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'timbangan-bobot-ingsut' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/timbangan-bobot-ingsut" class="block">Timbangan Bobot Ingsut</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'timbangan-sentisimal' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/timbangan-sentisimal" class="block">Timbangan Sentisimal</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'pompa-ukur-bbm' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/pompa-ukur-bbm" class="block">Poma Ukur BBM</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'dacin' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/dacin" class="block">Dacin</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'neraca' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/neraca" class="block">Neraca</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'takaran-basah-kering' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/takaran-basah-kering" class="block">Takaran basah/kering</a>
        </li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:text-light hover:bg-primary" x-bind:class="page == 'meter-kayu' ? 'text-primary hover:bg-dark' : 'text-light'">
          <a href="/layanan/meter-kayu" class="block">Meter Kayu</a>
        </li>
      </ul>
    </div>
  </div>