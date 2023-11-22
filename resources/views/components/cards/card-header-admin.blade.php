<div class="header-container pt-1 pb-2 px-4 card-sm md:pt-4" x-data="{tera: '{{$tera}}'}">
  <div class="header-content flex items-center justify-between md:mb-2">
    @if ($tera == 'data-kendaraan' || $tera == 'data-perusahaan')
    <h1 class="text-base md:text-3xl  h-full font-bold">PENGELOLAAN {{ $upperCaseTitle }}</h1>
    @else
    <h1 class="text-base md:text-3xl  h-full font-bold">PENGELOLAAN TERA {{ $upperCaseTitle }}</h1>
    @endif
    <a class="border-2  border-dark-grey hover:bg-light-2  rounded-md text-xs py-1 px-2 text-dark-grey font-bold flex flex-wrap content-center justify-center"
      href="/logout">
      <span class="text-dark-grey">Keluar</span>
      <svg class="fill-dark-grey" xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 -960 960 960" width="24">
        <path
          d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
      </svg>
    </a>
  </div>
  @if ($tera != 'data-kendaraan' && $tera != 'data-perusahaan')
  <div class="nav-link">
    <ul class="border-b-2 border-light-2 flex gap-x-6" x-data="{active: '{{$layanan}}'}">
      <li
        class="w-fit  hover:text-dark-grey hover:border-b-4 hover:border-primary cursor-pointer transition-all ease-in-out duration-100"
        x-bind:class="active == 'data-tera' ? 'font-bold text-dark hover:none border-b-4 border-primary' : 'text-grey hover:border-opacity-50 '">
        <a class="text-inherit text-xs md:text-base" href="/layanan/data-tera/{{$tera}}">Data Tera</a>
      </li>
      <li
        class="w-fit  hover:text-dark-grey hover:border-b-4 hover:border-primary cursor-pointer transition-all ease-in-out duration-100"
        x-bind:class="active == 'update-tera' ? 'font-bold text-dark hover:none border-b-4 border-primary' : 'text-grey hover:border-opacity-50 '">
        <a disabled class="text-inherit text-xs md:text-base" href="#" disabled>Update Tera</a>
      </li>
      <li
        class="w-fit  hover:text-dark-grey hover:border-b-4 hover:border-primary cursor-pointer transition-all ease-in-out duration-100"
        x-bind:class="active == 'cetak-tera' ? 'font-bold text-dark hover:none border-b-4 border-primary' : 'text-grey hover:border-opacity-50 '">
        <a disabled class="text-inherit text-xs md:text-base" href="#" disabled>Cetak Tera</a>
      </li>
    </ul>
  </div>
  @endif
</div>