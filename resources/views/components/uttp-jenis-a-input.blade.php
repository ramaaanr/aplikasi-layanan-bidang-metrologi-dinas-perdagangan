<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="p-3 w-[5%] font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{ $index }}
    </th>
    <td class="p-1 w-10">
        <input wire:model='merkUTTP' type="text" name="merk_uttp_{{ $index }}" id="merk_uttp_{{ $index }}"
            placeholder="Merek" class="input-light-sm">
        @error('merkUTTP')
            <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror

    </td>
    <td class="p-1 w-9">
        <input wire:model='tipeUTTP' type="text" name="tipe_uttp_{{ $index }}"
            id="tipe_uttp_{{ $index }}" placeholder="Tipe/Model" class="input-light-sm">
        @error('tipeUTTP')
            <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
    </td>
    <td class="p-1 w-9">
        <input wire:model='nomorSeriUTTP' type="text" name="nomor_seri_{{ $index }}"
            id="nomor_seri_{{ $index }}" placeholder="Nomor Seri" class="input-light-sm">
        @error('nomorSeriUTTP')
            <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
    </td>

    <td class="p-1 w-3">
        <input wire:model='kapasitasUTTP' type="text" name="kapasitas_{{ $index }}"
            id="kapasitas_{{ $index }}" placeholder="Kapasitas" class="input-light-sm">
        @error('kapasitasUTTP')
            <p class="text-xs mb-2 pl-2 text-secondary">{{ $message }}</p>
        @enderror
    </td>
</tr>
