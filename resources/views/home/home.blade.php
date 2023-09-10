{{-- @dd($news) --}}
@extends('layouts.main')

@section('container')
    {{-- <p>{{$categories->news[0]}}</p> --}}
    <div class="border border-red-500 mt-10 justify-between flex w-full">

        <div class="w-3/6 mr-5 ">

            <img class="rounded-3xl	" width="656" height="399" src="{{ asset('storage/images/' . $news[0]->thumbnail) }}"
                alt="" title="" />
            <p class="text-blackPrimary text-opacity-70 text-sm font-poppins">{{ $news[0]->photo_description }}</p>

        </div>

        <div class="w-3/6 mr-5 border flex flex-col gap-4 py-7 border-redHeavy">

            <div class="flex  items-center gap-2 ">
                <a href="{{ route('category.show', $news[0]->category->slug) }}"
                    class="font-poppins font-normal text-base text-redHeavy">{{ $news[0]->category->name }}</a>
                <div class="text-blackTrans">.</div>
                <p class="font-poppins font-normal text-blackTrans text-base">{{ $news[0]->authors->name }}</p>
                <div class="text-blackTrans">.</div>
                <p class="font-poppins font-normal text-blackTrans text-base">Published:
                    {{ \Carbon\Carbon::createFromTimeStamp(strtotime($news[0]->published_at))->diffForHumans() }}
                </p>
            </div>

            <p class="text-blackPrimary font-serif	font-bold text-5xl ">{{ $news[0]->title }}</p>


            {{-- <p class="truncate">{{ $news[0]->excerpt }}</p> --}}
            <p class="text-blackPrimary text-1xl font-normal font-poppins">
                {!! Illuminate\Support\Str::limit($news[0]->excerpt, 370) !!}</p>
        </div>
    </div>

    @include('partials.data')
    
@endsection






