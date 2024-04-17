<div class="lg:bg-white mb-20 mt-20">
    <div class="flex justify-between items-center">
        <p class=" text-base lg:text-4xl uppercase font-bold items-center text-[#3E6E8B]">Berita Lainnya</p>
        <a href="/berita">
            <p class=" text-xs lg:text-lg uppercase font-bold text-[#3E6E8B] hover:underline">Lihat berita lainnya</p>
        </a>
    </div>
    <div class="grid  lg:grid-cols-5 gap-10 mt-10">
        @foreach ($data as $data)
            <div class="border grid  border-black/10 shadow-lg drop-shadow-lg pb-5 rounded-lg overflow-hidden">
                <a href="/berita/{{ $data->slug }}"><img src="/images/{{ $data->image }}" alt=""
                        class="w-full h-44 border border-black/10 shadow-none"></a>
                <div class=" grid px-2  gap-3 mt-3">
                    <a href="/berita/{{ $data->slug }}">
                        <p class="text-[#3E6E8B]  font-bold">{{ $data->judul }}</p>
                    </a>
                    <p class=" text-xs font-bold text-black/80">
                        {{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }} Posted By Admin </p>
                    <a href="/berita/{{ $data->slug }}">
                        <p class=" capitalize text-lg font-semibold break-words text-black/70 place-items-end">
                            Selengkapnya</p>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
</div>
