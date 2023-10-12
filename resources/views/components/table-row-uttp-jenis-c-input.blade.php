<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="p-3 w-[5%] font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{ $index }}
    </th>
    <td class="p-1 w-10">
        <input wire:model='merek' type="text" name="merek_uttp_{{ $index }}" id="merek_uttp_{{ $index }}" placeholder="Merek" class="input-light-sm">
        @error('merek')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
    </td>
    <td class="p-1 w-9">
        <input wire:model='tipe' type="text" name="tipe_uttp_{{ $index }}" id="tipe_uttp_{{ $index }}" placeholder="Tipe/Model" class="input-light-sm">
        @error('tipe')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
    </td>
    <td class="p-1 w-9">
        <input wire:model='nomor_seri' type="text" name="nomor_seri_{{ $index }}" id="nomor_seri_{{ $index }}" placeholder="Nomor Seri" class="input-light-sm">
        @error('nomor_seri')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
    </td>

    <td class="p-1 w-3">
        <input wire:model='debit_maksimal' type="text" name="debit_maksimal_{{ $index }}" id="debit_maksimal_{{ $index }}" placeholder="debit_maksimal" class="input-light-sm">
        @error('debit_maksimal')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror

    </td>
    <td class="p-1 w-3">
        <input wire:model='media' type="text" name="media_{{ $index }}" id="media_{{ $index }}" placeholder="media" class="input-light-sm">
        @error('media')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
    </td>
    <td class="p-1 w-3">
        <input type='number' min="1" wire:model='jumlah_nozzle' type="text" name="jumlah_nozzle_{{ $index }}" id="jumlah_nozzle_{{ $index }}" placeholder="jumlah_nozzle" class="input-light-sm">
        @error('jumlah_nozzle')
        <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
    </td>
</tr>