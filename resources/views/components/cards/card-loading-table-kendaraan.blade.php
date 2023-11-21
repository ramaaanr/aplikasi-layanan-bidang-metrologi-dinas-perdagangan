<div class="card-sm p-4 min-h-[74vh] flex flex-col justify-start">



  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">Tabel Data Kendaraan</h3>
  <!-- 🎬 Action Container Start -->
  <div class="action-container grid grid-cols-3 md:grid-cols-4 gap-x-2" x-data="{ selectValue: 'Berdasarkan' }">
    <!-- 🛵 Select Kendaraan Start  -->
    <select disable wire:model.live="perusahaan" id="perusahaan"
      class="input-sm bg-white text-sm text-left inline-flex justify-between text-dark-grey">
      <option value="">Semua Perusahaan</option>
    </select>
    <!-- 🛵 Select Kendaraan End  -->

    <!-- 🔍 Input Search Start-->
    <div class=" input__container relative mb-2 flex flex-wrap flex-col w-full">
      <input disable wire:model.live="query" type="text " class="input-sm text-sm" placeholder="cari dokumen...">
      <button disable class="absolute right-2 top-1 fill-grey hover:fill-dark-grey">
        <svg class="fill-inherit" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="12">
          <path
            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
        </svg>
      </button>
    </div>
    <!-- 🔍 Input Search End-->

    <!-- ⏬ Dropdown Start -->
    <select disable wire:model.live="queryCategory"
      class="input-sm bg-white text-sm text-left inline-flex justify-between text-grey">
      <option selected value="nomor_polisi">Nomor Polisi</option>
    </select>
    <!-- ⏬ Dropdown End -->


    <!-- ➕ Pengajuan Start -->
    <a href="/pengelolaan-layanan/ajukan-kendaraan/"
      class="button-primary-sm w-full h-fit flex justify-center col-span-3 md:col-auto">
      <svg class="w-[18px] h-[18px] fill-light mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="currentColor" viewBox="0 0 20 16">
        <path
          d="M19.9 6.58c0-.009 0-.019-.006-.027l-2-4A1 1 0 0 0 17 2h-4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.3c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0A3.173 3.173 0 0 0 7.7 12h4.6c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0 3.177 3.177 0 0 0-.049-.5h.3a1 1 0 0 0 1-1V7a.99.99 0 0 0-.1-.42ZM16.382 4l1 2H13V4h3.382ZM4.5 13.75a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Zm11 0a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Z" />
      </svg>
      <span class="text-xs text-light">
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
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </th>
          <td class="p-3 w-10">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>

          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>

          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-3">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
          <td class="p-3 w-9">
            <div class="loading-bar animate-pulse">
              <div class="loading-bar h-4 w-8 rounded-lg bg-light-2 mb-2">
              </div>
              <div class="loading-bar h-3 w-full rounded-lg bg-light-2">
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

</div>

</div>