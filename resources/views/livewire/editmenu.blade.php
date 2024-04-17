<div class="">
    <form  wire:submit.prevent="update">
        <div class="grid gap-3 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
            <div class="sm:col-span-2">
                <label for="name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Judul
                    Menu</label>
                <input type="text" name="title" wire:model.lazy="title" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Masukkan Judul Menu...">
            </div>
            <div class="sm:col-span-2">
                <label for="body">Body</label>
                <livewire:editrix :value="$body">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Menu</label>
            <select id="countries" name="gm" wire:model.lazy="gm"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="profile" selected>Profile</option>
                <option value="regulasi">Regulasi</option>
                <option value="pedoman standar">Pedoman Standar</option>
            </select>
        </div>
        <button type="submit"
            class="text-white bg-[#063A69] hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Submit
        </button>
    </form>

</div>
