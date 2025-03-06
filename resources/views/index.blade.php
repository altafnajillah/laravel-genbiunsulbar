@extends('layout')

@section('title', 'Beranda')

@section('content')
    <div class="pt-20">
        <div class="relative h-auto">
            <div class="absolute inset-0 bg-[#10758F] rounded-b-full"></div>
            <div class="container mx-auto relative">
                <h1 class="font-bold text-white text-xl md:text-4xl mx-3 pt-4 text-center font-poppins md:pt-8">{{__("Selamat Datang di Website")}}</h1>
                <h1 class="font-bold text-white text-xl md:text-4xl mx-3 text-center font-poppins md:mt-3">{{__("GenBI Komisariat Unsulbar")}}</h1>
                <div class="px-8 md:px-0 my-4 text-xs md:text-base md:my-10 md:max-w-xl mx-auto">
                    <h3 class="text-center text-white font-semibold">{{__("Generasi Baru Indonesia (GenBI) merupakan komunitas yang terdiri dari mahasiswa/i penerima beasiswa Bank Indonesia yang yang tersebar di seluruh Indonesia.")}}</h3>
                </div>
            </div>
            <div class="flex items-center justify-center mt-2 mx-4 relative">
                <img class="rounded-xl" width="900" src="{{ asset('/images/GambarBeranda.png') }}" alt="GenBIUnsulbar">
            </div>
        </div>


        <div class="mx-auto max-w-sm md:max-w-4xl mt-10 md:mt-20 relative text-xl md:text-4xl text-center px-5">
            <h1 class="font-poppins font-semibold text-gray-800">{{__("Tentang GenBI")}}</h1>
            <div class="h-1 w-28 bg-gray-800 rounded-full mt-1 mb-0 mx-auto"></div>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-5 md:mr-5 md:mb-0 p-10 md:p-20">
                    <img id="logo" src="{{ asset("./images/GenBIUnsulbar2.png")}}" width="w-full"
                         alt="GenBI Unsulbar">
                </div>
                <div class="md:w-1/2 bg-[#10758F] rounded-tr-[100px] rounded-bl-[100px] p-10 md:p-10">
                    <h1 class="text-base md:text-2xl text-left text-white font-bold">Apa itu GenBI?</h1>
                    <p class="text-sm md:text-base text-white text-justify">Generasi Baru Indonesia (GenBI) adalah
                        sebuah komunitas yang berdiri pada 11 November 2011. Perkumpulan ini beranggotakan para
                        mahasiswa yang
                        berhasil menerima Beasiswa Bank Indonesia (BI). Beasiswa tersebut merupakan salah satu bentuk kepedulian Bank Indonesia terhadap ...
                        <a
                                href="/about" class="text-nowrap bg-white rounded-full py-0.5 px-2 text-[#10758F]">Baca
                            selengkapnya</a>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center mt-5 mb-20">
                <img width="600" src="{{ asset('./images/BIUSB.png')  }}" alt="BI Unsulbar">
            </div>


            <h1 class="font-poppins font-semibold text-gray-800">{{__("Berita")}}</h1>
            <div class="h-1 w-16 bg-gray-800 rounded-full mt-1 mb-0 mx-auto"></div>
            <p class="text-base text-gray-800 mt-5">{{__("Temukan informasi kegiatan kami!")}}</p>
            <div class="flex flex-col justify-center mt-5 md:mt-10 mb-20">
                <div class="flex flex-col space-y-2 md:space-y-0 space-x-0 md:flex-row md:space-x-5">
                    @foreach($beritas as $berita)
                    <a href="{{ route('showNews', $berita->id) }}" class="mb-0 md:w-1/2 flex flex-col justify-between items-center rounded-xl shadow-xl">
                        <div class="w-full h-60 rounded-xl flex flex-col justify-center items-center">
                            <img class="rounded-xl" loading="lazy" src="{{ asset( $berita->image ) }}"
                                 alt="Gambar Berita">
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold my-1 md:my-4 text-gray-800">{{ $berita->title }}</h3>
                        <p class="text-sm md:text-base text-gray-700 overflow-hidden line-clamp-3 text-justify px-4">
                            {{ $berita->paragraphs->get(0)->content }}
                        </p>
                    </a>
                    @endforeach
                </div>
                <div class="my-5">
                    <a href="/news" class="bg-[#10758F] px-4 py-2 text-white text-sm md:text-base rounded-full">Baca
                        berita lainnya...</a>
                </div>
            </div>
            <h1 class="font-poppins font-semibold text-gray-800">{{__("Ketua Umum GenBI Unsulbar")}}</h1>
            <div class="h-1 w-36 bg-gray-800 rounded-full mt-1 mb-0 mx-auto"></div>
            <div class="bg-[#10758F] px-8 py-5 mt-10 mb-5 max-w-md mx-auto rounded-t-full rounded-br-full">
                <p class="text-sm md:text-base text-justify text-white"><i>"Berikut adalah isi sembutan selamat datang
                        dari ketua umum Generasi Baru Indonesia komisariat Universitas Sulawesi Barat 2024/2025"</i>
                </p>
            </div>
            <div class="text-gray-800 my-10">
                <div class="w-64 h-52 bg-red-500 rounded-full mx-auto flex justify-center items-center">
                    <img id="logo" class="h-52" src="{{ asset("./images/ketum-dummy.png")}}" width="w-full"
                         alt="GenBI Unsulbar">
                </div>
                <h6 class="font-semibold text-xl md:text-4xl">{{ $ketua->name }}</h6>
                <p class="font-semibold text-base md:text-xl">{{ $ketua->nim }}</p>
            </div>
        </div>
        <!-- Main Content -->
    </div>
@endsection
