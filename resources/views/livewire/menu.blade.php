<div class="">
    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
    <form wire:submit.prevent="save">
        <div class="grid gap-3 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
            <div class="sm:col-span-2">
                <label for="name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Judul
                    Menu</label>
                <input type="text" name="title" wire:model.lazy="title" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Masukkan Judul Menu...">
            </div>
            <div class="sm:col-span-2">
                <label for="editor">Body</label>
                <div class="" wire:ignore>
                    <textarea name="link" wire:model="link" id="editor" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                Menu</label>
            <select id="countries" name="gm" wire:model.lazy="gm"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="profile" selected>Profile</option>
                <option value="program">Program</option>
                <option value="laporan">Laporan</option>
                <option value="irban1 ">Irban 1 </option> 
                <option value="irban2">Irban 2 </option> 
                <option value="irban3">Irban 3</option> 
                <option value="irban4">Irban 4</option> 
                <option value="irbansus">Irban sus </option>
                <option value="gratifikasi">Gratifikasi</option>
                <option value="ppid">PPID</option>
            </select>
        </div>
        <div class="flex items-center space-x-4 mt-10">

        </div>
        <button type="submit"
            class="text-white bg-[#063A69] hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Submit
        </button>
    </form>
    
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('image.upload') . '?_token=' . csrf_token() }}',
                },
                
            })
            .then(editor => {
           
                editor.model.document.on('change:data', () => {
                    @this.set('link', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</div>
