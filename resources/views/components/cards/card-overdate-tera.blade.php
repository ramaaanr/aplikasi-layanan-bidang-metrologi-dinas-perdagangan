<div class="card overdate-tera p-4">
  <div id="alert-additional-content-1"
    class="p-4 mb-4 text-blue-800   rounded-lg dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
    <div class="flex items-center">
      <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
          d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <h3 class="text-lg font-medium">Data Tera lewat dari tanggal pengujian</h3>
    </div>
    <div class="mt-2 mb-4 text-sm">
      Lakukan update untuk tera yang lewat dari tanggal pengujian, lakukan pengisian status untuk Dijadwalkan agar
      dilakukan tera ulang atau Dibatalkan untuk membatalkan pengajuan tera.
    </div>
    @if ($loading)

    <di role="status"
      class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-3 p-4 border border-gray-200 rounded shadow animate-pulse ">
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
      <div class="w-full  p-2 ">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 mb-2.5 w-3/5"></div>
        <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 w-3/4"></div>
      </div>
  </div>

  <span class="sr-only">Loading...</span>
  </di>

  @else
  <ul class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-3">
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/tum-bbm'
        class="relative w-full flex items-center justify-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only">Notifications</span>
        TUM BBM
        @if ($jumlahTidakUpdate['tum-bbm'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['tum-bbm']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/timbangan-elektronik-kelas'
        class="w-full justify-center relative inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Timbangan Elektronik Kelas
        @if ($jumlahTidakUpdate['timbangan-elektronik-kelas'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['timbangan-elektronik-kelas']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/timbangan-jembatan'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Timbangan Jembatan
        @if ($jumlahTidakUpdate['timbangan-jembatan'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['timbangan-jembatan']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/timbangan-cepat'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Timbangan Cepat
        @if ($jumlahTidakUpdate['timbangan-cepat'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['timbangan-cepat']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/timbangan-pegas'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Timbangan Pegas
        @if ($jumlahTidakUpdate['timbangan-pegas'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['timbangan-pegas']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/timbangan-meja'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Timbangan Meja
        @if ($jumlahTidakUpdate['timbangan-meja'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['timbangan-meja']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/timbangan-bobot-ingsut'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Timbangan Bobot Ingsut
        @if ($jumlahTidakUpdate['timbangan-bobot-ingsut'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['timbangan-bobot-ingsut']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/timbangan-sentisimal'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Timbangan Sentisimal
        @if ($jumlahTidakUpdate['timbangan-sentisimal'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['timbangan-sentisimal']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/pompa-ukur-bbm'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Pompa Ukur BBM
        @if ($jumlahTidakUpdate['pompa-ukur-bbm'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['pompa-ukur-bbm']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/dacin'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Dacin
        @if ($jumlahTidakUpdate['dacin'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['dacin']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/neraca'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Neraca
        @if ($jumlahTidakUpdate['neraca'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['neraca']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/takaran-basah-kering'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Timbangan Basah/Kering
        @if ($jumlahTidakUpdate['takaran-basah-kering'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['takaran-basah-kering']}}
        </div>
        @endif
      </a>
    </li>
    <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
      <a href='/layanan/data-tera/meter-kayu'
        class="relative w-full justify-center inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
        <span class="sr-only ">Notifications</span>
        Meter Kayu
        @if ($jumlahTidakUpdate['meter-kayu'] == 0)
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
        </div>
        @else
        <div
          class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          {{$jumlahTidakUpdate['meter-kayu']}}
        </div>
        @endif
      </a>
    </li>
  </ul>
  @endif
</div>
</div>