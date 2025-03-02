@extends('layout')

@section('title', 'Berita')

@section('content')
    <div class="pt-20 text-center px-5">
        <h1 class="text-2xl md:text-4xl text-gray-800 font-semibold my-5 md:my-10">Berita</h1>
        <p class="text-base md:text-xl">Temukan berbagai aktivitas dan berita menarik dari kegiatan GenBI Unsulbar di
            halaman ini</p>
        <div class="grid md:grid-cols-2 mt-10 md:max-w-3xl mx-auto">
            @foreach($news as $data)
            <a href="{{ route('showNews', $data->id) }}" class="mb-4 mx-auto flex flex-col items-center shadow-xl rounded-xl p-4">
                <div class="relative p-4 flex justify-center items-center text-white w-72 md:w-80 h-52 rounded-xl">
                    <img class="rounded-xl" loading="lazy" width="900" src="{{ asset( $data->image ) }}"
                         alt="Gambar Berita">
                    <div
                            class="absolute text-sm bottom-2 left-2 rounded-full px-2 py-1 bg-gray-200 w-fit text-gray-800  opacity-75">
                        {{ $data->published_at }}
                    </div>
                </div>
                <div class="w-72 md:w-80 h-fit ">
                    <h3 class="text-lg md:text-xl font-bold mt-1 md:mt-4 h-fit text-gray-800 text-justify">{{ $data->title }}</h3>
                    <p class="text-justify text-xs md:text-base text-gray-700 my-1 md:mb-4 md:my-2 overflow-hidden line-clamp-3">
                        {{ $data->paragraphs->get(0)->content }}
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
