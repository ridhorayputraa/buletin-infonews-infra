{{-- @dd($news) --}}
@extends('layouts.main')

@section('container')
    {{-- <p>{{$categories->news[0]}}</p> --}}
    <div class="border border-red-500 mt-10 justify-between flex w-full">

        <div class="w-3/6 mr-5 ">

            <img class="rounded-3xl	" width="656" height="399" src="{{ asset('storage/images/' . $news[0]->thumbnail) }}"
                alt="" title="" />
        </div>

        <div class="w-3/6 mr-5 border  border-redHeavy">

            <div class="flex  items-center gap-2 ">
                <a href="{{ route('category.show', $news[0]->category->slug) }}"
                    class="font-poppins font-normal text-base text-redHeavy">{{ $news[0]->category->name }}</a>
                <div>.</div>
                <p class="font-poppins font-normal text-base">{{ $news[0]->authors->name }}</p>
                <div>.</div>
                <p class="font-poppins font-normal text-base">Published:
                    {{ \Carbon\Carbon::createFromTimeStamp(strtotime($news[0]->published_at))->diffForHumans() }}
                </p>
            </div>

            <p>{{ $news[0]->title }}</p>

            <p>{{ $news[0]->photo_description }}</p>

            <h1>{{ $news[0]->excerpt }}</h1>
            <h1>{{ $news[0]->body }}</h1>
        </div>
    </div>
@endsection
