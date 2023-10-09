<div class="table-uttp-container order-5 col-span-2 mb-3">

    <div class=" md:w-1/2 pr-4 form-group-container">
        <p class="text-sm md:text-base font-semibold">Jumlah UTTP</p>
        <div class="relative my-3">
            <input min="1" wire:model.live="jumlahUTTP" type="number" id="jumlah-uttp" class="form-input peer"
                placeholder=" " />
            <label for="jumlah-uttp"
                class="absolute text-sm text-dark-grey duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Jumlah
                UTTP/Unit</label>
        </div>
    </div>
    <div class="form-group-container">
        <p class="text-sm md:text-base font-semibold">Identitas UTTP</p>

        <div class="relative overflow-x-auto shadow-md rounded-md sm:rounded-lg mt-2 border-2 border-grey">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="bg-light-2">
                        <th scope="col" class="p-3 w-[5%]">
                            <div class="flex items-center">
                                No
                            </div>
                        </th>
                        <th scope="col" class="p-3 w-9">
                            <div class="flex items-center">
                                Merek
                            </div>
                        </th>
                        <th scope="col" class="p-3 w-9">
                            <div class="flex items-center">
                                Tipe/Model
                            </div>
                        </th>
                        <th scope="col" class="p-3 w-9">
                            <div class="flex items-center">
                                Nomor Seri
                            </div>
                        </th>
                        <th scope="col" class="p-3 w-3">
                            <div class="flex items-center">
                                Kapasitas
                            </div>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach (range(1, $jumlahUTTP) as $index)
                        @livewire('components.uttp-jenis-a-input', ['index' => $index], key($index))
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
