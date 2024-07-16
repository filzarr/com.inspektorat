<div class="  min-h-fit min-w-full" id="carousel" onmouseover="hoverDisplay()" onmouseout="leaveDisplay()">
    <div class="relative min-h-full group min-w-full">
        <div class=" min-h-[100px]  xl:min-h-full min-w-full">
            @foreach ($banner as $item)
                <img src="{{ url('images/' . $item->image) }}"
                    class="carousel-image max-h-[700px]  h-[250px] lg:h-full  transition-all duration-150 ease-in brightness-50 group-hover:brightness-100 min-w-full object-cover object-center"
                    alt="">
            @endforeach
        </div>
        <div class="absolute flex justify-between left-3 right-3  min-h-full  top-0 items-center">
            <button class=" hidden rounded-full  px-2 py-1 transition-all duration-150 ease-in      group-hover:block"
                onclick="next()">
                <iconify-icon icon="ic:baseline-arrow-back-ios" width="32" height="32"
                    class=" text-[#1e1e1e]"></iconify-icon>
            </button>
            <button class=" hidden rounded-full  px-2 py-1 transition-all duration-150 ease-in    group-hover:block "
                onclick="previous()">
                <iconify-icon icon="ic:baseline-arrow-back-ios" width="32" height="32"
                    class=" rotate-180 text-[#1e1e1e]"></iconify-icon>
            </button>
        </div>
        @foreach ($banner as $item)
            <div
                class=" gap-2 carousel-text min-w-full min-h-full transition-all duration-150 ease-in flex group-hover:hidden flex-col justify-center bg-[#00000000] absolute bottom-0 px-[8px] sm:px-[16px]  md:px-[32px] lg:px-[64px] xl:px-[128px] py-4">
                <p class=" text-base md:text-lg lg:text-xl xl:text-4xl font-bold text-white">{{$item->judul}}
                </p>
                <p class=" text-xs lg:text-sm truncate ...    w-1/2   text-white">{!! $item->deskripsi !!}</p>
            </div>
        @endforeach 
    </div>
</div>
<style lang="javascript">
    @keyframes animasi-carousel {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .carousel-image {
        animation: animasi-carousel 1s ease-in;
    }

    .carousel-text {
        animation: animasi-carousel 0.5s ease-in;
    }
</style>
<script>
    var active;
    active = 0;
    var image = document.getElementsByClassName('carousel-image');
    var text = document.getElementsByClassName('carousel-text');
    var hover = false;
    setInterval(display, 1000);
    setInterval(increast, 5000);

    function next() {
        if (active == (image.length - 1)) {
            active = 0;
        } else {
            active++;
        }
    }

    function previous() {
        if (active == 0) {
            active = image.length - 1;
        } else {
            active--;
        }
    }

    function hoverDisplay() {
        hover = true;
        for (i = 0; i < image.length; i++) {
            if (active !== i) {
                text[i].style.display = "none";
            } else {
                text[i].style.display = "none";
            }

        }
    }

    function leaveDisplay() {
        hover = false;
        for (i = 0; i < image.length; i++) {
            if (active !== i) {
                text[i].style.display = "none";
            } else {
                text[i].style.display = "flex";
            }

        }
    }

    function display() {
        for (i = 0; i < image.length; i++) { 
            if (active !== i) {
                image[i].style.display = "none";
                text[i].style.display = "none";
            } else {
                image[i].style.display = "block";
                text[i].style.display = "flex";
            }
        }
    }

    function increast() {
        if (hover == false) {
            if (active == (image.length - 1)) {
                active = 0;
            } else {
                active++;
            }
        }
    }
</script>
