@extends('master')

@section('title', 'Beranda')

@section('content')
    <h1 class="font-semibold text-gray-800 text-xl mx-4 text-center font-poppins">Selamat Datang di Website Generasi
        Baru Indonesia
        (GenBI)<br>Komisariat Universitas Sulawesi Barat</h1>
    <div class="flex items-center justify-center mt-2 mx-4">
        <img width="600" src="{{ asset('./images/BIUSBGenBI.png')  }}" alt="BI Unsulbar GenBIUnsulbar">
    </div>
    <!-- Main Content -->
    <main class="pt-4">
        <section class="min-h-screen bg-gray-200 flex items-center justify-center">
            <h1 class="text-4xl font-bold">Welcome to My Website</h1>
        </section>
        <section class="min-h-screen bg-gray-300 flex items-center justify-center">
            <h2 class="text-3xl font-bold">Another Section</h2>
        </section>
    </main>
@endsection
