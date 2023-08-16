<div class="mt-10 w-full bg-[#214E6D] flex justify-center py-3 font-bold text-[#EFEFF0]">Link
    Terkait</div>
<div class="grid grid-cols-3 gap-10 mt-5">
    @foreach ($link as $item)
        <a href="{{ $item->link }}" target="_blank"><img src="/images/{{ $item->image }}"
                alt="" class="  border-4 border-black/10 shadow-md"></a>
    @endforeach
</div>