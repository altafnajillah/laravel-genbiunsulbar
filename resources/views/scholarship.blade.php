@extends('master')

@section('title', 'Beasiswa')

@section('content')
    <div class="pt-20 text-center px-10">
        <h1 class="text-2xl md:text-4xl text-gray-800 font-semibold my-5 md:my-10">Halo GenBIers</h1>
        <p class="text-base md:text-xl max-w-xl mx-auto">
            Bagaimana sih cara menjadi bagian dari penerima beasiswa <span class="text-[#10758F] font-semibold">Bank Indonesia</span> ???
        </p>
        <div class="max-w-xl mx-auto mt-5 md:mt-10 bg-[#10758F] p-2 rounded-2xl">
            <img class="rounded-xl" src="{{ asset('/images/pamfletPendaftaran.jpeg') }}" alt="pamflet pendaftaran">
        </div>
        <hr class="h-1 bg-gray-100 my-5 md:my-10 rounded-full">

        <h1 class="text-xl md:text-3xl text-gray-800 font-semibold my-5 md:my-10">Pendaftaran Beasiswa Bank Indonesia</h1>

        <div class="max-w-3xl mx-auto space-y-4">
            <div class="flex flex-col md:flex-row md:space-x-2">
                <div class="md:w-1/2">
                    <p class="text-sm md:text-base mx-auto text-justify">
                        <span class="text-[#10758F] font-semibold">Bank Indonesia</span> adalah bank sentral Republik Indonesia yang mempunyai satu tujuan tunggal yakni mencapai dan menjaga kestabilan nilai rupiah.
                    </p>
                    <p class="text-sm md:text-base mx-auto text-justify mt-2">
                        Selain melaksanakan tugas pokoknya sebagai Bank Sentral, Bank Indonesia (BI) juga peduli pada dunia pendidikan di Indonesia yaitu dengan memberikan Beasiswa kepada mahasiswa di beberapa kampus di Indonesia.
                    </p>
                </div>
                <div class="md:w-1/2 mt-4 md:mt-0 md:px-12">
                    <img class="rounded-xl" src="{{ asset('/images/pamfletPendaftaran.jpeg') }}" alt="pamflet pendaftaran">
                </div>
            </div>
            <p class="text-sm md:text-base mx-auto text-justify">
                Selain melaksanakan tugas pokoknya sebagai Bank Sentral, Bank Indonesia (BI) juga peduli pada dunia pendidikan di Indonesia yaitu dengan memberikan Beasiswa kepada mahasiswa di beberapa kampus di Indonesia.
            </p>
            <p class="text-sm md:text-base mx-auto text-justify">
                Bank Indonesia akan memberikan Beasiswa kepada Mahasiswa yang memenuhi persyaratan dan ketentuan seperti berikut ini :
            </p>
        </div>

        <h1 class="text-xl md:text-3xl text-gray-800 font-semibold my-5 md:my-10">Syarat</h1>

        <div class="max-w-3xl mx-auto space-y-4">
            <p class="text-sm md:text-base mx-auto text-justify">
                Berikut adalah beberapa persyaratan dan kriteria yang perlu diketahui :
            </p>
            <div class="space-y-1">
                <ol class="text-sm md:text-base text-left list-decimal list-inside space-y-1" type="1">
                    <li>Mahasiswa Aktif PTN &and; PTS yang sudah bekerja sama dengan BI</li>
                    <li>Minimal IPK: Reguler [PTN > 3.00; PTS > 3.25], Unggulan > 3.50</li>
                    <li>Usia maksimal 23 tahun</li>
                    <li>Minimal SKS > 40</li>
                    <li>Memiliki pengalaman berorganisasi</li>
                    <li>Bersedia berperan aktif di GenBI dan Masyarakat</li>
                    <li>TIDAK sedang menerima beasiswa dari pihak lain</li>
                </ol>
            </div>
        </div>

        <h1 class="text-xl md:text-3xl text-gray-800 font-semibold my-5 md:my-10">Tahapan Seleksi</h1>

        <div class="max-w-3xl mx-auto space-y-4">
            <p class="text-sm md:text-base mx-auto text-justify">
                Seleksi secara umum dilakukan 2 tahap, yaitu tahap 1 dan tahap 2. Tahap 1 merupakan tahap seleksi administrasi, sedangkan tahap 2 adalah seleksi khusus untuk yang lolos seleksi tahap 1.
            </p>

            <p class="text-sm md:text-base mx-auto text-justify font-semibold">
                Seleksi tahap 1
            </p>

            <p class="text-sm md:text-base mx-auto text-justify font-semibold">
                Seleksi tahap 2
            </p>
        </div>

        <h1 class="text-xl md:text-3xl text-gray-800 font-semibold my-5 md:my-10">Format Dokumen Administrasi</h1>

        <div class="max-w-3xl mx-auto space-y-4">
            <p class="text-sm md:text-base mx-auto text-justify">
                Berikut adalah beberapa dokumen persyaratan untuk tahapan seleksi dokumen :
            </p>
            <div class="space-y-1">
                <p class="text-sm md:text-base mx-auto text-justify font-semibold">
                    Persyaratan Template
                </p>
                <ol class="text-sm md:text-base text-left list-decimal list-inside space-y-2" type="1">
                    <li>Form Biodata Mahasiswa A0 <a href="#" class="bg-[#10758F] px-2 py-0.5 text-white rounded-md hover:bg-[#0D5B70]">Lihat</a></li>
                    <li>Form Biodata Mahasiswa A1 <a href="#" class="bg-[#10758F] px-2 py-0.5 text-white rounded-md hover:bg-[#0D5B70]">Lihat</a></li>
                </ol>
            </div>
            <div class="space-y-1">
                <p class="text-sm md:text-base mx-auto text-justify font-semibold">
                    Persyaratan Data Diri
                </p>
                <ol class="text-sm md:text-base text-left list-decimal list-inside space-y-1" type="1">
                    <li>KTM</li>
                    <li>KTP</li>
                    <li>Fotokopi transkip nilai yang disahkan oleh Universitas Sulawesi Barat</li>
                    <li>Surat keterangan TIDAK menerima beasiswa lain</li>
                    <li>Menulis <i>motivation letter</i></li>
                    <li>Surat keterangan aktif berorganisasi</li>
                    <li>Surat keterangan tidak mampu <span class="text-xs md:text-sm text-red-800 font-semibold">(tidak wajib)</span></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="my-10"></div>
@endsection
