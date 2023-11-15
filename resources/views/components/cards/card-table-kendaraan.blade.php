<div class="card-sm p-4 min-h-[74vh] flex flex-col justify-start">



  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">Tabel Data Kendaraan</h3>
  <!-- 🎬 Action Container Start -->
  <div class="action-container grid grid-cols-2 md:grid-cols-3 gap-x-2" x-data="{ selectValue: 'Berdasarkan' }">
    <!-- 🔍 Input Search Start-->
    <div class=" input__container relative mb-2 flex flex-wrap flex-col w-full">
      <input wire:model.live="query" type="text " class="input-sm text-sm" placeholder="cari dokumen...">
      <button class="absolute right-2 top-1 fill-grey hover:fill-dark-grey">
        <svg class="fill-inherit bg-light" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="12">
          <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
        </svg>
      </button>
    </div>
    <!-- 🔍 Input Search End-->

    <!-- ⏬ Dropdown Start -->
    <select wire:model.live="queryCategory" class="input-sm bg-white text-sm text-left inline-flex justify-between text-grey">
      <option selected value="nomor_polisi">Nomor Polisi</option>
      <option value="merek_kendaraan">Merek Kendaraan</option>
      <option value="pemilik_stnk">Pemilik Kendaraan (STNK)</option>
      <option value="alamat_stnk">Alamat Kendaraan (STNK)</option>
      <option value="tanggal_pengisian">Tanggal pengisian</option>
    </select>
    <!-- ⏬ Dropdown End -->


    <!-- ➕ Pengajuan Start -->
    <a href="/pengelolaan-layanan/ajukan-kendaraan/" class="button-primary-sm w-full h-fit flex justify-center col-span-2 md:col-auto">
      <svg class="w-[20px] h-[20px] fill-light mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
        <path d="M19.9 6.58c0-.009 0-.019-.006-.027l-2-4A1 1 0 0 0 17 2h-4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.3c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0A3.173 3.173 0 0 0 7.7 12h4.6c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0 3.177 3.177 0 0 0-.049-.5h.3a1 1 0 0 0 1-1V7a.99.99 0 0 0-.1-.42ZM16.382 4l1 2H13V4h3.382ZM4.5 13.75a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Zm11 0a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Z" />
      </svg>
      <span class="text-sm text-light">
        Tambah Data Kendaraan
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
              Nomor Kendaraan
            </div>
          </th>
          <th scope="col" class="p-3 w-10">
            <div class="flex items-center">
              Merek Kendaraan
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Volume
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Kompartemen
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Pemilik (STNK)
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Alamat (STNK)
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Tanggal Pengisian
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
        @if ($dataKendaraan[0] == null)
        <tr>
          <td colspan="6">
            <div class="flex items-center p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300" role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">Dokumen Kosong!</span> Data Kendaraan masih belum ada yang melakukan
                pengisian.
              </div>
            </div>
          </td>
        </tr>
        @else
        @foreach ($dataKendaraan as $kendaraan)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $kendaraan->nomor_polisi }}
          </th>
          <td class="p-3 w-10">
            {{ $kendaraan->merek_kendaraan }}

          </td>
          <td class="p-3 w-9">
            {{ $kendaraan->volume }}
          </td>
          <td class="p-3 w-9">
            {{ $kendaraan->kompartemen }}
          </td>
          <td class="p-3 w-9">
            {{ $kendaraan->pemilik_stnk }}
          </td>
          <td class="p-3 w-9">
            {{ $kendaraan->alamat_stnk }}
          </td>
          <td class="p-3 w-9">
            {{ $kendaraan->tanggal_pengisian }}
          </td>
          <td class="p-3 w-9">
            <a href="/pengelolaan-layanan/update-kendaraan/?id={{$kendaraan->id}}" class="underline">Edit</a>
          </td>
        </tr>
        @endforeach
        @endif

      </tbody>
    </table>
  </div>
  <div class="table-pagination__container flex justify-end mt-2 ">
    @if ($dataKendaraan->hasPages())
    <nav class="flex w-fit" role="navigation">
      @if ($dataKendaraan->onFirstPage())
      <button disabled class="mr-2 button-light-disabled flex items-center fill-dark-grey"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 -960 960 960" width="16">
          <path d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z" />
        </svg>
        <p class="text-sm">Sebelumnya</p>
      </button>
      @else
      <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="mr-2 button-light flex items-center fill-dark-grey"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 -960 960 960" width="16">
          <path d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z" />
        </svg>
        <p class="text-sm">Sebelumnya</p>
      </button>
      @endif
      </span>
      <span>
        @if ($dataKendaraan->onLastPage())
        <button disabled class="button-light-disabled flex items-center fill-dark-grey">
          <p class="text-sm">Selanjutnya</p><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 -960 960 960" width="16">
            <path d="m242-200 200-280-200-280h98l200 280-200 280h-98Zm238 0 200-280-200-280h98l200 280-200 280h-98Z" />
          </svg>
        </button>
        @else
        <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="button-light flex items-center fill-dark-grey">
          <p class="text-sm">Selanjutnya</p><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 -960 960 960" width="16">
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