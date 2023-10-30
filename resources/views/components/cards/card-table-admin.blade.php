<div class="card-sm p-4 min-h-[74vh] flex flex-col justify-start">



  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">Pengajuan Tera {{ $sentenceCaseTitle }}</h3>
  <!-- 🎬 Action Container Start -->
  <div class="action-container grid grid-cols-2 md:grid-cols-3 gap-x-2" x-data="{ selectValue: 'Berdasarkan' }">
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
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-10">
            <div class="flex items-center">
              Pemohon
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Tanggal Pengajuan
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Tanggal Pengujian
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
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
        @foreach ($dataTera as $dataPengajuan)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
          @if ($dataPengajuan->status == 'Selesai')
          <td class="p-3 w-9">
            <a class="underline text-light-grey pointer-events-none" href="">Update</a>
            <a class="underline" href="/pengelolaan-layanan/preview-tera/{{$tera}}?id={{$dataPengajuan->id}}">Cetak</a>
          </td>
          @else
          <td class="p-3 w-9">
            <a class="underline" href="/pengelolaan-layanan/update-tera/{{$tera}}?id={{$dataPengajuan->id}}">Update</a>
            <a class="underline text-light-grey pointer-events-none" href="">Cetak</a>
          </td>
          @endif

        </tr>
        @endforeach
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