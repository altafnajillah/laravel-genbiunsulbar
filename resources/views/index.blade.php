@extends('master')

@section('title', 'Beranda')

@section('content')
    <div class="pt-20">
        <div class="relative h-auto">
            <div class="absolute inset-0 bg-[#10758F] rounded-b-full"></div>
            <div class="container mx-auto relative">
                <h1 class="font-bold text-white text-xl md:text-4xl mx-4 text-center font-poppins">{{__("Selamat Datang di Website")}}</h1>
                <h1 class="font-bold text-white text-xl md:text-4xl mx-4 text-center font-poppins md:mt-3">{{__("GenBI Komisariat Unsulbar")}}</h1>
                <div class="px-8 md:px-0 mt-2 text-xs md:text-base md:max-w-xl mx-auto">
                    <h3 class="text-center text-white font-semibold">{{__("Generasi Baru Indonesia (GenBI) merupakan komunitas yang terdiri dari mahasiswa/i penerima beasiswa Bank Indonesia yang yang tersebar di seluruh Indonesia.")}}</h3>
                </div>
            </div>
            <div class="flex items-center justify-center mt-2 mx-4 relative">
                <img class="rounded-xl" width="900" src="{{ asset('/images/IMG_4681.png') }}" alt="GenBIUnsulbar">
            </div>
        </div>
        <div class="mx-auto max-w-sm md:max-w-4xl mt-20 relative h-screen text-xl md:text-4xl text-center">
            <h1 class="font-poppins font-semibold text-gray-800 mb-10">{{__("Tentang GenBI Unsulbar")}}</h1>
            <div class="flex items-center justify-center my-5 mx-4">
                <img width="600" src="{{ asset('./images/BIUSBGenBI.png')  }}" alt="BI Unsulbar GenBIUnsulbar">
            </div>
            <div class="flex flex-col md:flex-row items-center bg-[#10758F] rounded-tr-[125px] rounded-bl-[125px] p-10">
{{--                <img id="logo" class="mb-5 md:mr-5 md:mb-0" src="{{ asset("GenBIUnsulbar.png")}}" width="150px"--}}
{{--                     alt="GenBI Unsulbar">--}}
                <div>
                <h1 class="text-base md:text-2xl text-left text-white font-bold">Apa itu GenBI?</h1>
                <p class="text-sm md:text-base text-white text-justify">Generasi Baru Indonesia (GenBI) adalah sebuah
                    komunitas yang berdiri pada 11 November 2011. Perkumpulan ini beranggotakan para mahasiswa yang
                    berhasil menerima Beasiswa Bank Indonesia (BI). Adapun sebutan akrab untuk anggota GenBI adalah
                    GenBIers.
                    Beasiswa tersebut merupakan salah satu bentuk kepedulian Bank Indonesia terhadap ... <a href="/about" class=" bg-white rounded-full py-0.5 px-2 text-[#10758F]">Baca selengkapnya</a></p>
                </div>
            </div>
        </div>
        <!-- Main Content -->
    </div>
@endsection
