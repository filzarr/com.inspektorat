@extends('layout.admin')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
    <section class="bg-white dark:bg-gray-900 mt-5 ">
        <div class="max-w-2xl  py-10 mx-auto lg:py-16">
            <h2 class="mb-4 text-3xl  font-bold text-gray-900 dark:text-white text-center">Balas Laporan</h2>
            <form action="/admin/laporan/ppid/{{$jenis}}/{{$id}}/balasan" method="POST" >
                @csrf
                <div class="">
                    <div class="mb-6 w-full">
                        <label for="description"
                        class="mb-2 text-lg font-medium text-gray-900 dark:text-white">Balasan</label>
                        <input id="description" type="hidden" name="balasan">
                        <trix-editor input="description"  class="w-full"></trix-editor>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="text-white bg-[#063A69] hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                       Submit
                    </button>
              
                </div>
            </form>
        </div>
    </section>
@endsection
