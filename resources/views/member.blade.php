@extends('layout')

@section('title', 'Anggota')

@section('content')
    <div class="pt-20 text-center px-5">
        <h1 class="text-2xl md:text-4xl text-gray-800 font-semibold my-5 md:my-10">Program Kerja</h1>
        <p class="text-base md:text-xl">
            Daftar Pengurus Aktif dan Foto Bersama Demisioner GenBI Unsulbar
        </p>
        <div class="flex max-w-sm bg-[#10758F] rounded-xl text-white text-center text-base md:text-xl my-10 p-1 mx-auto">
            <a href="{{ route('pengurus') }}"
               class="w-1/2 rounded-lg px-1 py-1 hover:bg-[#0D5B70] {{ Request::is('member/pengurus') ? "bg-[#0D5B70]" : "" }}">Pengurus</a>
            <a href="{{ route('demisioner') }}"
               class="w-1/2 rounded-lg px-1 py-1 hover:bg-[#0D5B70] {{ Request::is('member/demisioner') ? "bg-[#0D5B70]" : "" }}">Demisioner</a>
        </div>

        @yield('member')

    </div>
@endsection
