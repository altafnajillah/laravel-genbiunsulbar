@extends('layout')

@section('title', 'Beasiswa')

@section('content')
    <div class="pt-20 text-center px-10">
        <h1 class="text-2xl md:text-4xl text-gray-800 font-semibold my-5 md:my-10">Halo GenBIers</h1>
        <p class="text-base md:text-xl text-gray-800 max-w-xl mx-auto">
            Bagaimana sih cara menjadi bagian dari penerima beasiswa <span class="text-[#10758F] font-semibold">Bank Indonesia</span>
            ???
        </p>
        <a class="mx-auto mt-10 w-fit h-fit flex space-x-2 bg-[#10758F] rounded-lg px-4 py-2 items-center justify-center"
           href="/pendaftaran">
            <p class="text-white font-semibold text-base md:text-lg">Daftar sekarang</p>
            <svg class="-mr-1 ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 9l-7 7-7-7"/>
            </svg>
        </a>
        <hr class="h-1 bg-gray-100 my-5 md:my-10 rounded-full">

        <h1 class="text-xl md:text-3xl text-gray-800 font-semibold my-5 md:my-10">Apa Itu Beasiswa Bank Indonesia ?</h1>
        <div class="max-w-3xl mx-auto space-y-4">
            <div class="flex flex-col md:flex-row md:space-x-2">
                <div class="md:w-1/2">
                    <p class="text-sm md:text-base mx-auto text-justify">
                        <span class="text-[#10758F] font-semibold">Bank Indonesia (BI)</span> selalu menjadi peluang
                        besar bagi mahasiswa yang ingin melanjutkan pendidikan mereka dengan dukungan finansial.
                        Beasiswa ini tidak hanya menawarkan bantuan dana pendidikan, tetapi juga berbagai keuntungan
                        yang dapat memperluas wawasan dan pengalaman akademik. Tahun ini, Beasiswa Bank Indonesia
                        kembali membuka pendaftaran, dan artikel ini akan membahas secara lengkap mengenai syarat,
                        keuntungan, dan cara mendaftar untuk Beasiswa Bank Indonesia .
                    </p>
                </div>
                <div class="md:w-1/2 mt-4 md:mt-0 md:pl-12">
                    <img class="rounded-xl" src="{{ asset('/images/pamfletPendaftaran.jpeg') }}"
                         alt="pamflet pendaftaran">
                </div>
            </div>
        </div>
        <hr class="h-1 bg-gray-100 my-5 md:my-10 rounded-full">

        <h1 class="text-xl md:text-3xl text-gray-800 font-semibold my-5 md:my-10">Pendaftaran Beasiswa Bank
            Indonesia
            (BI)</h1>
        <div class="max-w-3xl mx-auto space-y-4">
            <p class="text-sm md:text-base mx-auto text-justify">
                Program ini diselenggarakan oleh Bank Indonesia (BI) dalam hal ini Kantor Perwakilan Bank Indonesia
                (KPw) wilayah Provinsi Sulawesi Barat untuk membantu mahasiswa yang berprestasi dalam
                mencapai tujuan pendidikan mereka. Beasiswa ini memberikan kesempatan kepada penerima untuk tidak
                hanya
                mendapatkan dana pendidikan, tetapi juga mengikuti berbagai program pengembangan diri yang dapat
                meningkatkan kompetensi mereka di dunia profesional.
            </p>
            <p class="text-sm md:text-base mx-auto text-justify">
                Beasiswa Bank Indonesia terbuka untuk mahasiswa di berbagai jenjang pendidikan, dengan tujuan untuk
                mencetak generasi muda yang berkualitas dan siap bersaing di dunia kerja, terutama dalam sektor
                ekonomi
                dan keuangan.
            </p>
        </div>
        <hr class="h-1 bg-gray-100 my-5 md:my-10 rounded-full">


        <h1 class="text-xl md:text-3xl text-gray-800 font-semibold my-5 md:my-10">Syarat Beasiswa Bank
            Indonesia</h1>

        <div class="max-w-3xl mx-auto space-y-4">
            <p class="text-sm md:text-base mx-auto text-justify">
                Untuk bisa mengikuti Beasiswa Bank Indonesia, ada beberapa syarat yang harus dipenuhi oleh calon
                peserta. Berikut adalah syarat-syarat utama yang harus Anda perhatikan:
            </p>
            <ol class="text-sm md:text-base list-decimal list-outside space-y-2 text-[#10758F] text-justify"
                type="1">
                <li>
                    Status Mahasiswa
                    <p class="text-sm md:text-base text-gray-800 text-justify">
                        Beasiswa ini terbuka untuk mahasiswa aktif di perguruan tinggi yang sudah terakreditasi di
                        Indonesia. Calon penerima beasiswa harus telah menyelesaikan minimal 40 SKS.
                    </p>
                </li>
                <li>
                    IPK Minimal
                    <p class="text-sm md:text-base text-gray-800 text-justify">
                        Calon penerima beasiswa Bank Indonesia harus memiliki IPK minimal 3.00 (skala 4.00). Hal ini
                        bertujuan untuk memastikan bahwa calon penerima beasiswa memiliki prestasi akademik yang
                        baik.
                    </p>
                </li>
                <li>
                    Berkelakukan Baik
                    <p class="text-sm md:text-base text-gray-800 text-justify">
                        Anda harus memiliki rekam jejak yang baik dalam perilaku akademik maupun sosial. Pihak Bank
                        Indonesia akan menilai kepribadian dan etika peserta, terutama dalam kegiatan kampus.
                    </p>
                </li>
                <li>
                    Bidang Studi yang Relevan
                    <p class="text-sm md:text-base text-gray-800 text-justify">
                        Beasiswa ini biasanya difokuskan untuk mahasiswa yang mengambil jurusan-jurusan yang telah
                        ditentukan dan akan dilampirkan dalam info pendaftaran. Namun, mahasiswa diluar daftar
                        jurusan yang telah ditentukan <span class="font-semibold">TETAP DIPERBOLEHKAN</span>
                        mendaftar.
                    </p>
                </li>
                <li>
                    Memiliki pengalaman berorganisasi
                    <p class="text-sm md:text-base text-gray-800 text-justify">
                        Mahasiswa hendaknya memiliki pengalaman dan keterampilan dalam menjalankan sebuah
                        organisasi. Poin ini akan menjadi nilai tambahan tersendiri sebagai penilaian kriteria
                        penerima beasiswa Bank Indonesia.
                    </p>
                </li>
                <li>
                    Bersedia berperan aktif di GenBI dan masyarakat
                    <p class="text-sm md:text-base text-gray-800 text-justify">
                        GenBI merupakan komunitas yang berisi para penerima beasiswa Bank Indonesia. Mahasiswa yang
                        menerima beasiswa diharapkan dapat aktif dalam menjalankan peran GenBI dimasyarakat terutama
                        dalam menjadi <span class="font-semibold">Frontliner</span>, <span class="font-semibold">Agent of Change</span>
                        dan <span class="font-semibold">Future Leader</span>.
                    </p>
                </li>
                <li>
                    TIDAK sedang menerima beasiswa dari pihak lain
                    <p class="text-sm md:text-base text-gray-800 text-justify">
                        Mahasiswa yang telah menerima beasiswa dari pihak lain baik instansi pemerintah maupun
                        non-pemerintah tidak diperkenankan untuk mendaftar beasiswa Bank Indonesia.
                    </p>
                </li>
            </ol>
        </div>
        <hr class="h-1 bg-gray-100 my-5 md:my-10 rounded-full">


        <h1 class="text-xl md:text-3xl text-gray-800 font-semibold my-5 md:my-10">Keuntungan Beasiswa Bank
            Indonesia</h1>

        <div class="max-w-3xl mx-auto space-y-4">
            <p class="text-sm md:text-base mx-auto text-justify">
                Mendapatkan Beasiswa Bank Indonesia tidak hanya mengurangi beban biaya pendidikan, tetapi juga
                memberikan banyak manfaat tambahan yang dapat mendukung karier akademik dan profesional Anda. Berikut
                adalah beberapa keuntungan yang bisa Anda dapatkan dari Beasiswa Bank Indonesia :
            </p>
            <ol class="text-sm md:text-base list-decimal list-outside space-y-2 text-[#10758F] text-justify"
                type="1">
                <li>
                    Bantuan Dana Pendidikan
                    <p class="text-sm md:text-base text-gray-800 text-justify">
                        Penerima beasiswa akan mendapatkan bantuan dana untuk membiayai pendidikan mereka, mulai
                        dari biaya kuliah hingga kebutuhan lainnya yang berkaitan dengan studi.
                    </p>
                </li>
                <li>
                    Program Pengembangan Diri
                    <p class="text-sm md:text-base text-gray-800 text-justify">
                        Selain bantuan finansial, Bank Indonesia juga menyelenggarakan berbagai program pengembangan
                        diri bagi para penerima beasiswa. Program ini termasuk pelatihan kepemimpinan, pelatihan
                        keterampilan komunikasi, dan seminar terkait dunia ekonomi dan perbankan.
                    </p>
                </li>
            </ol>
        </div>
        <hr class="h-1 bg-gray-100 my-5 md:my-10 rounded-full">


        <div class="max-w-xl mx-auto bg-[#10758F] rounded-tr-[50px] rounded-bl-[50px] p-10">
            <p class="text-sm md:text-base text-white text-justify">
                Beasiswa Bank Indonesia adalah kesempatan besar bagi mahasiswa yang ingin melanjutkan pendidikan dengan
                dukungan finansial serta memperoleh pengalaman berharga dalam dunia perbankan dan ekonomi. Dengan
                memenuhi syarat yang ditentukan dan mengikuti proses pendaftaran dengan teliti, Anda bisa meraih peluang
                ini. Jangan lewatkan kesempatan untuk mendapatkan manfaat yang tidak hanya terbatas pada dana
                pendidikan, tetapi juga pengembangan diri dan jaringan profesional.
            </p>
        </div>

        <h1 class="text-xl md:text-3xl text-gray-800 font-semibold mt-16 md:mt-24">Tunggu apa lagi? siapkan dokumen dan
            daftar!
        </h1>

        <a class="mx-auto mt-6 mb-16 md:mb-24 w-fit h-fit flex space-x-2 bg-[#10758F] rounded-lg px-4 py-2 items-center justify-center"
           href="/pendaftaran">
            <p class="text-white font-semibold text-base md:text-lg">Daftar sekarang</p>
            <svg class="-mr-1 ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 9l-7 7-7-7"/>
            </svg>
        </a>

    </div>
    <div class="my-10"></div>
@endsection
