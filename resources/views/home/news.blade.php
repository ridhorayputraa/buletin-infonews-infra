{{-- @dd($news) --}}
<div class="flex flex-row">
    {{-- Wrapper --}}
    <div>
        {{-- Main content left --}}
        <p>
            {{ $news->title }}
        </p>
        <p class="bg-redHeavy">
            {{ $news->authors->name }}
        </p>
        <p>
            Dibuat pada: {{ $news->created_at->isoFormat('dddd, D MMM YYYY HH:mm') }} WIB
        </p>
        <img class="rounded-3xl	" width="656" height="399" src="{{ asset('storage/images/' . $news->thumbnail) }}"
            alt="" title="" />
    </div>
    <div>
        {{-- terpopuler right --}}
    </div>
</div>
