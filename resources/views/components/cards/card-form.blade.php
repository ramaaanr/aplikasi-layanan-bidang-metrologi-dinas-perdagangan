<div class="card-sm p-4  min-h-[74vh]">
  <h3 class="order-1 md:col-span-2 text-base font-bold md:text-lg mb-2">Pengajuan Tera {{$tera}}</h3>
  <form class="md:grid  md:grid-cols-2 md:gap-x-4 lg:gap-x-8" action="">
    <div class="order-1 form-group-container">
      <p class="text-sm md:text-base font-semibold">Pemohon</p>
      <div class="relative my-3">
        <input type="text" id="pemohon-nama" class="form-input peer" placeholder=" " />
        <label for="pemohon-nama" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nama
          Pemohon</label>
      </div>
      <div class="relative my-3">
        <input type="text" id="pemohon-alamat" class="form-input peer" placeholder=" " />
        <label for="pemohon-alamat" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
      </div>
    </div>

    <div class="order-3 form-group-container">
      <p class="text-sm md:text-base font-semibold">Surat Keterangan Hasil Pengujian (SKHP) Atas Nama</p>
      <div class="relative my-3">
        <input type="text" id="skhp-nama" class="form-input peer" placeholder=" " />
        <label for="skhp-nama" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nama
        </label>
      </div>
      <div class="relative my-3">
        <input type="text" id="skhp-alamat" class="form-input peer" placeholder=" " />
        <label for="skhp-alamat" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Alamat</label>
      </div>
      <div class="relative my-3">
        <input type="text" id="skhp-kelurahan" class="form-input peer" placeholder=" " />
        <label for="skhp-kelurahan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kelurahan</label>
      </div>
      <div class="relative my-3">
        <input type="text" id="skhp-kecamatan" class="form-input peer" placeholder=" " />
        <label for="skhp-kecamatan" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kecamatan</label>
      </div>
      <div class="relative my-3">
        <input type="text" id="skhp-kota" class="form-input peer font-medium" placeholder=" " value="Banjarbaru" readonly />
        <label for="skhp-kota" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Kota</label>
      </div>
    </div>

    <div class="order-2 form-group-container">
      <p class="text-sm md:text-base font-semibold">Nomor Kotak Telp/HP</p>
      <div class="relative my-3">
        <input type="text" id="nomor-kontak" class="form-input peer" placeholder=" " />
        <label for="nomor-kontak" class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor
          Kotak Telp/HP</label>
      </div>
    </div>

    <div class="order-4 form-group-container">
      <p class="text-sm md:text-base font-semibold">Kelengkapan Dokumen</p>
      <div class="my-3">
        <p class="text-sm">Upload Surat Permohonan</p>
        <input class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="file_input_1" type="file">
        <p class="mt-1 text-sm text-grey" id="file_input_help">PDF, PNG, JPG (Max 5MB)</p>
      </div>
      <div class="my-3">
        <p class="text-sm">Upload SKHP Sebelumnya</p>
        <input class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="file_input_2" type="file">
        <p class="mt-1 text-sm text-grey" id="file_input_help">PDF, PNG, JPG (Max 5MB)</p>
      </div>
      <div class="my-3">
        <p class="text-sm">Bukti Pendukung Lainnya</p>
        <input class="block w-full text-sm text-dark-grey border-2 border-grey rounded-lg cursor-pointer bg-light  focus:outline-none " aria-describedby="file_input_help" placeholder="ikan" id="file_input_3" type="file" multiple>
        <p class="mt-1 text-sm text-grey" id="file_input_help">PDF, PNG, JPG (Max 5MB)</p>
      </div>
    </div>

    <div class="order-5 form-group-container">
      <p class="text-sm md:text-base font-semibold">Tanggal Pengujian</p>
      <div class="relative w-full my-3">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg class="w-4 h-4 text-grey" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
          </svg>
        </div>
        <input datepicker datepicker-autohide type="text" placeholder="Tanggal Pengujian" class="shadow-md bg-light border-2 border-grey text-dark-grey text-sm rounded-lg focus:ring-primary focus:border-primary block w-full pl-10 p-2.5 ">
      </div>
    </div>

    <!-- ➕ Pengajuan Start -->
    <button type="submit" href="/layanan/ajukan-tera/{{$tera}}" class="order-7 md:col-span-2 button-primary w-full mt-8 h-fit flex justify-center col-span-2 ">
      <svg class="fill-light" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
        <path xmlns="http://www.w3.org/2000/svg" d="M440-240h80v-120h120v-80H520v-120h-80v120H320v80h120v120ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520h200L520-800v200Z" />
      </svg>
      <span class="text-sm text-light">
        Ajukan Tera
      </span>
      </a>
      <!-- ➕ Pengajuan End -->
  </form>
</div>