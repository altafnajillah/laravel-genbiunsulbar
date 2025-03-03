@extends('layout')

@section('title', 'Dokumentasi')

@section('content')
    <div class="pt-24 text-center px-10">
        <h1 class="text-3xl md:text-4xl text-gray-800 font-semibold mt-5 mb-2 md:mt-10 md:mb-6">{{ $gallery->title }}</h1>

        <p class="text-sm md:text-base text-gray-800 max-w-xl mx-auto">
            Berikut beberapa dokumentasi kegiatan tersebut
        </p>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 mt-10 md:max-w-3xl xl:max-w-5xl mx-auto">
            @foreach($gallery->galleries as $item)
                @if($item->type == 'video' && $item->video != null)
                    <div class="mb-4 mx-auto">
                        <div class="text-white w-80 h-52 rounded-xl">
                            <iframe class="rounded-xl w-full h-full"
                                    width="560" height="315" src="{{ $item->video }}"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                @elseif($item->image != null)
                    <div class="mb-4 mx-auto">
                        <div class=" text-white w-80 h-52 rounded-xl">
                            <img class="rounded-xl" loading="lazy" width="900"
                                 src="{{ asset('storage/' . $item->image ) }}"
                                 alt="Gambar Berita">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="my-10"></div>
@endsection
