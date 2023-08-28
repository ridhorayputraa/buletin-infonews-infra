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

    </div>
    <div>
        {{-- terpopuler right --}}
    </div>
</div>
