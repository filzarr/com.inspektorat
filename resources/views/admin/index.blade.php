@extends('layout.admin')
@section('content')
    <div class="grid grid-cols-4 gap-8">
        <div class="border-2 border-gray-200 bg-white rounded-xl  p-5">
            <div class="flex gap-2 items-center">
                <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                </svg>
                <p class=" text-sm font-medium text-gray-700">Pengunjung Bulan Ini</p>
            </div>
            <div class="flex justify-between items-center content-center place-content-center mt-5">
                <p class=" text-4xl  font-bold text-gray-800">{{$bulan}}</p>
                <div class="p-2 rounded-lg  flex gap-2 bg-green-400">
                    <svg class="w-5 h-5 text-gray-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M1 1v14h16M4 10l3-4 4 4 5-5m0 0h-3.207M16 5v3.207" />
                    </svg>
                    <p class=" text-sm font-semibold text-gray-800">10%</p>
                </div>
            </div>
        </div>
        <div class="border-2 border-gray-200 bg-white rounded-xl  p-4">
            <div class="flex gap-2 items-center justify-between">
                <div class="flex gap-2">
                    <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M18 5h1v12a2 2 0 0 1-2 2m0 0a2 2 0 0 1-2-2V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v15a2 2 0 0 0 2 2h14ZM10 4h2m-2 3h2m-8 3h8m-8 3h8m-8 3h8M4 4h3v3H4V4Z" />
                    </svg>
                    <p class=" text-sm font-medium text-gray-700">Berita</p>
                </div>
                <div class=" ">
                    <button class="rounded-full bg-gray-800 p-1">
                        <svg class="w-4 h-4 text-gray-100 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex justify-between items-center content-center place-content-center mt-5">
                <p class=" text-4xl  font-bold text-gray-800">{{$berita}}</p>

            </div>
        </div>
        <div class="border-2 border-gray-200 bg-white rounded-xl  p-5">
            <div class="flex gap-2 items-center">
                <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p class=" text-sm font-medium text-gray-700">Laporan</p>
            </div>
            <div class="flex justify-between items-center content-center place-content-center mt-5">
                <p class=" text-4xl  font-bold text-gray-800">{{$total1 + $total2}}</p>
                <div class="p-2 rounded-lg  flex gap-2 bg-red-500">
                    <svg class="w-5 h-5 text-gray-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M1 1v14h16M4 10l3-4 4 4 5-5m0 0h-3.207M16 5v3.207" />
                    </svg>
                    <p class=" text-sm font-semibold text-gray-800">10%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-5 mt-10">
        <div class=" col-span-2">
            <div class="w-full bg-white p-5 rounded-lg border-2 border-gray-200 text-gray-900">
                <p class=" text-center text-2xl font-semibold text-gray-800">Statistik Pengunjung</p>
                <canvas id="myChart" style="width:100%" class="mt-3"></canvas>
            </div>

        </div>
        <div class="bg-white rounded px-10 py-5 border-gray-200 border-2">
            <p class="text-2xl font-semibold text-gray-800 ">Laporan Terbaru</p>
            <div class="grid grid-rows-2 mt-8 gap-10">
                @foreach ($c as $c)
                    
                <div class=" grid gap-2">
                    <div class="flex justify-between">
                        <p class="font-semibold text-gray-800 text-lg">{{$c->nama}}</p>
                        <a href="/admin/laporan" class="rounded-full bg-gray-800 p-2">
                            <svg class="w-3 h-3 text-gray-100 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                    <div class=""><span class="text-xs px-3 py-1 text-gray-100 rounded-2xl bg-gray-700">{{$c->keterangan}}</span></div>
                    <div class=" text-xs font-medium text-gray-500">{{$c->deskripsi}}</div>
                </div>
                @endforeach
          

            
             
            </div>
        </div>

    </div>

    <script>
        const xValues = [@foreach($statistik as $item)
        "{{$item->month}}",
        @endforeach
        ];
        const yValues = [@foreach($statistik as $item)
        "{{$item->data}}",
        @endforeach];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,1.0)",
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 10000
                        }
                    }],
                }
            }
        });
    </script>
@endsection
