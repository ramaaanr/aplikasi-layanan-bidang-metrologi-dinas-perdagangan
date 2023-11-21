<div class="card-sm p-4 min-h-[74vh] flex flex-col justify-start">
  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">Tabel Data Perusahaan</h3>
  <!-- 🎬 Action Container Start -->
  <div class="action-container grid grid-cols-2 md:grid-cols-3 gap-x-2" x-data="{ selectValue: 'Berdasarkan' }">
    <!-- 🔍 Input Search Start-->
    <div class=" input__container relative mb-2 flex flex-wrap flex-col w-full">
      <input disabled type="text " class="input-sm text-sm" placeholder="cari dokumen...">
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
    <select disabled class="input-sm bg-white text-sm text-left inline-flex justify-between text-grey">
      <option value="kode_pengajuan">Nama Perusahaan</option>

    </select>
    <!-- ⏬ Dropdown End -->


    <!-- ➕ Pengajuan Start -->
    <a class="button-primary-sm w-full h-fit flex justify-center col-span-2 md:col-auto">
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
              Aksi </div>
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

</div>