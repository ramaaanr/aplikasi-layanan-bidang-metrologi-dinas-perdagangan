<div class="card-sm p-4 min-h-[74vh] flex flex-col justify-start">
  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">Pengajuan Tera {{ $sentenceCaseTitle }}</h3>
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
      <option value="kode_pengajuan">Cari Kode Pengajuan</option>
      <option selected value="nama_pemohon">Cari Pemohon</option>
      <option value="tanggal_pengajuan">Cari Tanggal Pengajuan</option>
      <option value="tanggal_pengujian">Cari Tanggal Pengujian</option>
    </select>
    <!-- ⏬ Dropdown End -->


    <!-- ➕ Pengajuan Start -->
    <a class="button-primary-sm w-full h-fit flex justify-center col-span-2 md:col-auto">
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
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>

</div>

</div>