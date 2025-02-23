@extends('layout')

@section('title', 'Pendaftaran')

@section('content')
    <div class="pt-20 text-center px-5 min-h-screen flex flex-col justify-center items-center">
        <svg class="text-gray-300 mb-10 md:mb-20" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 1216 1312"><path fill="currentColor" d="M1202 1066q0 40-28 68l-136 136q-28 28-68 28t-68-28L608 976l-294 294q-28 28-68 28t-68-28L42 1134q-28-28-28-68t28-68l294-294L42 410q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294l294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68L880 704l294 294q28 28 28 68z"/></svg>
        <h3 class=" max-w-xl text-gray-800 md:text-3xl text-xl">Mohon maaf, pendaftaran beasiswa <span class="text-[#10758F]">Bank Indonesia
            Komisariat Unsulbar</span> <span class="text-red-800">belum dibuka</span>. Silahkan menunggu informasi lebih lanjut dari sosial media kami atau <span class="text-[#10758F]">Bank
            Indonesia Sulawesi Barat</span></h3>
        <a class="mx-auto mt-10 w-fit h-fit flex space-x-2 bg-[#10758F] rounded-lg px-4 py-2 items-center justify-center"
           href="{{ '/scholarship' }}">
            <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M4.4 7.4L6.8 4h2.5L7.2 7h6.3a6.5 6.5 0 0 1 0 13H9l1-2h3.5a4.5 4.5 0 1 0 0-9H7.2l2.1 3H6.8L4.4 8.6L4 8z"/>
            </svg>
            <p class="text-white">Kembali</p>
        </a>
    </div>
@endsection
