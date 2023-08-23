{{-- @dd($categories->news) --}}


<div class="wrapper mt-20">
    <div class="heading-class flex  justify-between">
        <p class="font-poppins text-blackPrimary font-semibold text-2xl">Terbaru</p>
        <div class="flex w-52 rounded-2xl gap-2 py-2 justify-center radius items-center text-center bg-radius box">
            <p class='text-redHeavy text-lg font-medium font-poppins'>Selengkapnya</p>
            <img class="" width="16px" src="{{ asset('images/ArrowToRight.svg') }}" alt="Informa story">
        </div>
    </div>
</div>



<p>{{ $categories[0]->news[0]->title }}</p>
