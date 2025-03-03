@extends('layout')

@section('title', 'Berita')

@section('content')
    <div class="pt-24 text-center px-10">
        <h1 class="max-w-3xl mx-auto text-2xl md:text-4xl text-gray-800 font-semibold mt-5 mb-2 md:mt-10 md:mb-4">
            {{ $news->title }}
        </h1>
        <p class="text-xs md:text-base text-gray-500 max-w-xl mx-auto">
            {{ $news->published_at }}
        </p>

        <div class="flex max-w-3xl items-center justify-center my-6 mx-auto relative">
            <img class="rounded-xl" loading="lazy" width="900" src="{{ asset( $news->image ) }}"
                 alt="Gambar Berita">
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
            @foreach($news->paragraphs as $paragraph)
                <p class="text-sm md:text-base mx-auto text-justify">
                    {{ $paragraph->content }}
                </p>

            @endforeach
{{--            <p class="text-sm md:text-base mx-auto text-justify">--}}
{{--                Program ini diselenggarakan oleh Bank Indonesia (BI) dalam hal ini Kantor Perwakilan Bank Indonesia--}}
{{--                (KPw) wilayah Provinsi Sulawesi Barat untuk membantu mahasiswa yang berprestasi dalam--}}
{{--                mencapai tujuan pendidikan mereka. Beasiswa ini memberikan kesempatan kepada penerima untuk tidak--}}
{{--                hanya--}}
{{--                mendapatkan dana pendidikan, tetapi juga mengikuti berbagai program pengembangan diri yang dapat--}}
{{--                meningkatkan kompetensi mereka di dunia profesional.--}}
{{--            </p>--}}
{{--            <p class="text-sm md:text-base mx-auto text-justify">--}}
{{--                Beasiswa Bank Indonesia terbuka untuk mahasiswa di berbagai jenjang pendidikan, dengan tujuan untuk--}}
{{--                mencetak generasi muda yang berkualitas dan siap bersaing di dunia kerja, terutama dalam sektor--}}
{{--                ekonomi--}}
{{--                dan keuangan.--}}
{{--            </p>--}}
        </div>

    </div>

    <div class="my-10"></div>

@endsection
