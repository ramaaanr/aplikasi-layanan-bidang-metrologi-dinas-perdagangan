<div class="header-container pt-1 pb-2 px-4 card-sm" x-data="{page: '{{$page}}'}">
  <div class="header-content flex items-center justify-between">
    <h1 class="text-base md:text-3xl  h-full font-bold">PELAYANAN TERA {{ $sentenceCaseTitle }}</h1>
  </div>
  <div class="nav-link">
    <ul class="border-b-2 border-light-2 flex gap-x-6" x-data="{active: 'dokumen'}">
      <li class="w-fit  hover:text-dark-grey hover:border-b-4 hover:border-primary cursor-pointer transition-all ease-in-out duration-100" x-bind:class="active == 'dokumen' ? 'font-bold text-dark hover:none border-b-4 border-primary' : 'text-grey hover:border-opacity-50 '">
        <a class="text-inherit text-xs md:text-base" href="">Data Tera</a>
      </li>
      <li class="w-fit  hover:text-dark-grey hover:border-b-4 hover:border-primary cursor-pointer transition-all ease-in-out duration-100" x-bind:class="active == 'formulir' ? 'font-bold text-dark hover:none border-b-4 border-primary' : 'text-grey hover:border-opacity-50 '">
        <a class="text-inherit text-xs md:text-base" href="">Ajukan Tera</a>
      </li>
    </ul>
  </div>
</div>