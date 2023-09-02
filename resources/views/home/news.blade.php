@extends('layouts.main')
@section('container')
<div class="flex flex-row">
    {{-- Wrapper --}}
    <div class="flex flex-row">
        <div class="w-8/12 border border-redHeavy">

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
   
        <img class="rounded-3xl	 max-w-full"height="399" src="{{ asset('storage/images/' . $news->thumbnail) }}"
            alt="{{$news->title}}" title="{{$news->title}}" />


        </div>

        <div class="w-4/12 border border-redHeavy">
            {{-- terpopuler right --}}
            <p>Ridho ganteng</p>
        </div>

     </div>
</div>

@endsection