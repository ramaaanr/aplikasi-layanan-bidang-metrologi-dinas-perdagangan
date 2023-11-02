<div class="card overdate-tera">
  <div id="alert-additional-content-1" class="p-4 mb-4 text-dark-grey border rounded-lg " role="alert">
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
    @include("components.overdate-skeleton")
    @else
    <ul class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-3">

      @foreach ($jumlahTidakUpdate as $teraKey => $teraValue)
      <li class="w-full border border-light-grey rounded-md hover:bg-light-2">
        <a href="/layanan/data-tera/{{$teraKey}}"
          class="relative w-full flex items-center justify-center px-5 py-2.5 text-sm font-medium text-center text-dark-grey hover:text-dark  rounded-lg  focus:ring-4 ">
          <span class="sr-only">Notifications</span>
          {{$this->formatString($teraKey)}}
          @if ($teraValue == 0)
          <div
            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-green-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
          </div>
          @else
          <div
            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
            {{$teraValue}}
          </div>
          @endif
        </a>
      </li>
      @endforeach
    </ul>
    @endif
  </div>
</div>

<--