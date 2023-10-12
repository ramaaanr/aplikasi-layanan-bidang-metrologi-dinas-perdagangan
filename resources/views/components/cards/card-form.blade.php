<div class="card-sm p-4  min-h-[74vh]">

  {{-- Modal --}}
  <!-- Main modal -->
  @if (session('success'))
  @include('components.alert-succes', ['tera' => $tera, 'kode_pengajuan' => session('success')])
  @endif
  @if (session('error'))
  @include('components.alert-error', ['tera' => $tera, 'e' => session('error')])
  @endif
  {{-- Modal --}}

  <h3 class="md:col-span-2 text-base font-bold md:text-lg mb-2">Pengajuan Tera {{ $sentenceCaseTitle }}</h3>
  <form wire:submit='submit' class="md:grid  md:grid-cols-2 md:gap-x-4 lg:gap-x-8">
    @csrf
    <div class="order-1 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Pemohon</p>
      <div class="relative mt-3">
        <input wire:model.live='form.nama_pemohon' name="nama_pemohon" type="text" id="nama_pemohon" class="form-input peer " placeholder=" " />
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
        <input wire:model.live='form.kota_skhp' name="kota_skhp" type="text" id="kota_skhp" class="form-input peer font-medium" placeholder=" " value="Banjarbaru" readonly />
        <label for="kota_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kota</label>
      </div>
      @error('form.kota_skhp')
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


    <div class="order-4 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Kelengkapan Dokumen</p>
      <div class="mt-3">
        <p class="text-sm">Upload Surat Permohonan</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_surat_permohonan' name="dokumen_surat_permohonan" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_surat_permohonan" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_surat_permohonan">Format File PDF dengan Maksimal 2MB
        </p>
        @error('form.file_dokumen_surat_permohonan')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>

      <div class="mt-3">
        <p class="text-sm">Upload SKHP Sebelumnya</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_skhp_sebelumnya' name="dokumen_skhp_sebelumnya" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_skhp_sebelumnya" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_skhp_sebelumnya">Format File PDF dengan Maksimal 2MB</p>
        @error('form.file_dokumen_skhp_sebelumnya')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>
      <div class="mt-3">
        <p class="text-sm">Bukti Pendukung Lainnya</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_bukti_pendukung_lainnya' name="dokumen_bukti_pendukung_lainnya" class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="dokumen_bukti_pendukung" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_bukti_pendukung">Format File PDF dengan Maksimal 2MB</p>
        @error('form.file_dokumen_bukti_pendukung_lainnya')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>
    </div>


    <div class="order-5 pr-4 form-group-container">
      <p class="text-sm md:text-base font-semibold">Jumlah UTTP</p>
      <div class="relative my-3">
        <input min="1" wire:model.live="form.jumlah_uttp" type="number" id="jumlah-uttp" class="form-input peer" placeholder=" " />
        <label for="jumlah-uttp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Jumlah
          UTTP/Unit</label>
      </div>
    </div>
    <div class="order-6  pr-4 form-group-container">
      <div x-show='"{{ config("tera.$this->tera.jenis")}}" == "tera_jenis_d" '>
        <p class="text-sm md:text-base font-semibold">Jumlah Perlengkapan</p>
        <div class="relative my-3">
          <input min="1" wire:model.live="form.jumlah_perlengkapan" type="number" id="jumlah_perlengkapan" class="form-input peer" placeholder=" " />
          <label for="jumlah_perlengkapan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Jumlah
            Perlengkapan</label>
        </div>
      </div>
      <div x-show='"{{ config("tera.$this->tera.jenis")}}" == "tera_jenis_b" '>
        <p class="text-sm md:text-base font-semibold">Jumlah Nozzle</p>
        <div class="relative my-3">
          <input min="1" wire:model.live="form.jumlah_nozzle" type="number" id="jumlah_nozzle" class="form-input peer" placeholder=" " />
          <label for="jumlah_nozzle" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Jumlah
            Nozzle</label>
        </div>
      </div>
    </div>
    <div class="order-7 col-span-2 form-group-container">
      <p class="text-sm md:text-base font-semibold">Identitas UTTP</p>

      <div class=" relative overflow-x-auto shadow-md rounded-md sm:rounded-lg mt-2 border-2 border-grey">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

          @include("components.table-head-$this->jenisUttp")
          <tbody>
            @foreach (range(1, $this->form->jumlah_uttp) as $index)
            @livewire("components.table-row-$this->jenisUttp-input", ['index' => $index, 'kode_pengajuan' =>
            $this->form->kode_pengajuan], key($index))
            @endforeach
          </tbody>
        </table>
      </div>
    </div>



    <div class="order-9 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Tanggal Pengujian</p>
      <div class="relative w-full mt-3">
        <input min="{{ $this->getTodayDate() }}" wire:model.live='form.tanggal_pengujian' name="tanggal_pengujian" type="date" id="tanggal_pengujian" class="form-input peer" placeholder=" " />
      </div>
      @error('form.tanggal_pengujian')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    <div class="order-10 form-group-container my-2" x-data="{ tempat_pengujian: 'di_kantor' }">
      <p class="text-sm md:text-base font-semibold">Tempat Pengujian</p>
      <select wire:model.live='form.tempat_pengujian' name="tempat_pengujian" x-model="tempat_pengujian" class="input-sm mt-3 bg-white text-sm text-left inline-flex justify-between text-grey">
        <option selected value="di_kantor">Kantor Dinas Perdagangan</option>
        <option value="di_luar_kantor">Alamat Pemohon</option>
      </select>
      @error('form.tempat_pengujian')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3" x-show="tempat_pengujian == 'di_luar_kantor'">
        <input x-bind:value="tempat_pengujian == 'di_luar_kantor' ? '' :
                        'Kantor Dinas Perdagangan Jl. Panglima Batur Barat No . 08 Banjarbaru'" wire:model.live='form.alamat_pengujian' name="alamat_pengujian" value="Kantor Dinas Perdagangan" type="text" id="alamat_pengujian" class="form-input peer" placeholder=" " />
        <label for="alamat_pengujian" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
      </div>
      @error('form.alamat_pengujian')
      <p x-show="tempat_pengujian == 'di_luar_kantor'" class="text-xs mb-2 pl-2 text-secondary">
        {{ $message }}
      </p>
      @enderror

    </div>

    <!-- ➕ Pengajuan Start -->
    <button x-bind:disabled="{{$isSubmitButtonDisabled}}" id="ajukan-tera" type="submit" class="order-11 md:col-span-2 button-primary w-full mt-8 h-fit flex justify-center col-span-2 ">
      <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
        <path xmlns="http://www.w3.org/2000/svg" d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
      </svg>
      <span class="text-sm text-light">
        Ajukan Tera
      </span>
    </button>
  </form>
</div>