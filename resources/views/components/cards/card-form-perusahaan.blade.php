<div x-data="{success: true}">
  @if (session('success'))
  <div id="popup-modal" tabindex="-1" class="flex bg-dark bg-opacity-80  content-center overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full">
    <div class="relative p-4  w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

        <div class="p-4 md:p-5 text-center">
          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Data Perusahaan Berhasil Dimasukkan</h3>
          <a href="/pengelolaan-layanan/data-perusahaan" class="text-white bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
            Kembali Ke Halaman Data Perusahaan
          </a>
        </div>
      </div>
    </div>
  </div>
  @endif
  @if (session('error'))
  <div id="popup-modal" tabindex="-1" class="flex bg-dark bg-opacity-80  content-center overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full">
    <div class="relative p-4  w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="p-4 md:p-5 text-center">
          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Data Perusahaan Gagal Dimasukan,
            Database bermasalah</h3>
          <a href="/pengelolaan-layanan/data-perusahaan" class="text-white bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
            Kembali Ke Halaman Data Perusahaan
          </a>
        </div>
      </div>
    </div>
  </div>
  @endif

  <div class="card p-4 mb-3">
    <h1 class="text-lg font-bold">Input Data Perusahaan</h1>
    <form wire:submit.prevent="submit" class="form-perusahaan md:grid md:grid-cols-2 md:gap-x-4 lg:gap-x-8">
      <div class="order-1 form-group-container my-2">
        <p class="text-sm md:text-base font-semibold">Perusahaan</p>
        <div class="relative mt-3">
          <input wire:model.live="nama_perusahaan" name="nama_perusahaan" type="text" id="nama_perusahaan" class="form-input peer " placeholder=" " />
          <label for="nama_perusahaan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nama
            Perusahaan</label>
        </div>
        @error('nama_perusahaan')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror

        <div class="relative mt-3">
          <textarea wire:model.live='alamat_skhp' name="alamat_skhp" type="text" id="alamat_skhp" class="form-input peer" placeholder=" "></textarea>

          <label for="alamat_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
        </div>
        @error('alamat_skhp')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>

      <div class="order-2 form-group-container my-2">
        <p class="text-sm md:text-base font-semibold">Detail Alamat Perusahaan</p>

        <div class="relative mt-3">
          <input wire:model.live="kelurahan_skhp" name="kelurahan_skhp" type="text" id="kelurahan_skhp" class="form-input peer " placeholder=" " />
          <label for="kelurahan_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kelurahan</label>
        </div>
        @error('kelurahan_skhp')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror

        <div class="relative mt-3">
          <input wire:model.live="kecamatan_skhp" name="kecamatan_skhp" type="text" id="kecamatan_skhp" class="form-input peer " placeholder=" " />
          <label for="kecamatan_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kecamatan</label>
        </div>
        @error('kecamatan_skhp')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror

        <div class="relative mt-3">
          <input wire:model.live="kota_skhp" name="kota_skhp" type="text" id="kota_skhp" class="form-input peer " placeholder=" " />
          <label for="kota_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kota</label>
        </div>
        @error('kota_skhp')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror

        <div class="relative mt-3">
          <input wire:model.live="provinsi_skhp" name="provinsi_skhp" type="text" id="provinsi_skhp" class="form-input peer " placeholder=" " />
          <label for="provinsi_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Provinsi</label>
        </div>
        @error('provinsi_skhp')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>

      @if ($isOnUpdate)
      <button wire:click="update" type="button" class="mt-6 order-3 col-span-2  w-full button-primary">
        Update Data Perusahaan
      </button>
      @else
      <button type="submit" class="mt-6 order-3 col-span-2  w-full button-primary">
        Tambah Data Perusahaan
      </button>
      @endif

    </form>
  </div>
</div>