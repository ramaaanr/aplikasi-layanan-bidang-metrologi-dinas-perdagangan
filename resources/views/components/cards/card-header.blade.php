<div class="header-container p-6 pb-3 card" x-data="{page: '{{$page}}'}">
  <div class="header-content flex items-center justify-between mb-2">
    <h1 class="text-5xl h-full font-bold">{{ $sentenceCaseTitle }}</h1>
  </div>
  <div class="nav-link">
    <ul class="border-b-2 border-light-grey flex gap-x-6" x-data="{active: 'dokumen'}">
      <li
        class="w-fit  hover:text-dark-grey hover:border-b-4 hover:border-primary cursor-pointer transition-all ease-in-out duration-100"
        x-bind:class="active == 'dokumen' ? 'font-bold text-dark hover:none border-b-4 border-primary' : 'text-grey hover:border-opacity-50 '">
        <a href="">Dokumen</a>
      </li>
      <li
        class="w-fit  hover:text-dark-grey hover:border-b-4 hover:border-primary cursor-pointer transition-all ease-in-out duration-100"
        x-bind:class="active == 'formulir' ? 'font-bold text-dark hover:none border-b-4 border-primary' : 'text-grey hover:border-opacity-50 '">
        <a href="">Formulir</a>
      </li>

    </ul>
  </div>
</div>