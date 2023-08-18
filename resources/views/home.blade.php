{{-- @dd($news) --}}
@extends('layouts.main')

@section('container')
    {{-- <p>{{$categories->news[0]}}</p> --}}
    <div class="border border-red-500 justify-between flex w-full">

        <div class="w-3/6 mr-5 border border-redHeavy">

            <img width="656" height="399" src="{{ asset('storage/images/' . $news[0]->thumbnail) }}" alt=""
                title="" />
        </div>

        <div class="w-3/6 mr-5 border border-redHeavy">

            <h1>{{ $news[0]->title }}</h1>
            <h1>{{ $news[0]->category->name }}</h1>
            <h1>{{ $news[0]->authors->name }}</h1>
            <h1>{{ $news[0]->excerpt }}</h1>
            <h1>{{ $news[0]->body }}</h1>
            <p>Published: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($news[0]->published_at))->diffForHumans() }}</p>
            <p>{{ $news[0]->photo_description }}</p>
        </div>
    </div>
@endsection
