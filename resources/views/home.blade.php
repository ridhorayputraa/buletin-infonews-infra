{{-- @dd($news) --}}
@extends('layouts.main')

@section('container')
    {{-- <p>{{$categories->news[0]}}</p> --}}
    <h1>{{ $news[0]->title }}</h1>
    <h1>{{ $news[0]->category->name }}</h1>
    <h1>{{ $news[0]->authors->name }}</h1>
    <h1>{{ $news[0]->excerpt }}</h1>
    <h1>{{ $news[0]->body }}</h1>
    <img width="800px" height="800px" src="{{ asset('storage/images/' . $news[0]->thumbnail) }}" alt=""
        title="" />
    <p>{{ $news[0]->photo_description }}</p>
@endsection
