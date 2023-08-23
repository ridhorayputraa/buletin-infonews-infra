{{-- @dd($categories->news) --}}


<div class="wrapper mt-20">
    <div class="heading-class flex  justify-between">
        <p class="font-poppins duration-300  hover:text-redHeavy  text-blackPrimary font-semibold text-2xl">Terbaru</p>
        <div class="flex w-48 rounded-2xl gap-2 py-2 justify-center radius items-center text-center bg-radius box">
            <p class='text-redHeavy text-lg font-medium font-poppins'>Selengkapnya</p>
            <img class="" width="12px" src="{{ asset('images/ArrowToRight.svg') }}" alt="Informa story">
        </div>
    </div>
</div>



<div>
    @foreach ($news as $new)
        <div class="flex flex-col">
            <p>{{ $new->title }}</p>

        </div>
    @endforeach
</div>
