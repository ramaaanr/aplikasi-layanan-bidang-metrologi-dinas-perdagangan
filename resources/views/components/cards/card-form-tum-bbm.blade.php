<div class="card-sm p-4  min-h-[74vh]">

  {{-- Modal --}}
  <!-- Main modal -->
  @if (session('success'))
  @include('components.alert-succes', ['tera' => $tera, 'message' => session('success')])
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
            class="bg-white border border-dark-grey text-dark-grey text-sm rounded-lg focus:ring-primary focus:border-grey block w-full p-2.5 pt-4 pl-4 ">
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
          <textarea wire:model.live='form.keterangan' id="keterangan" rows="4"
            class="block p-2.5 pt-4 pl-3 w-full text-sm text-dark-grey bg-white rounded-lg border border-dark-grey focus:ring-primary focus:border-primary "
            placeholder="Keterangan"></textarea>
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
      <p class="text-sm pt-4 md:text-base font-semibold">Tanggal Cek Fisik</p>
      <p class="text-xs p-1 ">Isi terlebih dahulu sebelum mengisi data perusahaan dan data kendaraan</p>
      <div class="relative w-full mt-1">
        <input min="{{ $this->getMinimalCekFisik() }}" wire:model.live='tanggalCekFisik' name="tanggal_cek_fisik"
          type="date" id="tanggal_pengujian" class="form-input peer" placeholder=" " />
      </div>
      @error('tanggalCekFisik')
      <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
      @enderror
      @if ($volumeRest
      < 5000 && $tanggalCekFisik !=null)<div
        class="flex items-center p-4  mt-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Perhatian!</span> Volume maksimal terpenuhi, TUM BBM tidak bisa diujikan pada
          tanggal ini.
        </div>
    </div>
    @elseif ($volumeRest > 0)
    <div class="flex items-center p-4 mt-2 text-sm text-blue-500 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">Perhatian!</span> Penguji hanya bisa melakukan pengujian TUM BBM maksimal
        {{$volumeRest}}L.
      </div>
    </div>
</div>

@if ($volumeRest >= 5000)

<div class="order-3 form-group-container my-2">
  <p class="text-sm md:text-base font-semibold">SKHP atas Perusahaan</p>
  @if($isOnUpdate)
  <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    Nama Perusahaan sebelumnya: <span class="font-bold text-blue-800">{{$prevNamaPerusahaan}}</span>
  </div>
  @endif

  <div class="relative mt-3">
    <select x-bind:disabled="{{$tanggalCekFisik == null}}" wire:model.live="idPerusahaan" id="perusahaan" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
      <option class="text-grey font-semibold" value="">Pilih Perusahaan</option>
      @if (!$isOnUpdate)
      <option class="font-semibold" value="isi-sendiri">Isi Data Perusahaan</option>
      @endif
      @foreach ($opsiPerusahaan as $perusahaan)
      <option value="{{$perusahaan->id}}">{{$perusahaan->nama_perusahaan}}</option>
      @endforeach
    </select>

    <label for="perusahaan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
      perusahaan</label>
  </div>
  @error('idPerusahaan')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  @if ($jenisDukungan == 'subsidi')
  <div class="relative mt-3">
    <input disabled value='{{$form->alamat_skhp}}' name="alamat_skhp" type="text" id="alamat_skhp" class="form-input bg-light-2 peer" placeholder=" " />
    <label for="alamat_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
  </div>
  @error('form.alamat_skhp')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror

  <div class="relative mt-3">
    <input disabled value='{{$form->kelurahan_skhp}}' name="kelurahan_skhp" type="text" id="kelurahan_skhp" class="form-input bg-light-2 peer" placeholder=" " />
    <label for="kelurahan_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kelurahan</label>
  </div>
  @error('form.kelurahan_skhp')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  <div class="relative mt-3">
    <input disabled value='{{$form->kecamatan_skhp}}' name="kecamatan_skhp" type="text" id="kecamatan_skhp" class="form-input bg-light-2 peer" placeholder=" " />
    <label for="kecamatan_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kecamatan</label>
  </div>
  @error('form.kecamatan_skhp')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  <div class="relative mt-3">
    <input disabled value='{{$form->kota_skhp}}' name="kota_skhp" type="text" id="kota_skhp" class="form-input bg-light-2 peer " placeholder=" " />
    <label for="kota_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kota</label>
  </div>
  @error('form.kota_skhp')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  <div class="relative mt-3">
    <input disabled value='{{$form->provinsi_skhp}}' name="provinsi_skhp" type="text" id="provinsi_skhp" class="form-input bg-light-2 peer " placeholder=" " />
    <label for="provinsi_skhp" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Provinsi</label>
  </div>
  @error('form.provinsi_skhp')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  @elseif ($jenisDukungan == 'non-subsidi')
  <div class="relative mt-3">
    <input wire:model.live='form.nama_perusahaan' name="nama_perusahaan" type="text" id="nama_perusahaan" class="form-input peer" placeholder=" " />
    <label for="nama_perusahaan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nama
      Perusahaan</label>
  </div>
  @error('form.nama_perusahaan')
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
  @endif

  @endif
