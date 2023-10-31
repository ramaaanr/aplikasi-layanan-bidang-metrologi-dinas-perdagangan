<div class="card-sm p-4  min-h-[74vh]">

  {{-- Modal --}}
  <!-- Main modal -->
  @if (session('success'))
  @include('components.alert-succes', ['tera' => $tera, 'kode_pengajuan' => session('success')])
  @endif
  @if (session('error'))
  @include('components.alert-error', ['tera' => $tera, 'message' => session('error')])
  @endif
  {{-- Modal --}}

  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">
    {{ $isOnUpdate ? "Pengelolaan Tera $sentenceCaseTitle" : "Pengajuan Tera $sentenceCaseTitle" }}
  </h3>
  <form wire:submit.prevent='submit' class="md:grid md:grid-cols-2 md:gap-x-4 lg:gap-x-8">
    @csrf
    @if ($isOnUpdate)
    <div class="order-first md:col-span-2 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Status</p>
      <div class="flex gap-x-6">
        <div class="w-full relative mt-3">
          <label class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4" for="status">Ubah Status</label>
          <select wire:model.live='form.status' id="status" class="bg-light  border border-dark-grey text-dark-grey text-sm rounded-lg focus:ring-primary focus:border-grey block w-full p-2.5 pt-4 pl-4 ">
            <option value="Diajukan">Diajukan</option>
            <option value="Dijadwalkan">Dijadwalkan</option>
            <option value="Dibatalkan">Dibatalkan</option>
            <option value="Selesai">Selesai</option>
          </select>
        </div>
        <div class="w-full relative mt-3">
          <label class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4" for="keterangan">Status Keterangan</label>
          <textarea wire:model.live='form.keterangan' id="keterangan" rows="4" class="block p-2.5 pt-4 pl-3 w-full text-sm text-dark-grey bg-light rounded-lg border border-dark-grey focus:ring-primary focus:border-primary " placeholder="Keterangan"></textarea>
          @error('form.keterangan')
          <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
          @enderror
        </div>
      </div>

    </div>
    @endif
    <div class="order-1 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Pemohon</p>
      <div class="relative mt-3">
        <input wire:model.live="form.nama_pemohon" name="nama_pemohon" type="text" id="nama_pemohon" class="form-input peer " placeholder=" " />
        <label for="nama_pemohon" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nama
          Pemohon</label>
      </div>
      @error('form.nama_pemohon')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror

      <div class="relative mt-3">
        <input wire:model.live='form.alamat_pemohon' name="alamat_pemohon" type="text" id="alamat_pemohon" class="form-input peer" placeholder=" " />

        <label for="alamat_pemohon" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
      </div>
      @error('form.alamat_pemohon')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    <div class="order-3 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Surat Keterangan Hasil Pengujian (SKHP) Atas Nama</p>
      <div class="relative mt-3">
        <input wire:model.live='form.nama_skhp' name="nama_skhp" type="text" id="nama_skhp" class="form-input peer" placeholder=" " />
        <label for="nama_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nama
        </label>
      </div>
      @error('form.nama_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.alamat_skhp' name="alamat_skhp" type="text" id="alamat_skhp" class="form-input peer" placeholder=" " />
        <label for="alamat_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
      </div>
      @error('form.alamat_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror

      <div class="relative mt-3">
        <input wire:model.live='form.kelurahan_skhp' name="kelurahan_skhp" type="text" id="kelurahan_skhp" class="form-input peer" placeholder=" " />
        <label for="kelurahan_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kelurahan</label>
      </div>
      @error('form.kelurahan_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.kecamatan_skhp' name="kecamatan_skhp" type="text" id="kecamatan_skhp" class="form-input peer" placeholder=" " />
        <label for="kecamatan_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kecamatan</label>
      </div>
      @error('form.kecamatan_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.kota_skhp' name="kota_skhp" type="text" id="kota_skhp" class="form-input peer " placeholder=" " />
        <label for="kota_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kota</label>
      </div>
      @error('form.kota_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.provinsi_skhp' name="provinsi_skhp" type="text" id="provinsi_skhp" class="form-input peer " placeholder=" " />
        <label for="provinsi_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Provinsi</label>
      </div>
      @error('form.provinsi_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    <!-- 🏍️ DATA KENDARAAN -->

    <div class="order-4 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Data Kendaraan</p>
      <div class="relative mt-3">
        <input wire:model.live='form.merek_kendaraan' name="merek_kendaraan" type="text" id="merek_kendaraan" class="form-input peer" placeholder=" " />
        <label for="merek_kendaraan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Merek
          Kendaraan
        </label>
      </div>
      @error('form.merek_kendaraan')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.nomor_polisi' name="nomor_polisi" type="text" id="nomor_polisi" class="form-input peer" placeholder=" " />
        <label for="nomor_polisi" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor
          Polisi</label>
      </div>
      @error('form.nomor_polisi')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror

      <div class="relative mt-3">
        <input wire:model.live='form.nomor_rangka' name="nomor_rangka" type="text" id="nomor_rangka" class="form-input peer" placeholder=" " />
        <label for="nomor_rangka" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor
          Rangka</label>
      </div>
      @error('form.nomor_rangka')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.pemilik_stnk' name="pemilik_stnk" type="text" id="pemilik_stnk" class="form-input peer" placeholder=" " />
        <label for="pemilik_stnk" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Pemilik
          Kendaraan Sesuai STNK</label>
      </div>
      @error('form.pemilik_stnk')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.alamat_stnk' name="alamat_stnk" type="text" id="alamat_stnk" class="form-input peer " placeholder=" " />
        <label for="alamat_stnk" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat
          Pemilik Kendaraan Sesuai STNK</label>
      </div>
      @error('form.alamat_stnk')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    <div class="order-2 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Nomor Kotak Telp/HP</p>
      <div class="relative mt-3">
        <input wire:model.live='form.nomor_kontak' name="nomor_kontak" type="tel" id="nomor_kontak" class="form-input peer" placeholder=" " />
        <label for="nomor_kontak" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor
          Kotak Telp/HP</label>
      </div>
      @error('form.nomor_kontak')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    <!-- 🥤 Volume -->
    <div class="order-5 form-group-container my-2">
      <div class="form-group-container my-2">
        <p class="text-sm md:text-base font-semibold">Volume Nominal TUM BBM</p>
        <div class="relative mt-3">
          <select wire:model.live="form.volume" id="volume" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
            <option value="5000">5.000L</option>
            <option value="8000">8.000L</option>
            <option value="10000">10.000L</option>
            <option value="16000">16.000L</option>
            <option value="20000">20.000L</option>
          </select>
          <label for="Volume" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
            Volume</label>
        </div>
        @error('form.volume')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
        <div class="relative mt-3">
          <select wire:model.live="form.kompartemen" id="kompartemen" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
            <option value="1">1 (Satu)</option>
            <option value="2">2 (Dua)</option>
          </select>
          <label for="kompartemen" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
            Kompartemen</label>
        </div>
        @error('form.kompartemen')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror


      </div>
      @if ($isOnUpdate)

      <div class="form-group-container mt-6 mb-2">
        <p class="text-sm md:text-base font-semibold mb-2">Cek Fisik Tum BBM</p>
        <div class="flex items-center mb-2 pl-2">
          <input wire:model.live="form.lemping_volume_nominal" id="lemping_volume_nominal" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="lemping_volume_nominal" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apakah
            Lemping Volume Nominal Ada?</label>
        </div>
        <div class="flex items-center mb-2 pl-2">
          <input wire:model.live="form.indeks_tera" id="indeks_tera" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="indeks_tera" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apakah
            Indeks Tera Ada?</label>
        </div>
        <div class="flex items-center mb-2 pl-2">
          <input wire:model.live="form.lemping_merk_tum_bbm" id="lemping_merk_tum_bbm" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="lemping_merk_tum_bbm" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apakah
            Merk Tum BBM Ada?</label>
        </div>
      </div>
      @endif

    </div>

    @if ($isOnUpdate)
    <div class="order-6 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Kelengkapan Dokumen</p>
      <!-- 🅿️ Surat Permohonan -->
      <div class="mt-3 " x-data="{ showReupload: false }">
        <div x-show="!showReupload" class="before-reupload flex gap-x-2">
          <p class="px-2 py-1">Surat Permohonan</p>
          <button type="button" wire:click="downloadSuratPermohonan" class="text-sm button-light-sm">Lihat
            Berkas</button>
          <button type="button" x-on:click="showReupload = true" class="text-sm button-light-sm">Upload
            Ulang</button>
        </div>
        <div x-show="showReupload" class="after-reupload">
          <div class="flex mb-2">
            <p class="h-fit px-2 py-1">
              Upload Ulang Surat Permohonan
            </p>
            <button type="button" x-on:click="showReupload = false" class="text-sm button-light-sm">Batalkan</button>
          </div>
          <input accept=".pdf" wire:model.live='form.file_dokumen_surat_permohonan' name="dokumen_surat_permohonan" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_surat_permohonan" type="file">
          <p class="mt-3 text-sm text-grey" id="dokumen_surat_permohonan">Format File PDF dengan
            Maksimal 2MB
          </p>
          @error('form.file_dokumen_surat_permohonan')
          <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
          @enderror
        </div>
      </div>
      <!-- 🏍️ STNK -->
      <div class="mt-3 " x-data="{ showReupload: false }">
        <div x-show="!showReupload" class="before-reupload flex gap-x-2">
          <p class="px-2 py-1">STNK</p>
          <button type="button" wire:click="downloadSuratStnk" class="text-sm button-light-sm">Lihat
            Berkas</button>
          <button type="button" x-on:click="showReupload = true" class="text-sm button-light-sm">Upload
            Ulang</button>
        </div>
        <div x-show="showReupload" class="after-reupload">
          <div class="flex mb-2">
            <p class="h-fit px-2 py-1">
              Upload Ulang STNK
            </p>
            <button type="button" x-on:click="showReupload = false" class="text-sm button-light-sm">Batalkan</button>
          </div>
          <input accept=".pdf" wire:model.live='form.file_dokumen_stnk' name="dokumen_stnk" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_stnk" type="file">
          <p class="mt-3 text-sm text-grey" id="dokumen_stnk">Format File PDF dengan
            Maksimal 2MB
          </p>
          @error('form.file_dokumen_stnk')
          <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <!-- 🚫 Surat SKHP Sebelumbya -->
      <div class="mt-3 " x-data="{ showReupload: false }">
        <div x-show="!showReupload" class="before-reupload flex gap-x-2">
          <p class="px-2 py-1">SKHP Sebelumnya</p>
          <button type="button" wire:click="downloadSkhpSebelumnya" class="text-sm button-light-sm">Lihat
            Berkas</button>
          <button type="button" x-on:click="showReupload = true" class="text-sm button-light-sm">Upload
            Ulang</button>
        </div>
        <div x-show="showReupload" class="after-reupload">
          <div class="flex mb-2">
            <p class="h-fit px-2 py-1">
              Upload Ulang SKHP Sebelumnya
            </p>
            <button type="button" x-on:click="showReupload = false" class="text-sm button-light-sm">Batalkan</button>
          </div>
          <input accept=".pdf" wire:model.live='form.file_dokumen_skhp_sebelumnya' name="dokumen_skhp_sebelumnya" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_skhp_sebelumnya" type="file">
          <p class="mt-3 text-sm text-grey" id="dokumen_skhp_sebelumnya">Format File PDF dengan Maksimal
            2MB
          </p>
          @error('form.file_dokumen_skhp_sebelumnya')
          <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <!-- 🅿️ Bukti Pendukung Lainnya -->
      <div class="mt-3 " x-data="{ showReupload: false }">
        <div x-show="!showReupload" class="before-reupload flex gap-x-2">
          <p class="px-2 py-1">Bukti Pendukung Lainnya</p>
          <button type="button" wire:click="downloadBuktiPendukungLainnya" class="text-sm button-light-sm">Lihat
            Berkas</button>
          <button type="button" x-on:click="showReupload = true" class="text-sm button-light-sm">Upload
            Ulang</button>
        </div>
        <div x-show="showReupload" class="after-reupload">
          <div class="flex mb-2">
            <p class="h-fit px-2 py-1">
              Upload Ulang Bukti Pendukung Lainnya
            </p>
            <button type="button" x-on:click="showReupload = false" class="text-sm button-light-sm">Batalkan</button>
          </div>
          <input accept=".pdf" wire:model.live='form.file_dokumen_bukti_pendukung_lainnya' name="dokumen_bukti_pendukung_lainnya" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_bukti_pendukung_lainnya" type="file">
          <p class="mt-3 text-sm text-grey" id="dokumen_bukti_pendukung_lainnya">Format File PDF dengan
            Maksimal 2MB
          </p>
          @error('form.file_dokumen_bukti_pendukung_lainnya')
          <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>
    @else
    <div class="order-6 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Kelengkapan Dokumen</p>
      <div class="mt-3">
        <p class="text-sm">Upload Surat Permohonan</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_surat_permohonan' name="dokumen_surat_permohonan" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_surat_permohonan" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_surat_permohonan">Format File PDF dengan Maksimal
          2MB
        </p>
        @error('form.file_dokumen_surat_permohonan')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>
      <div class="mt-3">
        <p class="text-sm">Upload STNK</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_stnk' name="dokumen_stnk" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_stnk" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_stnk">Format File PDF dengan Maksimal
          2MB
        </p>
        @error('form.file_dokumen_stnk')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>

      <div class="mt-3">
        <p class="text-sm">Upload SKHP Sebelumnya</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_skhp_sebelumnya' name="dokumen_skhp_sebelumnya" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_skhp_sebelumnya" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_skhp_sebelumnya">Format File PDF dengan Maksimal 2MB
        </p>
        @error('form.file_dokumen_skhp_sebelumnya')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>
      <div class="mt-3">
        <p class="text-sm">Bukti Pendukung Lainnya</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_bukti_pendukung_lainnya' name="dokumen_bukti_pendukung_lainnya" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_bukti_pendukung" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_bukti_pendukung">Format File PDF dengan Maksimal 2MB
        </p>
        @error('form.file_dokumen_bukti_pendukung_lainnya')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>
    </div>
    @endif




    <div class="order-9 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Tanggal Pengujian</p>
      <div class="relative w-full mt-3">
        <input min="{{ $this->getTodayDate() }}" wire:model.live='form.tanggal_pengujian' name="tanggal_pengujian" type="date" id="tanggal_pengujian" class="form-input peer" placeholder=" " />
      </div>
      @error('form.tanggal_pengujian')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    <div class="order-10 form-group-container my-2" x-data="{ tempat_pengujian: '{{$form->tempat_pengujian}}' }">
      <p class="text-sm md:text-base font-semibold">Tempat Pengujian</p>
      <select wire:model.live='form.tempat_pengujian' name="tempat_pengujian" x-model="tempat_pengujian" class="input-sm mt-3 bg-white text-sm text-left inline-flex justify-between text-grey">
        <option selected value="di_kantor">Kantor Dinas Perdagangan</option>
        <option value="di_luar_kantor">Alamat Pemohon</option>
      </select>
      @error('form.tempat_pengujian')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3" x-show="tempat_pengujian == 'di_luar_kantor'">
        <input x-bind:value="tempat_pengujian == 'di_luar_kantor' ? '{{$form->alamat_pengujian}}' :
                        'Kantor Dinas Perdagangan Jl. Panglima Batur Barat No . 08 Banjarbaru'" wire:model.live='form.alamat_pengujian' name="alamat_pengujian" value="Kantor Dinas Perdagangan" type="text" id="alamat_pengujian" class="form-input peer" placeholder=" " />
        <label for="alamat_pengujian" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
      </div>
      @error('form.alamat_pengujian')
      <p x-show="tempat_pengujian == 'di_luar_kantor'" class="text-xs mb-2 pl-2 text-secondary">
        {{ $message }}
      </p>
      @enderror

    </div>
    @if ($isOnUpdate)
    <!-- ➕ Pengajuan Start -->
    <button x-bind:disabled={{$isSubmitButtonDisabled}} id="ajukan-tera" wire:click='update' type="button" class="order-11 md:col-span-2 button-primary w-full mt-8 h-fit flex justify-center col-span-2 ">
      <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="24">
        <path d="M240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v120q-23 5-43 16t-37 28L480-237v157H240Zm320 0v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-300L683-80H560Zm263-224 37-39-37-37-38 38 38 38ZM520-600h200L520-800l200 200-200-200v200Z" />
      </svg>
      <span class="text-sm text-light">
        Update Tera
      </span>
    </button>
    @else
    <!-- ➕ Pengajuan Start -->
    <button x-bind:disabled={{$isSubmitButtonDisabled}} id="ajukan-tera" type="submit" class="order-11 md:col-span-2 button-primary w-full mt-8 h-fit flex justify-center col-span-2 ">
      <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
        <path xmlns="http://www.w3.org/2000/svg" d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
      </svg>
      <span class="text-sm text-light">
        Ajukan Tera
      </span>
    </button>
    @endif

  </form>
</div>