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
          <label
            class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4"
            for="status">Ubah Status</label>
          <select wire:model.live='form.status' id="status"
            class="bg-light  border border-dark-grey text-dark-grey text-sm rounded-lg focus:ring-primary focus:border-grey block w-full p-2.5 pt-4 pl-4 ">
            <option value="Diajukan">Diajukan</option>
            <option value="Dijadwalkan">Dijadwalkan</option>
            <option value="Dibatalkan">Dibatalkan</option>
            <option value="Selesai">Selesai</option>
          </select>
        </div>
        <div class="w-full relative mt-3">
          <label
            class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4"
            for="keterangan">Status Keterangan</label>
          <input wire:model.live='form.keterangan' id="keterangan" rows="4"
            class="block p-2.5 pt-4 pl-3 w-full text-sm text-dark-grey bg-light rounded-lg border border-dark-grey focus:ring-primary focus:border-primary "
            placeholder="Keterangan"></input>
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
        <input wire:model.live="form.nama_pemohon" name="nama_pemohon" type="text" id="nama_pemohon"
          class="form-input peer " placeholder=" " />
        <label for="nama_pemohon"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nama
          Pemohon</label>
      </div>
      @error('form.nama_pemohon')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror

      <div class="relative mt-3">
        <input wire:model.live='form.alamat_pemohon' name="alamat_pemohon" type="text" id="alamat_pemohon"
          class="form-input peer" placeholder=" " />

        <label for="alamat_pemohon"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
      </div>
      @error('form.alamat_pemohon')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    <div class="order-3 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Surat Keterangan Hasil Pengujian (SKHP) Atas Nama</p>
      <div class="relative mt-3">
        <input wire:model.live='form.nama_skhp' name="nama_skhp" type="text" id="nama_skhp" class="form-input peer"
          placeholder=" " />
        <label for="nama_skhp"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nama
        </label>
      </div>
      @error('form.nama_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.alamat_skhp' name="alamat_skhp" type="text" id="alamat_skhp"
          class="form-input peer" placeholder=" " />
        <label for="alamat_skhp"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
      </div>
      @error('form.alamat_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror

      <div class="relative mt-3">
        <input wire:model.live='form.kelurahan_skhp' name="kelurahan_skhp" type="text" id="kelurahan_skhp"
          class="form-input peer" placeholder=" " />
        <label for="kelurahan_skhp"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kelurahan</label>
      </div>
      @error('form.kelurahan_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.kecamatan_skhp' name="kecamatan_skhp" type="text" id="kecamatan_skhp"
          class="form-input peer" placeholder=" " />
        <label for="kecamatan_skhp"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kecamatan</label>
      </div>
      @error('form.kecamatan_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3">
        <input wire:model.live='form.kota_skhp' name="kota_skhp" type="text" id="kota_skhp"
          class="form-input peer font-medium" placeholder=" " value="Banjarbaru" readonly />
        <label for="kota_skhp"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kota</label>
      </div>
      @error('form.kota_skhp')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    <div class="order-2 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Nomor Kotak Telp/HP</p>
      <div class="relative mt-3">
        <input wire:model.live='form.nomor_kontak' name="nomor_kontak" type="tel" id="nomor_kontak"
          class="form-input peer" placeholder=" " />
        <label for="nomor_kontak"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor
          Kotak Telp/HP</label>
      </div>
      @error('form.nomor_kontak')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    @if ($isOnUpdate)
    <div class="order-4 form-group-container my-2">
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
          <input accept=".pdf" wire:model.live='form.file_dokumen_surat_permohonan' name="dokumen_surat_permohonan"
            class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none "
            aria-describedby="file_input_help" placeholder="ikan" id="dokumen_surat_permohonan" type="file">
          <p class="mt-3 text-sm text-grey" id="dokumen_surat_permohonan">Dokumen Wajib Diisi Dengan Format File PDF
            dengan
            Maksimal 2MB
          </p>
          @error('form.file_dokumen_surat_permohonan')
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
          <input accept=".pdf" wire:model.live='form.file_dokumen_skhp_sebelumnya' name="dokumen_skhp_sebelumnya"
            class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none "
            aria-describedby="file_input_help" placeholder="ikan" id="dokumen_skhp_sebelumnya" type="file">
          <p class="mt-3 text-sm text-grey" id="dokumen_skhp_sebelumnya">Dokumen Wajib Diisi Dengan Format File PDF
            dengan Maksimal
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
          <input accept=".pdf" wire:model.live='form.file_dokumen_bukti_pendukung_lainnya'
            name="dokumen_bukti_pendukung_lainnya"
            class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none "
            aria-describedby="file_input_help" placeholder="ikan" id="dokumen_bukti_pendukung_lainnya" type="file">
          <p class="mt-3 text-sm text-grey" id="dokumen_bukti_pendukung_lainnya">Dokumen Wajib Diisi Dengan Format File
            PDF dengan
            Maksimal 2MB
          </p>
          @error('form.file_dokumen_bukti_pendukung_lainnya')
          <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>
    @else
    <div class="order-4 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Kelengkapan Dokumen</p>
      <div class="mt-3">
        <p class="text-sm">Upload Surat Permohonan</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_surat_permohonan' name="dokumen_surat_permohonan"
          class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none "
          aria-describedby="file_input_help" placeholder="ikan" id="dokumen_surat_permohonan" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_surat_permohonan">Dokumen Wajib Diisi Dengan Format File PDF
          dengan Maksimal
          2MB
        </p>
        @error('form.file_dokumen_surat_permohonan')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>

      <div class="mt-3">
        <p class="text-sm">Upload SKHP Sebelumnya</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_skhp_sebelumnya' name="dokumen_skhp_sebelumnya"
          class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none "
          aria-describedby="file_input_help" placeholder="ikan" id="dokumen_skhp_sebelumnya" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_skhp_sebelumnya">Dokumen Wajib Diisi Dengan Format File PDF dengan
          Maksimal 2MB
        </p>
        @error('form.file_dokumen_skhp_sebelumnya')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>
      <div class="mt-3">
        <p class="text-sm">Bukti Pendukung Lainnya</p>
        <input accept=".pdf" wire:model.live='form.file_dokumen_bukti_pendukung_lainnya'
          name="dokumen_bukti_pendukung_lainnya"
          class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none "
          aria-describedby="file_input_help" placeholder="ikan" id="dokumen_bukti_pendukung" type="file">
        <p class="mt-3 text-sm text-grey" id="dokumen_bukti_pendukung">Dokumen Wajib Diisi Dengan Format File PDF dengan
          Maksimal 2MB
        </p>
        @error('form.file_dokumen_bukti_pendukung_lainnya')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
      </div>
    </div>
    @endif



    <div class="order-5 pr-4 form-group-container">
      <p class="text-sm md:text-base font-semibold">Jumlah UTTP</p>
      <div class="relative my-3">
        @if ($isOnUpdate)
        <input disabled min="1" wire:model.live="form.jumlah_uttp" type="number" id="jumlah-uttp"
          class="form-input peer" placeholder=" " />
        @else
        <input min="1" wire:model.live="form.jumlah_uttp" type="number" id="jumlah-uttp" class="form-input peer"
          placeholder=" " />
        @endif
        <label for="jumlah-uttp"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Jumlah
          UTTP/Unit</label>
      </div>
    </div>
    <div class="order-6  pr-4 form-group-container">
      <div x-show='"{{ config("tera.$this->tera.jenis") }}" == "tera_jenis_d" '>
        <p class="text-sm md:text-base font-semibold">Jumlah Perlengkapan</p>
        <div class="relative my-3">
          <input min="1" wire:model.live="form.jumlah_perlengkapan" type="number" id="jumlah_perlengkapan"
            class="form-input peer" placeholder=" " />
          <label for="jumlah_perlengkapan"
            class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Jumlah
            Perlengkapan</label>
        </div>
      </div>

      <div x-show='"{{ config("tera.$this->tera.jenis") }}" == "tera_jenis_b"'>
        <p class="text-sm md:text-base font-semibold">Jumlah Nozzle</p>
        <div class="relative my-3">
          <input min="1" wire:model.live="form.jumlah_nozzle" type="number" id="jumlah_nozzle" class="form-input peer"
            placeholder=" " />
          <label for="jumlah_nozzle"
            class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Jumlah
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
            @if ($isOnUpdate)
            @foreach ($identitasUttp as $value)
            @livewire("components.table-row-$this->jenisUttp-input", ['index' => $loop->index + 1, 'kode_pengajuan' =>
            $this->form->kode_pengajuan, 'isOnUpdate' => $isOnUpdate, 'tera' => $tera, 'id' => $value->id],
            key($value->id))
            @endforeach
            @else
            @foreach (range(1, $this->form->jumlah_uttp) as $index)
            @livewire("components.table-row-$this->jenisUttp-input", ['index' => $index, 'kode_pengajuan' =>
            $this->form->kode_pengajuan, 'isOnUpdate' => $isOnUpdate, 'tera' => $tera], key($index))
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>

    <div class="order-9 form-group-container my-2">
      <p class="text-sm md:text-base font-semibold">Tanggal Pengujian</p>
      <div class="relative w-full mt-3">
        <input min="{{ $this->getTodayDate() }}" wire:model.live='form.tanggal_pengujian' name="tanggal_pengujian"
          type="date" id="tanggal_pengujian" class="form-input peer" placeholder=" " />
      </div>
      @error('form.tanggal_pengujian')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
    </div>

    <div class="order-10 form-group-container my-2" x-data="{ tempat_pengujian: '{{$form->tempat_pengujian}}' }">
      <p class="text-sm md:text-base font-semibold">Tempat Pengujian</p>

      <select x-bind:disabled="{{$tera == 'timbangan-jembatan'}}" wire:model.live='form.tempat_pengujian'
        name="tempat_pengujian" x-model="tempat_pengujian"
        class="input-sm mt-3 bg-white text-sm text-left inline-flex justify-between text-grey">
        <option selected value="di_kantor">Kantor Dinas Perdagangan</option>
        <option value="di_luar_kantor">Alamat Pemohon</option>
      </select>
      @error('form.tempat_pengujian')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      <div class="relative mt-3" x-show="tempat_pengujian == 'di_luar_kantor'">
        <input wire:model.live='form.alamat_pengujian' name="alamat_pengujian" value="Kantor Dinas Perdagangan"
          type="text" id="alamat_pengujian" class="form-input peer" placeholder=" " />
        <label for="alamat_pengujian"
          class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
      </div>
      @error('form.alamat_pengujian')
      <p x-show="tempat_pengujian == 'di_luar_kantor'" class="text-xs mb-2 pl-2 text-secondary">
        {{ $message }}
      </p>
      @enderror

    </div>
    @if ($isOnUpdate)
    <!-- ➕ Pengajuan Start -->
    <button x-bind:disabled={{$isSubmitButtonDisabled}} id="ajukan-tera" wire:click='update' type="button"
      class="order-11 md:col-span-2 button-primary w-full mt-8 h-fit flex justify-center col-span-2 ">
      @if($isSubmitButtonDisabled == 'true')
      <div role="status">
        <svg aria-hidden="true" class="w-6 h-6 mr-2 text-gray-200 animate-spin dark:text-light-grey "
          viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path class="fill-light-grey"
            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
            fill="currentColor" />
          <path class="fill-light"
            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
            fill="currentFill" />
        </svg>
      </div>
      <span class="text-sm text-light">
        Tunggu Tera Sedang Diupdate
      </span>
      @else
      <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="24">
        <path
          d="M240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v120q-23 5-43 16t-37 28L480-237v157H240Zm320 0v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-300L683-80H560Zm263-224 37-39-37-37-38 38 38 38ZM520-600h200L520-800l200 200-200-200v200Z" />
      </svg>
      <span class="text-sm text-light">
        Update Tera
      </span>
      @endif

    </button>
    @else
    <!-- ➕ Pengajuan Start -->
    <button x-bind:disabled={{$isSubmitButtonDisabled}} id="ajukan-tera" type="submit"
      class="order-11 md:col-span-2 button-primary w-full mt-8 h-fit flex justify-center col-span-2 ">
      @if($isSubmitButtonDisabled == 'true')
      <div role="status">
        <svg aria-hidden="true" class="w-6 h-6 mr-2 text-gray-200 animate-spin dark:text-light-grey "
          viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path class="fill-light-grey"
            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
            fill="currentColor" />
          <path class="fill-light"
            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
            fill="currentFill" />
        </svg>
      </div>
      <span class="text-sm text-light">
        Tunggu Tera Sedang Diajukan
      </span>
      @else
      <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
        <path xmlns="http://www.w3.org/2000/svg"
          d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
      </svg>
      <span class="text-sm text-light">
        Ajukan Tera
      </span>
      @endif

    </button>
    @endif

  </form>
</div>