</div>

<!-- 🏍️ DATA KENDARAAN -->

<div class="order-4 form-group-container my-2">
  <p class="text-sm md:text-base font-semibold">Data Kendaraan</p>
  <p class="text-xs  mb-3">Pilih atau isi data kendaraan terlebih dahulu</p>
  @if($isOnUpdate)
  <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    Nomor Polisi Kendaraan sebelumnya: <span class="font-bold text-blue-800">{{$prevNomorPolisi}}</span>
  </div>
  @endif
  @if ($jenisDukungan == 'subsidi')
  <div class="relative mt-3">
    <select wire:loading.attr="disabled" id="select-kendaraan" wire:model.live="idKendaraan" id="kendaraan" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
      <option wire:target="idKendaraan" selected class="text-grey font-semibold" value="">Pilih Kendaraan
      </option>
      @foreach ($opsiKendaraan as $kendaraan)
      <option x-bind:disabled="{{$kendaraan->volume > $volumeRest}}" value="{{$loop->index}}">
        {{$kendaraan->nomor_polisi}}
      </option>
      @endforeach
    </select>
    <label for="idKendaraan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
      kendaraan</label>
  </div>
  @error('idKendaraan')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  @if ($idKendaraan != '')

  <div class="relative mt-3">
    <input disabled value='{{$form->merek_kendaraan}}' name="merek_kendaraan" type="text" id="merek_kendaraan" class="form-input bg-light-2 peer" placeholder=" " />
    <label for="merek_kendaraan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Merek
      Kendaraan
    </label>
  </div>
  @error('form.merek_kendaraan')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  <div class="relative mt-3">
    <input disabled value='{{$form->nomor_polisi}}' name="nomor_polisi" type="text" id="nomor_polisi" class="form-input bg-light-2 peer" placeholder=" " />
    <label for="nomor_polisi" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor
      Polisi</label>
  </div>
  @error('form.nomor_polisi')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror

  <div class="relative mt-3">
    <input disabled value='{{$form->nomor_rangka}}' name="nomor_rangka" type="text" id="nomor_rangka" class="form-input bg-light-2 peer" placeholder=" " />
    <label for="nomor_rangka" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor
      Rangka</label>
  </div>
  @error('form.nomor_rangka')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  <div class="relative mt-3">
    <input disabled value='{{$form->pemilik_stnk}}' name="pemilik_stnk" type="text" id="pemilik_stnk" class="form-input bg-light-2 peer" placeholder=" " />
    <label for="pemilik_stnk" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Pemilik
      Kendaraan Sesuai STNK</label>
  </div>
  @error('form.pemilik_stnk')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  <div class="relative mt-3">
    <input disabled value='{{$form->alamat_stnk}}' name="alamat_stnk" type="text" id="alamat_stnk" class="form-input bg-light-2 peer " placeholder=" " />
    <label for="alamat_stnk" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat
      Pemilik Kendaraan Sesuai STNK</label>
  </div>
  @error('form.alamat_stnk')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  @endif
  @elseif ($jenisDukungan == 'non-subsidi')
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
  @else
  <div class="relative mt-3">
    <select disabled id="kendaraan" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
      <option value="">Pilih Kendaraan</option>
    </select>
    <label for="idKendaraan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
      kendaraan</label>
  </div>
  @error('idKendaraan')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  @endif
