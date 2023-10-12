<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
  <th scope="row" class="p-3 w-[5%] font-medium text-gray-900 whitespace-nowrap dark:text-white">
    {{ $index }}
  </th>
  <td class="p-1 w-10">
    <input wire:model='merek' type="text" name="merek_uttp_{{ $index }}" id="merek_uttp_{{ $index }}"
      placeholder="Merek" class="input-light-sm">
    @error('merek')
    <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
    @enderror
  </td>
  <td class="p-1 w-9">
    <input wire:model='tipe' type="text" name="tipe_uttp_{{ $index }}" id="tipe_uttp_{{ $index }}"
      placeholder="Tipe/Model" class="input-light-sm">
    @error('tipe')
    <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
    @enderror
  </td>
  <td class="p-1 w-9">
    <input wire:model='nomor_seri' type="text" name="nomor_seri_{{ $index }}" id="nomor_seri_{{ $index }}"
      placeholder="Nomor Seri" class="input-light-sm">
    @error('nomor_seri')
    <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
    @enderror
  </td>

  <td class="p-1 w-3">
    <input wire:model='kapasitas' type="text" name="kapasitas_{{ $index }}" id="kapasitas_{{ $index }}"
      placeholder="Kapasitas" class="input-light-sm">
    @error('kapasitas')
    <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
    @enderror
  </td>

  <td class="p-1 w-3 ">
    <div class="flex items-center">
      <input wire:model="jenis" id="jenis_radio_basah" type="radio" value="basah" name="jenis_radio_{{$index}}"
        class="w-4 h-4 text-primary bg-light-grey border-grey focus:text-primary  focus:ring-2 ">
      <label for="jenis_radio_basah" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Basah</label>
    </div>
    <div class="flex items-center">
      <input wire:model="jenis" id="jenis_radio_kering" type="radio" value="kering" name="jenis_radio_{{$index}}"
        class="w-4 h-4 text-primary bg-light-grey border-grey focus:text-primary  focus:ring-2 ">
      <label for="jenis_radio_kering" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kering</label>
    </div>
    @error('jenis')
    <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
    @enderror
  </td>
</tr>