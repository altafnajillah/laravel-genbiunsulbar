@extends('layout')

@section('title', 'Tentang Kami')

@section('content')
    <div class="pt-24 text-center px-10">
        <h1 class="text-3xl md:text-4xl text-gray-800 font-semibold mt-5 mb-2 md:mt-10 md:mb-6">Halo GenBIers</h1>

        <p class="text-sm md:text-base text-gray-800 max-w-xl mx-auto">
            Berikut beberapa dokumentasi kegiatan tersebut
        </p>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 mt-10 md:max-w-3xl xl:max-w-5xl mx-auto">
            <div class="mb-4 mx-auto">
                <div class="bg-green-500 text-white w-80 h-52 rounded-xl">
                    <iframe class="rounded-xl w-full h-full"
                            width="560" height="315" src="https://www.youtube.com/embed/-qAsFAqHjyo?si=MQdQVEs0av4-V4ut"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="mb-4 mx-auto">
                <div class="bg-red-500 text-white w-80 h-52 rounded-xl">
                    <img class="rounded-xl" loading="lazy" width="900" src="{{ asset('/storage/demisioners/01JN7TRNRV0R9YJWY4W53KNWXE.png') }}"
                         alt="Gambar Berita">
                </div>
            </div>
            <div class="mb-4 mx-auto">
                <div class="bg-green-500 text-white w-80 h-52 rounded-xl">

                </div>
            </div>
            <div class="mb-4 mx-auto">
                <div class="bg-red-500 text-white w-80 h-52 rounded-xl">

                </div>
            </div>
        </div>

    </div>

    <div class="my-10"></div>
@endsection