</div>

<!-- 🥤 Volume -->
<div class="order-5 form-group-container my-2">
  <p class="text-sm md:text-base font-semibold">Volume Nominal TUM BBM</p>
  <p class="text-xs text-grey">Isi Data Kendaraan Terlebih Dahulu</p>
  @if ($jenisDukungan == 'non-subsidi')
  <div class="form-group-container my-2">
    <div class="relative mt-3">
      <select wire:model.live="form.volume" id="volume" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
        <option value="">Pilih Volume</option>
        @foreach ($listVolume as $volume)
        <option x-bind:disabled="{{$volume['value'] > $volumeRest}}" value="{{$volume['value']}}">{{$volume['text']}}</option>
        @endforeach
      </select>
      <label for="Volume" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
        Volume</label>
    </div>
    @error('form.volume')
    <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
    @enderror
    <div class="relative mt-3">
      <select wire:model.live="form.kompartemen" id="kompartemen" class="input-sm pt-4 pl-4 bg-white text-sm text-left inline-flex justify-between text-dark-grey">
        <option value="">Pilih Kompartemen</option>
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

  @elseif($jenisDukungan == 'subsidi' && $idKendaraan != '')
  <div class="form-group-container my-2">
    <div class="relative mt-3">
      <select disabled id="volume" class="input-sm bg-light-2 pt-4 pl-4  text-sm text-left inline-flex justify-between text-dark-grey">
        <option value="{{$form->volume}}">
          <!-- {{ $listVolume[array_search($form->volume, array_column($listVolume, 'value'))]['text'] }}
         -->
          {{$form->volume ? $form->volume . "L" : ""}}
        </option>
      </select>
      <label for="Volume" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
        Volume</label>
    </div>
    @error('form.volume')
    <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
    @enderror
    <div class="relative mt-3">
      <select disabled wire:model.live="form.kompartemen" id="kompartemen" class="input-sm bg-light-2 pt-4 pl-4  text-sm text-left inline-flex justify-between text-dark-grey">
        <option>{{$form->kompartemen}}</option>

      </select>
      <label for="kompartemen" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
        Kompartemen</label>
    </div>
    @error('form.kompartemen')
    <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
    @enderror
  </div>
  @endif

  @if ($isOnUpdate)
  <!-- ☑️ Cek Fisik  -->

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
      <input wire:model.live="form.merk_tum_bbm" id="merk_tum_bbm" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="merk_tum_bbm" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apakah
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
      <p class="px-2 py-1 w-44">Surat Permohonan</p>
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
  <div class="mt-3 w-full" x-data="{ showReupload: false }">
    <div x-show="!showReupload" class="before-reupload flex w-full gap-x-2">
      <p class="px-2 py-1 w-44">STNK</p>
      <button type="button" wire:click="downloadStnk" class="text-sm button-light-sm">Lihat
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
      <p class="px-2 py-1 w-44">SKHP Sebelumnya</p>
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
      <p class="px-2 py-1 w-44">Bukti Pendukung Lainnya</p>
      <button type="button" wire:click="downloadBuktiPendukungLainnya" class="text-sm button-light-sm h-fit">Lihat
        Berkas</button>
      <button type="button" x-on:click="showReupload = true" class="text-sm button-light-sm h-fit">Upload
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


