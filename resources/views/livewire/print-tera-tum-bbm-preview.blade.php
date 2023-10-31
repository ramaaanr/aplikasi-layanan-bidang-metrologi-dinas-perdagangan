<div class="preview-container border-dark-grey bg-white rounded-lg p-4">

  <div class="button-cetak-container pr-4 mb-2">
    <a id="back-button" href="/pengelolaan-layanan/data-tera/{{$tera}}" class="button-light-sm">Kembali</a>
    <button id="cetak-button" class="button-primary-sm">Cetak</button>
  </div>
  <div id="ready-to-print" class="mx-4">
    <div class="kop-surat  flex justify-center align-center gap-x-2 border-b-2 pb-4 border-black">
      <div class="logo flex h-fit ">
        <img src="{{ asset('/images/logo-dinas.png') }}" class="w-28 mt-6" alt="">
      </div>
      <div class="header text-center leading-tight">
        <p class="text-black  font-bold">PEMERINTAH KOTA BANJARBARU</p>
        <p class="text-black font-bold text-2xl">DINAS PERDAGANGAN</p>
        <p class="text-black font-bold text-2xl">UPT METROLOGI</p>
        <p class="text-black font-bold text-sm">Jl. A. Yani km 2 Kel. Landasan Ulin Barat Kec. Liang Anggang Banjarbaru
          Telp.
          (0511)
          6748343</p>
      </div>
      <div class="logo-empty-space w-28"></div>
    </div>

    <div class="body mx-8">
      <div class="title mt-4 leading-tight">
        <p class="w-fit text-sm font-bold mx-auto text-black">PELAYANAN</p>
        <p class="w-fit text-sm underline font-bold mx-auto tracking-wide text-black">TERA ULANG
          {{$this->getTeraUppercase()}}
        </p>
        <p class="w-fit text-sm font-bold mx-auto text-black">Nomor: {{$no_surat}}</p>
      </div>
      <ul>
        <li class="flex mb-4">
          <div class="point text-black text-sm w-8">I.</div>
          <div class="point-content">
            <div class="point-head text-black text-sm mb-1">PEMOHON</div>
            <ul>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">1.
                </div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48 text-black text-sm">Nama</p>
                  <p class="divider mr-2 text-black text-sm">:</p>
                  <p class="value text-black text-sm">{{$nama_pemohon}}</p>
                </div>
              </li>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">
                  2.
                </div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48 text-black text-sm">Alamat</p>
                  <p class="divider  mr-2 text-black text-sm">:</p>
                  <p class="value text-black text-sm">{{$alamat_pemohon}}</p>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="flex mb-4">
          <div class="point text-black text-sm w-8">II.</div>
          <div class="point-content">
            <div class="point-head text-black text-sm mb-1">SKHP ATAS NAMA</div>
            <ul>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">1.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48 text-black text-sm">Nama Perusahaan</p>
                  <p class="divider mr-2 text-black text-sm">:</p>
                  <p class="value text-black text-sm">{{$nama_skhp}}</p>
                </div>
              </li>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">2.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48 text-black text-sm">Alamat</p>
                  <p class="divider  mr-2 text-black text-sm">:</p>
                  <p class="value text-black text-sm">{{$alamat_skhp}}</p>
                </div>
              </li>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">3.</div>
                <div class="point-inside-content  text-black text-sm">
                  <p class="atribute w-48 text-black text-sm">Data Kendaraan</p>
                  <div class="flex">
                    <div class="point-number w-8 text-black text-sm">a.</div>
                    <div class="point-head w-40 text-black text-sm">Merek</div>
                    <div class="divider mr-2 text-black text-sm">:</div>
                    <div class="point-body text-black text-sm">{{$merek_kendaraan}}</div>
                  </div>
                  <div class="flex">
                    <div class="point-number w-8 text-black text-sm">b.</div>
                    <div class="point-head w-40 text-black text-sm">Nomor Polisi</div>
                    <div class="divider mr-2 text-black text-sm">:</div>
                    <div class="point-body text-black text-sm">{{$nomor_polisi}}</div>
                  </div>
                  <div class="flex">
                    <div class="point-number w-8 text-black text-sm">c.</div>
                    <div class="point-head w-40 text-black text-sm">Nomor Rangka</div>
                    <div class="divider mr-2 text-black text-sm">:</div>
                    <div class="point-body text-black text-sm">{{$nomor_rangka}}</div>
                  </div>
                  <div class="flex">
                    <div class="point-number w-8 text-black text-sm">d.</div>
                    <div class="point-head w-40 text-black text-sm">Pemilik Sesuai STNK</div>
                    <div class="divider mr-2 text-black text-sm">:</div>
                    <div class="point-body text-black text-sm">{{$pemilik_stnk}}</div>
                  </div>
                  <div class="flex">
                    <div class="point-number w-8 text-black text-sm">e.</div>
                    <div class="point-head w-40 text-black text-sm">Alamat</div>
                    <div class="divider mr-2 text-black text-sm">:</div>
                    <div class="point-body text-black text-sm">{{$alamat_stnk}}</div>
                  </div>
                </div>
              </li>

              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">4.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48 text-black text-sm">Nomor Kontak Telp/HP</p>
                  <p class="divider  mr-2 text-black text-sm">:</p>
                  <p class="value text-black text-sm">{{$nomor_kontak}}</p>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="flex mb-4">
          <div class="point text-black text-sm w-8">III.</div>
          <div class="point-content">
            <div class="flex point-head  mb-2">
              <p class="text-black w-56  text-sm">KELENGKAPAN DOKUMEN</p>
              <p class="text-black ml-4 text-sm">Ada</p>
              <p class="text-black ml-4 text-sm">Tidak Ada</p>
            </div>
            <ul>
              <li class="point-body my-1 flex">
                <div class="point-inside w-8 text-black text-sm">1.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48  text-black text-sm">Surat Permohonan</p>
                  @if ($dokumen_surat_permohonan != null)
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  @else
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  @endif
                </div>
              </li>
              <li class="point-body my-1 flex">
                <div class="point-inside w-8 text-black text-sm">2.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48  text-black text-sm">STNK</p>
                  @if ($dokumen_stnk != null)
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  @else
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  @endif
                </div>
              </li>
              <li class="point-body my-1 flex">
                <div class="point-inside w-8 text-black text-sm">3.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48 text-black text-sm">SKHP Sebelumnya</p>
                  @if ($dokumen_skhp_sebelumnya != null)
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  @else
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  @endif
                </div>
              </li>
              <li class="point-body my-1 flex">
                <div class="point-inside w-8 text-black text-sm">4.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48 text-black text-sm">Bukti Pendukung Lainnya</p>
                  @if ($dokumen_bukti_pendukung_lainnya != null)
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  @else
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  @endif
                </div>
              </li>
            </ul>
          </div>
        </li>

        <li class="flex mb-4">
          <div class="point text-black text-sm w-8">IV.</div>
          <div class="point-content">
            <div class="flex point-head  mb-2">
              <p class="text-black w-56  text-sm">FISIK TANGKI UKUR MOBIL (TUM BBM)</p>
              <p class="text-black ml-4 text-sm">Ada</p>
              <p class="text-black ml-4 text-sm">Tidak Ada</p>
            </div>
            <ul>
              <li class="point-body my-1 flex">
                <div class="point-inside w-8 text-black text-sm">1.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48  text-black text-sm">lemping Volume Nominal</p>
                  @if ($lemping_volume_nominal)
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  @else
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  @endif
                </div>
              </li>

              <li class="point-body my-1 flex">
                <div class="point-inside w-8 text-black text-sm">2.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48  text-black text-sm">Indeks Tera</p>
                  @if ($indeks_tera)
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  @else
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  @endif
                </div>
              </li>

              <li class="point-body my-1 flex">
                <div class="point-inside w-8 text-black text-sm">3.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48  text-black text-sm">Merk TUM BBM</p>
                  @if ($merk_tum_bbm)
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  @else
                  <div class="checkbox ml-6 border border-black flex justify-center content-center w-5 h-5">
                  </div>
                  <div class="checkbox ml-10 border border-black flex justify-center content-center w-5 h-5">
                    <img src="{{ asset('/images/check.png') }}" class="w-4" alt="">
                  </div>
                  @endif
                </div>
              </li>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">4.
                </div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48 text-black text-sm">Volume Nominal</p>
                  <p class="divider mr-2 text-black text-sm">:</p>
                  <p class="value text-black text-sm">{{$volume}}</p>
                </div>
              </li>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">5.
                </div>
                <div class="point-inside-content  text-black text-sm flex">
                  <p class="atribute w-48 text-black text-sm">Jumlah Kompartemen</p>
                  <p class="divider mr-2 text-black text-sm">:</p>
                  <p class="value text-black text-sm">{{$kompartemen}}</p>
                </div>
              </li>
            </ul>
          </div>
        </li>


        <li class="flex mb-4">
          <div class="point text-black text-sm w-8">{{$this->generateRomanNumberForPoint('TANGGAL PENGUJIAN')}}.</div>
          <div class="point-content flex">
            <p class="atribute w-56 text-black text-sm">TANGGAL PENGUJIAN</p>
            <p class="divider mr-2 text-black text-sm">:</p>
            <p class="value text-black text-sm">{{$this->getTanggalPengujian()}}</p>
          </div>
        </li>
        <li class="flex mb-4">
          <div class="point text-black text-sm w-12 ">{{$this->generateRomanNumberForPoint('INFORMASI LAINNYA')}}.</div>
          <div class="point-content">
            <div class="point-head text-black text-sm mb-1">INFORMASI LAINNYA</div>
            <ul>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">1.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  Pada saat pengujian tera ulang, TUM BBM harus dalam keadaan bersih dan siap uji.
                </div>
              </li>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">2.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  Tidak datang sesuai tanggal estimasi, maka pengujian tera/tera ulang akan dijadwal ulan kembali
                </div>
              </li>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">3.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  Retribusi tera/tera ulang dibayar melalui pembantu bendajara penerima
                </div>
              </li>
              <li class="point-body flex">
                <div class="point-inside w-8 text-black text-sm">4.</div>
                <div class="point-inside-content  text-black text-sm flex">
                  Apabila SKHP sebelumnya hilang, harap melampirkan Surat Keterangan Kehilangan dari Kepolisian
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="flex justify-between mt-24">
          <div class="sign-box  w-full ">
            <p class="text-center text-sm text-black">Mengetahui</p>
            <p class="text-center text-sm text-black">Kepala UPT Metrologi</p>
            <div class="mx-10 mt-28 border-b border-dotted border-black"></div>
          </div>
          <div class="sign-box  w-full ">
            <p class="text-center text-sm text-black">Banjarbaru, {{$this->getTanggalSekarang()}}</p>
            <p class="text-center text-sm text-black">Petugas Penerima</p>
            <div class="mx-10 mt-28 border-b border-dotted border-black"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>