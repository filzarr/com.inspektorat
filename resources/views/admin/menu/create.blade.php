@extends('layout.admin')
@push('css')
    @livewireStyles
@endpush
@push('js')
    @livewireScripts
    {{-- <script src="/livewire/livewire.js"></script> --}}
@endpush
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
    <section class="bg-white dark:bg-gray-900 mt-5 ">
        <div class="max-w-5xl  py-10 mx-auto lg:py-16">
            <h2 class="mb-4 text-3xl  font-bold text-gray-900 dark:text-white text-center">Tambah Berita</h2>
            <livewire:menu />
        </div>
    </section>
@endsection
