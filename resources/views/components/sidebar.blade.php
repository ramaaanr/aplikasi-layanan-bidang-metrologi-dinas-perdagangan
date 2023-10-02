  <div class="sidebar w-72 h-screen bg-dark-primary flex flex-col" x-data="{page : '{{$page}}'}">
    <header class="sidebar__header flex flex-row bg-dark-secondary gap-x-2 px-4 pt-6 pb-2 h-fit">
      <div class="header__logo"><img src="{{ asset('/images/logo-dinas.png') }}" class="w-20" alt=""></div>
      <div class="header__text w-full">
        <div class="header__title text-base font-bold text-light">DINAS PERDAGANGAN</div>
        <div class="header__sub-tittle ">
          <span class="block text-sm text-light">APLIKASI LAYANAN</span>
          <span class="block text-sm text-light">BIDANG METROLOGI</span>
        </div>
      </div>
    </header>
    <div class="sidebar__link-items h-full bg-dark">
      <ul class="link-items">
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'halaman-utama' ? 'text-primary hover:bg-dark' : 'text-light'">
          Halaman Utama</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'tum-bbm' ? 'text-primary hover:bg-dark' : 'text-light'">
          TUM BBM</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'timbangan-elektronik-kelas' ? 'text-primary hover:bg-dark' : 'text-light'">
          Timbangan Elektronik Kelas</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'timbangan-jembatan' ? 'text-primary hover:bg-dark' : 'text-light'">
          Timbangan Elektronik Jembatan</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'timbangan-cepat' ? 'text-primary hover:bg-dark' : 'text-light'">
          Timbangan Cepat</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'timbangan-pegas' ? 'text-primary hover:bg-dark' : 'text-light'">
          Timbangan Pegas</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'timbangan-meja' ? 'text-primary hover:bg-dark' : 'text-light'">
          Timbangan Meja</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'timbangan-bobot-ingsut' ? 'text-primary hover:bg-dark' : 'text-light'">
          Timbangan Bobot Ingsut</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'timbangan-senstisimal' ? 'text-primary hover:bg-dark' : 'text-light'">
          Timbangan Sentisimal</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'pompa-ukur-BBM' ? 'text-primary hover:bg-dark' : 'text-light'">
          Pompo Ukur BBM</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'dacin' ? 'text-primary hover:bg-dark' : 'text-light'">
          Dacin</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'neraca' ? 'text-primary hover:bg-dark' : 'text-light'">
          Neraca</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'takaran-basah-/-kering' ? 'text-primary hover:bg-dark' : 'text-light'">
          Takaran basah/kering</li>
        <li class="text-light py-2.5 cursor-pointer select-none px-6 font-medium text-sm transition ease-in-out duration-200 hover:bg-primary" x-bind:class="page == 'meter-kayu' ? 'text-primary hover:bg-dark' : 'text-light'">
          Meter Kayu</li>
      </ul>
    </div>
  </div>