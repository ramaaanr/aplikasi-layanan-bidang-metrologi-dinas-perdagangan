<div class="card-sm p-4 min-h-[74vh] flex flex-col justify-start">

  @if ($deletedId)
  <div id="popup-modal" tabindex="-1"
    class="flex bg-dark bg-opacity-80  content-center overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full">
    <div class="relative p-4  w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="p-4 md:p-5 text-center">
          <svg class="w-[36px] h-[36px] mx-auto text-gray-800 dark:text-white" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z" />
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yaking ingin menghapus
            data perusahaan?</h3>
          <a href="/pengelolaan-layanan/delete-perusahaan/?id={{$deletedId}}"
            class="text-white bg-red-400 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
            Hapus Data
          </a><a href="/pengelolaan-layanan/data-perusahaan"
            class="text-white bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
            Batal
          </a>
        </div>
      </div>
    </div>
  </div>
  @endif

  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">Tabel Data Perusahaan</h3>
  <!-- 🎬 Action Container Start -->
  <div class="action-container grid grid-cols-2 md:grid-cols-3 gap-x-2" x-data="{ selectValue: 'Berdasarkan' }">
    <!-- 🔍 Input Search Start-->
    <div class=" input__container relative mb-2 flex flex-wrap flex-col w-full">
      <input wire:model.live="query" type="text " class="input-sm text-sm" placeholder="cari dokumen...">
      <button class="absolute right-2 top-1 fill-grey hover:fill-dark-grey">
        <svg class="fill-inherit " xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="12">
          <path
            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
        </svg>
      </button>
    </div>
    <!-- 🔍 Input Search End-->


    <!-- ⏬ Dropdown Start -->
    <select wire:model.live="queryCategory"
      class="input-sm bg-white text-sm text-left inline-flex justify-between text-grey">
      <option selected value="nama_perusahaan">Nama Perusahaan</option>
      <option value="alamat_skhp">Alamat Perusahaan</option>
      <option value="kota_skhp">Kota Perusahaan</option>
      <option value="provinsi_skhp">Provinsi Perusahaan</option>
      <option value="tanggal_pengisian">Tanggal pengisian</option>
    </select>
    <!-- ⏬ Dropdown End -->


    <!-- ➕ Pengajuan Start -->
    <a href="/pengelolaan-layanan/ajukan-perusahaan/"
      class="button-primary-sm w-full h-fit flex justify-center col-span-2 md:col-auto">
      <svg class="w-[20px] h-[20px] fill-light mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="currentColor" viewBox="0 0 18 18">
        <path
          d="M17 16h-1V2a1 1 0 1 0 0-2H2a1 1 0 0 0 0 2v14H1a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM5 4a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4Zm0 5V8a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1Zm6 7H7v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm2-7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1Zm0-4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1Z" />
      </svg>
      <span class="text-sm text-light">
        Tambah Data Perusahaan
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
              Nama Perusahaan
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-10">
            <div class="flex items-center">
              Alamat Perusahaan
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Kota Perusahaan
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Provinsi perusahaan
              <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                </svg></a>
            </div>
          </th>
          <th scope="col" class="p-3 w-9">
            <div class="flex items-center">
              Jenis Dukungan
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
        @if ($dataPerusahaan[0] == null)
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
        @foreach ($dataPerusahaan as $perusahaan)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $perusahaan->nama_perusahaan }}
          </th>
          <td class="p-3 w-10">
            {{ $perusahaan->alamat_skhp }}
          </td>
          <td class="p-3 w-9">
            {{ $perusahaan->kota_skhp }}
          </td>
          <td class="p-3 w-9">
            {{ $perusahaan->provinsi_skhp }}
          </td>
          <td class="p-3 w-9">
            {{ $perusahaan->jenis_dukungan }}
          </td>

          <td class="p-3 w-9">
            {{ $perusahaan->tanggal_pengisian }}
          </td>
          <td class="p-3 w-9">
            <a href="/pengelolaan-layanan/update-perusahaan/?id={{$perusahaan->id}}" class="underline">Edit</a>
            <button wire:click="delete({{$perusahaan->id}})" class="underline">Hapus</button>
          </td>
        </tr>
        @endforeach
        @endif

      </tbody>
    </table>
  </div>
  <div class="table-pagination__container flex justify-end mt-2 ">
    @if ($dataPerusahaan->hasPages())
    <nav class="flex w-fit" role="navigation">
      @if ($dataPerusahaan->onFirstPage())
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
        @if ($dataPerusahaan->onLastPage())
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