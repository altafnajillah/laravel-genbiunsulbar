@extends('layout')

@section('title', 'Program Kerja')

@section('content')
    <div class="pt-20 text-center px-5">
        <h1 class="text-2xl md:text-4xl text-gray-800 font-semibold my-5 md:my-10">Program Kerja</h1>
        <p class="text-base md:text-xl">Temukan berbagai foto dan vidio seru dan menarik dari kegiatan GenBI Unsulbar di
            halaman ini</p>
        <div class="grid md:grid-cols-2 mt-10 md:max-w-3xl mx-auto">
            @foreach($items as $item)
                <a href="{{ route('showGallery', $item['id']) }}" class="mb-4 mx-auto">
                    <div class="relative text-white w-80 h-52 rounded-xl">
                        <img class="rounded-xl" loading="lazy" src="{{ "storage/" . $item['thumbnail']['image'] }}" alt="Gambar Berita">
                        <div class="absolute text-sm bottom-2 left-2 rounded-full px-2 py-1 bg-gray-200 w-fit text-gray-800 opacity-75">
                            {{ \Carbon\Carbon::parse($item['held_at'])->translatedFormat('j F Y') }}
                        </div>
                    </div>
                    <h3 class="text-xl md:text-2xl font-bold my-1 md:my-4 text-gray-800">{{ $item['title'] }}</h3>
                </a>
            @endforeach
        </div>
    </div>
@endsection
