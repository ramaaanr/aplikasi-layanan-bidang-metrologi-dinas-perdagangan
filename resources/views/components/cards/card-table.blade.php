<div class="card-sm p-4 min-h-[74vh] flex flex-col justify-start">
  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">Pengajuan Tera {{$sentenceCaseTitle}}</h3>

  <!-- 🎬 Action Container Start -->
  <div class="action-container grid grid-cols-2 md:grid-cols-3 gap-x-2" x-data="{selectValue: 'Berdasarkan'}">
    <!-- 🔍 Input Search Start-->
    <div class=" input__container relative mb-2 flex flex-wrap flex-col w-full">
      <input type="text " class="input-sm text-sm" placeholder="cari dokumen...">
      <button class="absolute right-2 top-1 fill-grey hover:fill-dark-grey">
        <svg class="fill-inherit bg-light" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="12">
          <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
        </svg>
      </button>
    </div>
    <!-- 🔍 Input Search End-->

    <!-- ⏬ Dropdown Start -->
    <button id=" dropdownDefaultButton" data-dropdown-toggle="dropdown" class="input-sm bg-white text-sm text-center inline-flex justify-between text-grey" type="button">
      <p class="text-grey" x-text="selectValue"></p>
      <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="12">
        <path d="M480-371.923 267.692-584.231 296-612.539l184 184 184-184 28.308 28.308L480-371.923Z" />
      </svg>
    </button>
    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-light-grey rounded-lg shadow w-64 ">
      <ul class="py-2 text-sm text-grey " aria-labelledby="dropdownDefaultButton">
        <li>
          <button class="w-full text-left px-4 py-2 hover:bg-light-grey" x-on:click="selectValue = 'Kode Layanan'">
            Kode Layanan</button>
        </li>
        <li>
          <button class="w-full text-left px-4 py-2 hover:bg-light-grey" x-on:click="selectValue = 'Pemohon'">
            Pemohon</button>
        </li>
        <li>
          <button class=" w-full text-left px-4 py-2 hover:bg-light-grey" x-on:click="selectValue = 'Tanggal '">
            Tanggal Pengajuan</button>
        </li>
      </ul>
    </div>
    <!-- ⏬ Dropdown End -->


    <!-- ➕ Pengajuan Start -->
    <a href="/layanan/ajukan-tera/{{$tera}}" class="button-primary-sm w-full h-fit flex justify-center col-span-2 md:col-auto">
      <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
        <path xmlns="http://www.w3.org/2000/svg" d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
      </svg>
      <span class="text-sm text-light">
        Ajukan Tera
      </span>
    </a>
    <!-- ➕ Pengajuan End -->

  </div>
  <!-- 🎬 Action Container End -->



  <!-- 📅 Table Start -->

  <div class="relative overflow-x-auto shadow-md rounded-md sm:rounded-lg mt-2 border-2 border-grey">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr class="bg-light-2">
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Kode Pengajuan
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-12">
            <div class="flex items-center">
              Pemohon
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Tanggal Pengajuan
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Status

            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Keterangan

            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            xajf9dkah1
          </th>
          <td class="p-3 w-12">
            Alfi Rizki Tesumbalit
          </td>
          <td class="p-3 w-9">
            2 Mei 2023
          </td>

          <td class="p-3 w-9">
            <div class="status bg-yellow-300 text-center w-fit rounded-md px-2 py-1 text-light font-semibold">Diajukan
            </div>
            <!-- Dijadwalkan Biru - -->
            <!-- Ditolak - Red -->
            <!-- Selesai - Green -->
          </td>
          <td class="p-3 w-9">
            Sedang diproses
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-pagination__container flex justify-end mt-2 " x-data="{page: 2}">
    <button class="arrow-before fill-dark-grey hover:bg-light-grey rounded-md" x-bind:class="{ 'fill-grey': page == 1 }">
      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
        <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
      </svg>
    </button>
    <button class="pagination-index px-2 mx-1 fill-dark-grey hover:bg-light-grey rounded-md" x-bind:class="{ 'bg-light-grey': page == 1 }">
      <span>1</span>
    </button>
    <button class="pagination-index px-2 mx-1 fill-dark-grey hover:bg-light-grey rounded-md" x-bind:class="{ 'bg-light-grey': page == 2 }">
      <span>2</span>
    </button>
    <button class="pagination-index px-2 mx-1 fill-dark-grey hover:bg-light-grey rounded-md" x-bind:class="{ 'bg-light-grey': page == 3 }">
      <span>3</span>
    </button>
    <p class="pagination-more px-2 mx-1">
      <span>...</span>
    </p>
    <button class="pagination-index px-2 mx-1 fill-dark-grey hover:bg-light-grey rounded-md" x-bind:class="{ 'bg-light-grey': page == 10 }">
      <span>10</span>
    </button>
    <button class="arrow-next fill-dark-grey hover:bg-light-grey rounded-md" x-bind:class="{ 'fill-grey': page == 10 }">
      <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
        <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
      </svg>
    </button>
  </div>

