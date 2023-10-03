<ul class="link-items bg-dark w-full h-screen" x-data="{page : '{{$page}}'}">
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