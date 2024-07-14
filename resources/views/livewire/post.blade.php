 
<link href="{{ asset('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
<div class="" wire:ignore>
    <textarea name="deskripsi" wire:model="deskripsi" id="editor" cols="30" rows="10"></textarea>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: '{{ route('image.upload') . '?_token=' . csrf_token() }}',
            },
            
        })
        .then(editor => {
       
            editor.model.document.on('change:data', () => {
                @this.set('deskripsi', editor.getData());
            })
            console.log(editor)
        })
        .catch(error => {
            console.error(error);
        });
</script>