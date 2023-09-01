@extends('layouts.main')
@section('container')
<div class="flex flex-row">
    {{-- Wrapper --}}
    <div>
        <div class="">

            {{-- Main content left --}}
        <p class="text-blackPrimary font-serif	font-bold text-5xl ">
            {{ $news->title }}
        </p>
        <p class="text-redHeavy font-poppins font-normal text-xl">
            {{ $news->authors->name }}
        </p>
     
        <p>
            Dibuat pada: {{ $news->created_at->locale('id')->diffForHumans() }} 
        </p>
    </div>
        <img class="rounded-3xl	" width="656" height="399" src="{{ asset('storage/images/' . $news->thumbnail) }}"
            alt="{{$news->title}}" title="{{$news->title}}" />
    </div>

    <div>
        {{-- terpopuler right --}}
    </div>
</div>

@endsection