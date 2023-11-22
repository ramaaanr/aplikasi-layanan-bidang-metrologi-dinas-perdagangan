<div class="card-sm p-4 min-h-[74vh] flex flex-col justify-start">
  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">Pengelolaan Tera {{ $sentenceCaseTitle }}</h3>
  <!-- 🎬 Action Container Start -->
  <div x-bind:class="{ 'grid-cols-3 md:grid-cols-4': '{{$tera}}' === 'tum-bbm' }"
    class="action-container grid grid-cols-2 md:grid-cols-3 gap-x-2" x-data="{ selectValue: 'Berdasarkan' }">
    <!-- 💁‍♂️ Jenis Dukungan Button Start -->
    @if($tera == "tum-bbm")
    <select wire:model.live="jenisDukungan"
      class="input-sm bg-white text-sm text-left inline-flex justify-between text-grey">
      <option value="subsidi">Subsidi</option>
      <option value="non-subsidi">Non Subsidi</option>
    </select>
    @endif
    <!-- 💁‍♂️ Jenis Dukungan Button End -->

    <!-- 🔍 Input Search Start-->
    <div class=" input__container relative mb-2 flex flex-wrap flex-col w-full">
      <input wire:model.live="query" type="text " class="input-sm text-sm" placeholder="cari dokumen...">
      <button class="absolute right-2 top-1 fill-grey hover:fill-dark-grey">
        <svg class="fill-inherit bg-light" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
          width="12">
          <path
            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
        </svg>
      </button>
    </div>
    <!-- 🔍 Input Search End-->


    <!-- ⏬ Dropdown Start -->
    <select wire:model.live="queryCategory"
      class="input-sm bg-white text-sm text-left inline-flex justify-between text-grey">
      <option value="kode_pengajuan">Cari Kode Pengajuan</option>
      <option selected value="nama_pemohon">Cari Pemohon</option>
      <option value="tanggal_pengajuan">Cari Tanggal Pengajuan</option>
      <option value="tanggal_pengujian">Cari Tanggal Pengujian</option>
    </select>
    <!-- ⏬ Dropdown End -->



    <!-- ➕ Pengajuan Start -->
    <a href="/pengajuan-layanan/ajukan-tera/{{$tera}}/"
      class="button-primary-sm w-full h-fit flex justify-center col-span-3 md:col-auto">
      <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
        <path xmlns="http://www.w3.org/2000/svg"
          d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
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

            </div>
          </th>
          <th scope="col" class="p-3 w-10">
            <div class="flex items-center">
              Pemohon

            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Tanggal Pengajuan

            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Tanggal Pengujian

            </div>
          </th>
          @if ($tera == 'tum-bbm')
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Tanggal Cek Fisik

            </div>
          </th>
          @endif
          <th scope="col" class="p-3 w-3">
            <div class="flex items-center">
              Status

            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Keterangan
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Aksi
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        @if ($dataTera[0] == null)
        <tr>
          <td colspan="6">
            <div
              class="flex items-center p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300"
              role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">Dokumen Kosong!</span> Tera masih belum ada yang melakukan pengisian.
              </div>
            </div>
          </td>
        </tr>
        @else
        @foreach ($dataTera as $dataPengajuan)
        <tr
          x-bind:class="{ '!bg-red-50': {{$this->isOnDeadline($dataPengajuan->tanggal_pengujian) && ($dataPengajuan->status == 'Diajukan' || $dataPengajuan->status == 'Dijadwalkan' )}} }"
          class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <!-- 🧑‍💻 Kode Pengajuan -->
          <th scope="row" class="p-3 w-9 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $dataPengajuan->kode_pengajuan }}
          </th>

          <!-- 🧑 Nama Pemohon -->
          <td class="p-3 w-10">
            {{ $dataPengajuan->nama_pemohon }}
          </td>

          <!-- 📅🆙 Tanggal Pengajuan -->
          <td class="p-3 w-9">
            {{ $dataPengajuan->tanggal_pengajuan }}
          </td>

          <!-- 📅✔️ Tanggal Pengujian-->
          <td class="p-3 w-9">
            {{ $dataPengajuan->tanggal_pengujian }}
          </td>

          @if ($tera == 'tum-bbm')
          <!-- 📅✔️ Tanggal Pengujian-->
          <td class="p-3 w-9">
            {{ $dataPengajuan->tanggal_cek_fisik }}
          </td>
          @endif


          <!-- 📊 Status -->
          <td class="p-3 w-3">
            <div x-data="{ status: '{{$dataPengajuan->status}}' }">
              <div x-bind:class="{
        'bg-yellow-300': status == 'Diajukan',
        'bg-red-500': status == 'Dibatalkan',
        'bg-green-500': status == 'Selesai',
        'bg-blue-500': status == 'Dijadwalkan'
    }" class="w-24 mx-auto h-fit p-1 rounded-lg">
                <p class="text-center text-light font-semibold" x-text="status"></p>
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            {{ $dataPengajuan->keterangan }}
          </td>
          <!-- 🎬 Aksi -->
          <td class="p-3 w-9">

            @if ($dataPengajuan->status == 'Selesai')
            <a class="pointer-events-none block mb-1" href="">
              <svg class="w-[24px] h-[24px] bg-light-grey rounded-sm p-1 fill-light" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path
                  d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z" />
                <path
                  d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z" />
              </svg>
            </a>
            <a href="/pengelolaan-layanan/preview-tera/{{$tera}}?id={{$dataPengajuan->id}}"><svg
                class="w-[24px] h-[24px] bg-green-400 rounded-sm p-1 fill-light" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z" />
                <path
                  d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z" />
              </svg></a>
            @else
            <a class="block mb-1" href="/pengelolaan-layanan/update-tera/{{$tera}}?id={{$dataPengajuan->id}}">
              <svg class="w-[24px] h-[24px] bg-blue-600 rounded-sm p-1 fill-light" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path
                  d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z" />
                <path
                  d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z" />
              </svg>
            </a>
            <a class="pointer-events-none" href="">
              <svg class="w-[24px] h-[24px] bg-light-grey rounded-sm p-1 fill-light" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z" />
                <path
                  d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z" />
              </svg>
            </a>
            @endif
          </td>

        </tr>
        @endforeach
        @endif
      </tbody>

    </table>
  </div>
  <div class="table-pagination__container flex justify-end mt-2 ">
    @if ($dataTera->hasPages())
    <nav class="flex w-fit" role="navigation">
      @if ($dataTera->onFirstPage())
      <button disabled class="mr-2 button-light-disabled flex items-center fill-dark-grey"><svg
          xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 -960 960 960" width="16">
          <path
            d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z" />
        </svg>
        <p class="text-sm">Sebelumnya</p>
      </button>
      @else
      <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev"
        class="mr-2 button-light flex items-center fill-dark-grey"><svg xmlns="http://www.w3.org/2000/svg" height="16"
          viewBox="0 -960 960 960" width="16">
          <path
            d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z" />
        </svg>
        <p class="text-sm">Sebelumnya</p>
      </button>
      @endif
      </span>
      <span>
        @if ($dataTera->onLastPage())
        <button disabled class="button-light-disabled flex items-center fill-dark-grey">
          <p class="text-sm">Selanjutnya</p><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 -960 960 960"
            width="16">
            <path d="m242-200 200-280-200-280h98l200 280-200 280h-98Zm238 0 200-280-200-280h98l200 280-200 280h-98Z" />
          </svg>
        </button>
        @else
        <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
          class="button-light flex items-center fill-dark-grey">
          <p class="text-sm">Selanjutnya</p><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 -960 960 960"
            width="16">
            <path d="m242-200 200-280-200-280h98l200 280-200 280h-98Zm238 0 200-280-200-280h98l200 280-200 280h-98Z" />
          </svg>
        </button>
        @endif
      </span>
    </nav>
    @endif
  </div>
</div>

</div>

</div>