<div class="order-9 form-group-container my-2" x-data="{ tempat_pengujian: '{{$form->tempat_pengujian}}' }">
  <p class="text-sm md:text-base font-semibold">Tempat Pengujian</p>
  <select wire:model.live='form.tempat_pengujian' name="tempat_pengujian" x-model="tempat_pengujian" class="input-sm mt-3 bg-white text-sm text-left inline-flex justify-between text-grey">
    <option selected value="di_kantor">Kantor Dinas Perdagangan</option>
    <option value="di_luar_kantor">Alamat Pemohon</option>
  </select>
  @error('form.tempat_pengujian')
  <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
  @enderror
  <div class="relative mt-3" x-show="tempat_pengujian == 'di_luar_kantor'">
    <input wire:model.live='form.alamat_pengujian' name="alamat_pengujian" value="Kantor Dinas Perdagangan" type="text" id="alamat_pengujian" class="form-input peer" placeholder=" " />
    <label for="alamat_pengujian" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
  </div>
  @error('form.alamat_pengujian')
  <p x-show="tempat_pengujian == 'di_luar_kantor'" class="text-xs mb-2 pl-2 text-secondary">
    {{ $message }}
  </p>
  @enderror

</div>
@endif

@if ($isOnUpdate)
<!-- ➕ Pengajuan Start -->

<button wire:click="update" x-bind:disabled='{{($isSubmitButtonDisabled || $tanggalCekFisik == null)}}' x-bind:class="{ 'cursor-no-drop hover:ring-0': {{($isSubmitButtonDisabled || $tanggalCekFisik == null)}} }" id="ajukan-tera" type="button" class="order-11 md:col-span-2 button-primary w-full mt-8 h-fit flex justify-center col-span-2 ">
  @if($isSubmitButtonDisabled == true && $volumeRest >= 5000) <div role="status">
    <svg aria-hidden="true" class="w-6 h-6 mr-2 text-gray-200 animate-spin dark:text-light-grey " viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path class="fill-light-grey" d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
      <path class="fill-light" d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
    </svg>
  </div>
  <span class="text-sm text-light">
    Tunggu Tera Sedang Diupdate
  </span>
  @elseif($volumeRest < 5000 && $tanggalCekFisik!=null) <svg class="w-[20px] h-[20px] fill-light mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
    </svg>
    <span class="text-sm text-light">
      Pengajuan Tera Tidak Dapat Dilakukan, Pilih Tanggal Cek Fisik Lain
    </span>
    @else
    <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
      <path xmlns="http://www.w3.org/2000/svg" d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
    </svg>
    <span class="text-sm text-light">
      Update Tera
    </span>
    @endif

</button>

@else
<!-- ➕ Pengajuan Start -->
<button x-bind:disabled='{{($isSubmitButtonDisabled || $tanggalCekFisik == null)}}' x-bind:class="{ 'cursor-no-drop hover:ring-0': {{($isSubmitButtonDisabled || $tanggalCekFisik == null)}} }" id="ajukan-tera" type="submit" class="order-11 md:col-span-2 button-primary w-full mt-8 h-fit flex justify-center col-span-2 ">
  @if($isSubmitButtonDisabled == true && $volumeRest >= 5000) <div role="status">
    <svg aria-hidden="true" class="w-6 h-6 mr-2 text-gray-200 animate-spin dark:text-light-grey " viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path class="fill-light-grey" d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
      <path class="fill-light" d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
    </svg>
  </div>
  <span class="text-sm text-light">
    Tunggu Tera Sedang Diajukan
  </span>
  @elseif($volumeRest < 5000 && $tanggalCekFisik!=null) <svg class="w-[20px] h-[20px] fill-light mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
    </svg>
    <span class="text-sm text-light">
      Pengajuan Tera Tidak Dapat Dilakukan, Pilih Tanggal Cek Fisik Lain
    </span>
    @else
    <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
      <path xmlns="http://www.w3.org/2000/svg" d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
    </svg>
    <span class="text-sm text-light">
      Ajukan Tera
    </span>
    @endif

</button>
@endif

</form>

</div>