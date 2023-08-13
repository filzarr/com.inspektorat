<div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Statistik
    Pengunjung</div>
<div class=" mt-5 w-full">
    <ul class="list-image-checkmark space-y-2  text-black/90 font-semibold text-lg px-5   w-full">
        <li class="w-full">
            <div class="w-full flex justify-between">
                <p>Total Pengunjung</p>
                <p>{{$pengunjung}}</p>
            </div>
        </li>
        <li class="w-full">
            <div class="w-full flex justify-between">
                <p>Pengunjung Tahun Ini</p>
                <p>{{$tahun}}</p>
            </div>
        </li>
        <li class="w-full">
            <div class="w-full flex justify-between">
                <p>Pengunjung Bulan Ini</p>
                <p>{{$bulan}}</p>
            </div>
        </li>
        <li class="w-full">
            <div class="w-full flex justify-between">
                <p>Pengunjung Hari Ini</p>
                <p>{{$hari}}</p>
            </div>
        </li>
    </ul>
</div>