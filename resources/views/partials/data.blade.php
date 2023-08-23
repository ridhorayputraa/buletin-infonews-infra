{{-- @dd($categories->news) --}}


<div class="wrapper mt-20 border  border-redHeavy">
    <div class="heading-class flex border border-redHeavy text-center items-center justify-between">
        <p class="font-poppins duration-300  hover:text-redHeavy  text-blackPrimary font-semibold text-2xl">Terbaru</p>
        <div
            class="flex w-48 duration-300 hover:opacity-80 rounded-2xl gap-2 py-2 justify-center radius items-center text-center bg-radius box">
            <p class='text-redHeavy text-lg font-medium font-poppins'>Selengkapnya</p>
            <img class="" width="12px" src="{{ asset('images/ArrowToRight.svg') }}" alt="Informa story">
        </div>
    </div>
    <div class="flex flex-row justify-between  ">
        @foreach ($news as $new)
            <div class="flex flex-col w-72 ">
                <a href="{{ $new->slug }}">
                    <img class="rounded-3xl	duration-300 hover:opacity-80" width="656" height="399"
                        src="{{ asset('storage/images/' . $new->thumbnail) }}" alt="" title="" />
                    <p>{{ $new->title }}</p>
                </a>

            </div>
        @endforeach
    </div>
</div>
