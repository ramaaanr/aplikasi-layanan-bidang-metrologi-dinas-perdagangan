<div x-data="{success: true}">
  @if (session('success'))
  <div id="popup-modal" tabindex="-1" class="flex bg-dark bg-opacity-80  content-center overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full">
    <div class="relative p-4  w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

        <div class="p-4 md:p-5 text-center">
          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Data Kendaraan Berhasil Dimasukkan</h3>
          <a href="/pengelolaan-layanan/data-kendaraan" class="text-white bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
            Kembali Ke Halaman Data Kendaraan
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
          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Data Kendaraan Gagal Dimasukan,
            Database bermasalah</h3>
          <a href="/pengelolaan-layanan/data-kendaraan" class="text-white bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
            Kembali Ke Halaman Data Kendaraan
          </a>
        </div>
      </div>
    </div>
  </div>
  @endif

  <div class="card p-4 mb-3">
    <h1 class="text-lg font-bold">Input Data Kendaraan</h1>
    <form wire:submit.prevent="submit" class="form-kendaraan md:grid md:grid-cols-2 md:gap-x-4 lg:gap-x-8">
      <div class="order-1 form-group-container my-2">
        <p class="text-sm md:text-base font-semibold">Detail Kendaraan</p>
        <div class="relative mt-3">
          <input wire:model.live="merek_kendaraan" name="nama_kendaraan" type="text" id="nama_kendaraan" class="form-input peer " placeholder=" " />
          <label for="nama_kendaraan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Merek
            Kendaraan</label>
        </div>
        @error('merek_kendaraan')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror

        <div class="relative mt-3">
          <input wire:model.live='nomor_polisi' name="nomor_polisi" type="text" id="nomor_polisi" class="form-input peer" placeholder=" "></input>

          <label for="nomor_polisi" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor
            Polisi</label>
        </div>
        @error('nomor_polisi')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror

        <div class="relative mt-3">
          <input wire:model.live='nomor_rangka' name="nomor_rangka" type="text" id="nomor_rangka" class="form-input peer" placeholder=" "></input>
          <label for="nomor_rangka" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor
            Rangka</label>
        </div>
        @error('nomor_rangka')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>

      <div class="order-2 form-group-container my-2">
        <p class="text-sm md:text-base font-semibold">Perusahaan</p>
        <div class="relative mt-3">
          <select wire:model.live="perusahaan_id" id="perusahaan" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
            <option value="">Pilih Perusahaan</option>
            @foreach ($dataPerusahaan as $perusahaan)
            <option value="{{$perusahaan->id}}">{{$perusahaan->nama_perusahaan}}</option>
            @endforeach
          </select>

          <label for="perusahaan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
            perusahaan</label>
        </div>
        @error('perusahaan_id')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>

      <div class="order-3 form-group-container my-2">
        <p class="text-sm md:text-base font-semibold">STNK</p>
        <div class="relative mt-3">
          <input wire:model.live="pemilik_stnk" name="pemilik_stnk" type="text" id="pemilik_stnk" class="form-input peer " placeholder=" " />
          <label for="pemilik_stnk" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Pemilik
            STNK</label>
        </div>
        @error('pemilik_stnk')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror

        <div class="relative mt-3">
          <input wire:model.live="alamat_stnk" name="alamat_stnk" type="text" id="alamat_stnk" class="form-input peer " placeholder=" " />
          <label for="alamat_stnk" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat
            STNK</label>
        </div>
        @error('alamat_stnk')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>

      <div class="order-4 form-group-container my-2">
        <p class="text-sm md:text-base font-semibold">Nominal TUM BBM</p>
        <div class="form-group-container my-2">
          <div class="relative mt-3">
            <select wire:model.live="volume" id="volume" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
              <option value="">Pilih Volume</option>
              <option value="5000">5.000L</option>
              <option value="8000">8.000L</option>
              <option value="10000">10.000L</option>
              <option value="16000">16.000L</option>
              <option value="20000">20.000L</option>
            </select>

            <label for="Volume" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
              Volume</label>
          </div>
          @error('volume')
          <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
          @enderror
          <div class="relative mt-3">
            <select wire:model.live="kompartemen" id="kompartemen" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
              <option value="">Pilih Kompartemen</option>
              <option value="1">1 (Satu)</option>
              <option value="2">2 (Dua)</option>
            </select>
            <label for="kompartemen" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
              Kompartemen</label>
          </div>
          @error('kompartemen')
          <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
          @enderror
        </div>
      </div>

      @if ($isOnUpdate)
      <button wire:click="update" type="button" class="mt-6 order-5 col-span-2  w-full button-primary">
        Update Data Kendaraan
      </button>
      @else
      <button type="submit" class="mt-6 order-5 col-span-2  w-full button-primary">
        Tambah Data Kendaraan
      </button>
      @endif

    </form>
  </div>
</div>