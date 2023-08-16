{{-- @dd($category->news) --}}
<!-- resources/views/category/show.blade.php -->

@extends('layouts.main') <!-- Meng-extend layout yang Anda gunakan -->

@section('container')
    {{-- @dd($category) --}}
    <p>Ridho keren</p>
    <p>{{ $category->name }}</p>
    <p>{{ $category->news[0]->title }}</p>
    <img width="800px" height="800px" src="{{ asset('storage/' . $category->news[0]->thumbnail) }}" alt=""
        title="" />
@endsection
