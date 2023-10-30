<div class="point-content w-full">
  <div class="point-head text-black text-sm mb-2">IDENTITAS UTTP</div>
  <div class="table w-full">
    <div class="thead w-full flex">
      <div class="border w-36 py-2 pl-1 th border-black font-normal text-black text-sm">No</div>
      <div class="border w-full py-2 pl-1 th border-black font-normal text-black text-sm">Merek</div>
      <div class="border w-full py-2 pl-1 th border-black font-normal text-black text-sm">Tipe/Model</div>
      <div class="border w-full py-2 pl-1 th border-black font-normal text-black text-sm">Nomor Seri</div>
      <div class="border w-full py-2 pl-1 th border-black font-normal text-black text-sm">Kapasitas</div>
    </div>
    <div class="tbody">
      @foreach ($datas as $data)
      <div class="tr flex">
        <div class="border w-36 py-2 pl-1 th border-black font-normal text-black text-sm">{{$loop->index + 1}}</div>
        <div class="border w-full py-2 pl-1 th border-black font-normal text-black text-sm">{{$data->merek}}
        </div>
        <div class="border w-full th py-2 pl-1 border-black font-normal text-black text-sm">{{$data->tipe}}</div>
        <div class="border w-full th py-2 pl-1 border-black font-normal text-black text-sm">{{$data->nomor_seri}}</div>
        <div class="border w-full th py-2 pl-1 border-black font-normal text-black text-sm">{{$data->kapasitas}}</div>
      </div>
      @endforeach

    </div>
  </div>
</div>