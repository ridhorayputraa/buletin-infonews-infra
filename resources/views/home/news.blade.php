@extends('layouts.main')
@dd($news )
@section('container')
    <div class="flex flex-row">
        {{-- Wrapper --}}
        <div class="flex flex-row">
            <div class="w-8/12 mr-9 border border-redHeavy">

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

                <img class="rounded-3xl	 max-w-full border border-redHeavy" width="100%"
                    src="{{ asset('storage/images/' . $news->thumbnail) }}" alt="{{ $news->title }}"
                    title="{{ $news->title }}" />

                <p class="text-blackPrimary opacity-80 mt-3">
                    {{$news->photo_description }}
                </p>

                <div class="border border-blackPrimary mt-10">
                    <p>
                        {!!$news->body!!}
                    </p>
                </div>

            </div>

            <div class="w-4/12 border mt-5 ml-9 border-redHeavy">
                {{-- terpopuler right --}}
                <p class="Terpopuler text-blackPrimary font-normal text-2xl font-poppins">Terpopuler</p>
            </div>

        </div>
    </div>
@endsection