</div>

</div>

<!-- <div>
  <div class="card p-4 flex flex-col gap-y-2">
    <h3 class="text-xl font-bold">Data Dokumen Tera</h3>
    <div class="table-action__container flex w-full gap-x-2">
      <div class="input__container relative mb-2 flex flex-wrap flex-col w-full">
        <input type="text" class="input" placeholder="cari dokumen...">
        <button class="absolute right-4 top-2 fill-grey hover:fill-dark-grey">
          <svg class="fill-inherit" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
            <path
              d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
          </svg>
        </button>
      </div>
      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
        class="input bg-white text-center inline-flex justify-between w-64" type="button">
        Cari Berdasarkan
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
          <path d="M480-371.923 267.692-584.231 296-612.539l184 184 184-184 28.308 28.308L480-371.923Z" />
        </svg>
      </button>
      <div id="dropdown" class="z-10 hidden bg-white divide-y divide-light-grey rounded-lg shadow w-64 ">
        <ul class="py-2 text-sm text-grey " aria-labelledby="dropdownDefaultButton">
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-light-grey">No
              Surat</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-light-grey">Tanggal
              Pengisian</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-light-grey">Petugas
              Penerima</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-light-grey">Kategori
              Dokumen</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="table-content__container w-full shadow-md rounded-md overflow-hidden">
      <div class="relative overflow-hidden border-2 border-grey rounded-md">
        <table class="w-full text-sm text-left text-dark-grey ">
          <thead class="text-xs text-light uppercase bg-light-grey">
            <tr class="">
              <th scope="col" class="px-1 pl-2 py-3 w-12">
                No
              </th>
              <th scope="col" class="px-1 py-3 ">
                No Surat
                <button x-data="{showSort: 'default' }">
                  <svg x-on:click="showSort = 'asc'"
                    x-bind:class="{ 'hidden': showSort != 'default', 'block': showSort == 'default' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path
                      d="M480-120 300-300l58-58 122 122 122-122 58 58-180 180ZM358-598l-58-58 180-180 180 180-58 58-122-122-122 122Z" />
                  </svg>
                  <svg x-on:click="showSort = 'desc'"
                    x-bind:class="{ 'hidden': showSort != 'asc', 'block': showSort == 'asc' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path d="m296-345-56-56 240-240 240 240-56 56-184-184-184 184Z" />
                  </svg>
                  <svg x-on:click="showSort = 'default'"
                    x-bind:class="{ 'hidden': showSort != 'desc', 'block': showSort == 'desc' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                  </svg>
                </button>
              </th>
              <th scope="col" class="px-1 py-3 ">
                Tanggal Pengisian
                <button x-data="{showSort: 'default' }">
                  <svg x-on:click="showSort = 'asc'"
                    x-bind:class="{ 'hidden': showSort != 'default', 'block': showSort == 'default' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path
                      d="M480-120 300-300l58-58 122 122 122-122 58 58-180 180ZM358-598l-58-58 180-180 180 180-58 58-122-122-122 122Z" />
                  </svg>
                  <svg x-on:click="showSort = 'desc'"
                    x-bind:class="{ 'hidden': showSort != 'asc', 'block': showSort == 'asc' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path d="m296-345-56-56 240-240 240 240-56 56-184-184-184 184Z" />
                  </svg>
                  <svg x-on:click="showSort = 'default'"
                    x-bind:class="{ 'hidden': showSort != 'desc', 'block': showSort == 'desc' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                  </svg>
                </button>
              </th>
              <th scope="col" class="px-1 py-3">
                Petugas Penerima
                <button x-data="{showSort: 'default' }">
                  <svg x-on:click="showSort = 'asc'"
                    x-bind:class="{ 'hidden': showSort != 'default', 'block': showSort == 'default' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path
                      d="M480-120 300-300l58-58 122 122 122-122 58 58-180 180ZM358-598l-58-58 180-180 180 180-58 58-122-122-122 122Z" />
                  </svg>
                  <svg x-on:click="showSort = 'desc'"
                    x-bind:class="{ 'hidden': showSort != 'asc', 'block': showSort == 'asc' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path d="m296-345-56-56 240-240 240 240-56 56-184-184-184 184Z" />
                  </svg>
                  <svg x-on:click="showSort = 'default'"
                    x-bind:class="{ 'hidden': showSort != 'desc', 'block': showSort == 'desc' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                  </svg>
                </button>
              </th>
              <th scope="col" class="px-1 py-3">
                Kategori Dokumen
                <button x-data="{showSort: 'default' }">
                  <svg x-on:click="showSort = 'asc'"
                    x-bind:class="{ 'hidden': showSort != 'default', 'block': showSort == 'default' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path
                      d="M480-120 300-300l58-58 122 122 122-122 58 58-180 180ZM358-598l-58-58 180-180 180 180-58 58-122-122-122 122Z" />
                  </svg>
                  <svg x-on:click="showSort = 'desc'"
                    x-bind:class="{ 'hidden': showSort != 'asc', 'block': showSort == 'asc' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path d="m296-345-56-56 240-240 240 240-56 56-184-184-184 184Z" />
                  </svg>
                  <svg x-on:click="showSort = 'default'"
                    x-bind:class="{ 'hidden': showSort != 'desc', 'block': showSort == 'desc' }"
                    class="fill-dark-grey h-3 self-center" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z" />
                  </svg>
                </button>
              </th>
              <th scope="col" class="px-1 py-3">
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-light border-b border-b-light-grey hover:bg-light-2 py-4 w-full ">
              <td class="px-2 pl-3 py-4 w-7">
                1
              </td>
              <td class="px-2 py-4 w-1/6">
                00007/UPT.MET/05/2012
              </td>
              <td class="px-2 py-4 w-1/6">
                07-07-2007
              </td>
              <td class="px-2 py-4 w-1/4">
                Joni DOsa
              </td>
              <td class="px-2 py-4 w-1/4 ">
                Timbangan Elektronik Kelas
              </td>
              <td class="w-19">
                <button data-popover-target="popover-preview">
                  <svg class="fill-grey hover:fill-dark" xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                    data-name="Layer 1" viewBox="0 0 24 24" width="24">
                    <path
                      d="M6,4V4ZM6,22a2,2,0,0,1-2-2V4a1.93,1.93,0,0,1,.59-1.41A1.93,1.93,0,0,1,6,2h8l6,6v4.35a5.56,5.56,0,0,0-1-.26A5.89,5.89,0,0,0,18,12V9H13V4H6V20h6.35a5.51,5.51,0,0,0,.5,1.07,4.93,4.93,0,0,0,.7.93Zm11.59-2.33a2.29,2.29,0,0,0,2.28-2.29,2.29,2.29,0,1,0-4.57,0,2.29,2.29,0,0,0,2.29,2.29Zm0-.92a1.37,1.37,0,0,1-1.38-1.37,1.35,1.35,0,0,1,.4-1,1.38,1.38,0,0,1,1-.4A1.37,1.37,0,0,1,19,17.38a1.34,1.34,0,0,1-.4,1A1.31,1.31,0,0,1,17.59,18.75Zm0,2.44A6,6,0,0,1,12,17.38a6,6,0,0,1,9-2.77,5.86,5.86,0,0,1,2.21,2.77,6,6,0,0,1-5.58,3.81Zm0-1a5,5,0,0,0,4.46-2.8,4.92,4.92,0,0,0-1.83-2,4.95,4.95,0,0,0-5.27,0,4.92,4.92,0,0,0-1.83,2,5,5,0,0,0,4.47,2.8Z" />
                  </svg>
                </button>
                <button data-popover-target="popover-edit">
                  <svg class="fill-grey hover:fill-dark" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path
                      d="M554.261-71.87v-129.695L776.696-423q9.717-9.76 21.594-14.097 11.877-4.338 23.753-4.338 12.957 0 24.806 4.859 11.848 4.859 21.542 14.576l37 37q8.676 9.717 13.555 21.594 4.88 11.877 4.88 23.754 0 12.196-4.359 24.413-4.358 12.217-14.076 21.935L683.957-71.869H554.261Zm304.782-267.782-37-37 37 37Zm-240 203h38l120.044-121.044-18-19-19-18-121.044 120.044v38ZM238.087-71.869q-37.783 0-64.392-26.61-26.608-26.608-26.608-64.391v-634.26q0-37.783 26.608-64.392 26.609-26.609 64.392-26.609h320.478l244.783 244.783v116.413h-91v-70.195h-200v-200H238.087v634.26h236.174v91H238.087ZM520.717-480Zm238.37 203.304-19-18 37 37-18-19Z" />
                  </svg>
                </button>
                <button data-popover-target="popover-delete">
                  <svg class="fill-grey hover:fill-dark" xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path
                      d="M240-800v200-200 640-9.5 9.5-640Zm0 720q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v174q-19-7-39-10.5t-41-3.5v-120H520v-200H240v640h254q8 23 20 43t28 37H240Zm396-20-56-56 84-84-84-84 56-56 84 84 84-84 56 56-83 84 83 84-56 56-84-83-84 83Z" />
                  </svg>
                </button>
                <div data-popover id="popover-preview" role="tooltip"
                  class="absolute z-10 invisible inline-block w-fit text-sm text-grey transition-opacity duration-300 bg-light border border-grey rounded-lg shadow-sm opacity-0 ">
                  <div class="px-3 py-2">
                    <p>Preview Dokumen</p>
                  </div>
                  <div data-popper-arrow></div>
                </div>
                <div data-popover id="popover-edit" role="tooltip"
                  class="absolute z-10 invisible inline-block w-fit text-sm text-grey transition-opacity duration-300 bg-light border border-grey rounded-lg shadow-sm opacity-0 ">
                  <div class="px-3 py-2">
                    <p>Edit Dokumen</p>
                  </div>
                  <div data-popper-arrow></div>
                </div>
                <div data-popover id="popover-delete" role="tooltip"
                  class="absolute z-10 invisible inline-block w-fit text-sm text-grey transition-opacity duration-300 bg-light border border-grey rounded-lg shadow-sm opacity-0 ">
                  <div class="px-3 py-2">
                    <p>Hapus Dokumen</p>
                  </div>
                  <div data-popper-arrow></div>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
    <div class="table-pagination__container flex justify-end" x-data="{page: 2}">
      <button class="arrow-before fill-dark-grey hover:bg-light-grey rounded-md"
        x-bind:class="{ 'fill-grey': page == 1 }">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
          <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
        </svg>
      </button>
      <button class="pagination-index px-2 mx-1 fill-dark-grey hover:bg-light-grey rounded-md"
        x-bind:class="{ 'bg-light-grey': page == 1 }">
        <span>1</span>
      </button>
      <button class="pagination-index px-2 mx-1 fill-dark-grey hover:bg-light-grey rounded-md"
        x-bind:class="{ 'bg-light-grey': page == 2 }">
        <span>2</span>
      </button>
      <button class="pagination-index px-2 mx-1 fill-dark-grey hover:bg-light-grey rounded-md"
        x-bind:class="{ 'bg-light-grey': page == 3 }">
        <span>3</span>
      </button>
      <p class="pagination-more px-2 mx-1">
        <span>...</span>
      </p>
      <button class="pagination-index px-2 mx-1 fill-dark-grey hover:bg-light-grey rounded-md"
        x-bind:class="{ 'bg-light-grey': page == 10 }">
        <span>10</span>
      </button>
      <button class="arrow-next fill-dark-grey hover:bg-light-grey rounded-md"
        x-bind:class="{ 'fill-grey': page == 10 }">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
          <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
        </svg>
      </button>
    </div>
  </div>
</div> -->