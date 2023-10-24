<div class="header-container pt-1 pb-2 px-4 card-sm md:pt-4" x-data="{tera: '{{$tera}}'}">
  <div class="header-content flex items-center justify-between md:mb-2">
    <h1 class="text-base md:text-3xl  h-full font-bold">PELAYANAN TERA {{ $upperCaseTitle }}</h1>
  </div>
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
        <a class="text-inherit text-xs md:text-base" href="#" disabled>Update Tera</a>
      </li>
    </ul>
  </div>
</div>