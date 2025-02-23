@extends('layout')

@section('title', 'Pendaftaran')

@section('content')
    <div class="pt-20 text-center px-10">
        <h1 class="text-2xl md:text-4xl text-gray-800 font-semibold my-5 md:my-10">
            Pendaftaran Beasiswa Bank Indonesia
        </h1>
        <p class="text-base md:text-xl max-w-xl mx-auto">
            Tunggu apa lagi siapkan dokumen dan daftarkan dirimu!
        </p>

        <div class="my-10 md:my-14 max-w-lg mx-auto space-y-3">
            <div
                class="ml-auto w-full px-2 md:px-4 py-2 md:py-4 rounded-lg bg-[#0D5B70] font-semibold text-xl md:text-2xl text-white">
                Timeline Seleksi Berkas Beasiswa
            </div>
            <div
                class="mr-auto w-full px-2 md:px-4 py-2 md:py-4 rounded-lg bg-[#0D5B70] font-semibold text-base md:text-lg text-white">
                Pengumpulan Berkas<br><span class="text-sm md:text-base font-normal">24 Mei 2024</span>
            </div>
            <div
                class="ml-auto w-full px-2 md:px-4 py-2 md:py-4 rounded-lg bg-[#0D5B70] font-semibold text-base md:text-lg text-white">
                Seleksi Berkas Administrasi<br><span class="text-sm md:text-base font-normal">24 Mei 2024</span>
            </div>
            <div
                class="mr-auto w-full px-2 md:px-4 py-2 md:py-4 rounded-lg bg-[#0D5B70] font-semibold text-base md:text-lg text-white">
                Tahap Wawancara<br><span class="text-sm md:text-base font-normal">24 Mei 2024</span>
            </div>
            <div
                class="ml-auto w-full px-2 md:px-4 py-2 md:py-4 rounded-lg bg-[#0D5B70] font-semibold text-base md:text-lg text-white">
                Pengumuman Penerima Beasiswa<br><span class="text-sm md:text-base font-normal">24 Mei 2024</span>
            </div>
        </div>

        <p class="text-base md:text-xl max-w-xl mx-auto">
            Berkas Dikumpulkan dalam bentuk 1 Gabungan dokumen dan dimasukkan ke dalam <span class="text-red-800">Map Merah (Mahasiswa Reguler)</span>
            dan <span class="text-blue-800">Map Biru (Mahasiswa GenBI)</span>.
        </p>
        <p class="text-base md:text-xl max-w-xl mx-auto">
            Selanjutnya dokumen dimaksud disampaikan kepada bagian Kemahasiswaan Universitas Sulawesi Barat
        </p>

        <div class="max-w-3xl mx-auto space-y-4 bg-[#D9D9D980] mt-8 md:mt-10 rounded-xl px-10 py-5">
            <div class="w-full py-2 md:py-4 rounded-lg bg-[#0D5B70] font-semibold text-base md:text-lg text-white">
                Kriteria Umum Mahasiswa Penerima Beasiswa Jenjang S1
            </div>
            <p class="text-sm md:text-base mx-auto text-justify">
                Berikut adalah beberapa dokumen persyaratan untuk tahapan seleksi dokumen :
            </p>

            <div class="space-y-1 pl-5">
                <ol class="text-sm md:text-base text-left list-decimal list-outside space-y-2" type="1">
                    <li>Merupakan mahasiswa aktif program S1 yang dibuktikan dengan Kartu Tanda Mahasiswa atau surat
                        Keterangan Aktif.
                    </li>
                    <li>Tidak memiliki hubungan keluarga yang terafilisasi oleh Bank Indonesia.</li>
                    <li>Sekurang-kurangnya telah menyelesaikan 40 (empat puluh) satuan kredit semester (SKS) atau 3
                        semester.
                    </li>
                    <li>setiap mahasiswa, menerima beasiswa paling lama hanya 4 semester sepanjang memenuhi kriteria
                        yang ditentukan.
                    </li>
                    <li>Maksimal berusia 23 tahun atau belum berusia 24 tahun pada saat ditetapkan sebagai penerima
                        beasiswa.
                    </li>
                    <li>Tidak sedang menerima beasiswa dari lembaga lain dan/atau berada dalam ikatan dinas dari
                        lembaga/instansi lain.
                    </li>
                    <li>Mempunyai pengalaman menjalankan aktivitas sosial yang memiliki dampak kebermanfaatan bagi
                        masyarakat.
                    </li>
                    <li>Bersedia untuk berperang aktif, mengelolah dan mengembangkan Generasi Baru Indonesia (GenBI)
                        serta berpartisipasi dalam kegiatan yang diselenggarakan oleh Bank Indonesia.
                    </li>
                </ol>
            </div>
        </div>

        <div class="max-w-3xl mx-auto space-y-4 bg-[#D9D9D980] rounded-xl mt-10 px-10 py-5">
            <div class="w-full py-2 md:py-4 rounded-lg bg-[#0D5B70] font-semibold text-lg md:text-xl text-white">
                Kriteria Khusus Mahasiswa Reguler S1
            </div>
            <p class="text-sm md:text-base mx-auto text-justify">
                Berikut kriteria khusus yang diperlukan :
            </p>
            <div class="space-y-1 pl-5">
                <ol class="text-sm md:text-base text-left list-decimal list-outside space-y-2" type="1">
                    <li>Memiliki Indeks Komulatif (IPK) minimal skala 3.00 (skala 4.00).</li>
                    <li>Diutamakan bagi mahasiswa yang berasal dari latar belakang ekonomi keluarga kurang mampu (pra
                        sejahtera) yang dibuktikan dengan adanya Surat Keterangan Tidak Mampu (SKTM) dari kelurahan/desa
                        domisili orang tua mahasiswa.
                    </li>
                    <li>Membuat resume pribadi dan motivation letter dalam bahasa indonesia.</li>
                    <li>Menyertakan surat rekomendasi dari 1 tokoh (akademik atau non-akademik)</li>
                </ol>
            </div>
        </div>

        {{-- Program Studi Prioritas --}}
        <div class="max-w-3xl mx-auto space-y-4 bg-[#D9D9D980] rounded-xl mt-10 px-10 py-5">
            <div class="w-full py-2 md:py-4 rounded-lg bg-[#0D5B70] font-semibold text-lg md:text-xl text-white">
                Program Studi Prioritas
            </div>
            <p class="text-sm md:text-base mx-auto text-justify">
                Penerima Beasiswa Bank Indonesia jenjang S1 Reguler diprioritaskan dari program
                Studi / Jurusan / Departemen, sebagai berikut :
            </p>
            <div class="pl-5">
                <ol class="text-sm md:text-base text-left list-decimal list-outside space-y-2" type="1">
                    <li>Ilmu Ekonomi dan Studi Pembangunan</li>
                    <li>Manajemen / Pendidikan Ekonomi Manajemen</li>
                    <li>Akutansi / Pendidikan Akutansi</li>
                    <li>Perbankan / Keuangan Syariah</li>
                    <li>Ekonomi Islam / Ekonomi Syariah</li>
                    <li>Matematika / Pendidikan Matematika</li>
                    <li>Statistika</li>
                    <li>Pertanian / Peternakan / Agrebisnis / Hortikultura</li>
                    <li>Sosial ekonomi Pertanian/ Sosial Ekonomi Perikanan</li>
                    <li>Ilmu Hukum / Hukum Ekonomi Syariah</li>
                    <li>Ilmu Pemerintah</li>
                    <li>Ilmu Sosial dan Ilmu Politik</li>
                    <li>Komunikasi / Ilmu Komunikasi</li>
                    <li>Teknologi Informasi</li>
                    <li>Sistem Informasi</li>
                    <li>Ilmu Komputer / Informatika</li>
                </ol>
            </div>
        </div>

        <div class="max-w-3xl mx-auto space-y-4 bg-[#D9D9D980] rounded-xl mt-10 px-10 py-5">
            <div class="w-full py-2 md:py-4 rounded-lg bg-[#0D5B70] font-semibold text-lg md:text-xl text-white">
                Kelengkapan Dokumen
            </div>
            <p class="text-sm md:text-base mx-auto text-justify">
                Berikut adalah beberapa dokumen persyaratan untuk tahapan seleksi dokumen :
            </p>
            <div class="space-y-2">
                <p class="text-sm md:text-base mx-auto text-justify font-semibold">
                    Persyaratan Template
                </p>
                <ol class="text-sm md:text-base text-left list-decimal list-outside space-y-2 pl-5" type="1">
                    @foreach($documents as $document)
                        <li>{{ $document->name }}
                            <a href="{{ $document->link }}"
                               class="bg-[#10758F] px-2 py-0.5 text-white rounded-sm hover:bg-[#0D5B70]"
                            >
                                Lihat
                            </a>
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="space-y-1">
                <p class="text-sm md:text-base mx-auto text-justify font-semibold">
                    Persyaratan Data Diri
                </p>
                <ol class="text-sm md:text-base text-left list-decimal list-outside space-y-1 pl-5" type="1">
                    <li>KTM.</li>
                    <li>KTP.</li>
                    <li>Fotokopi transkip nilai yang disahkan oleh Universitas Sulawesi Barat.</li>
                    <li>Surat keterangan TIDAK menerima beasiswa lain.</li>
                    <li>Menulis <i>motivation letter</i>.</li>
                    <li>Surat keterangan aktif berorganisasi.</li>
                    <li>Surat keterangan tidak mampu <span class="text-xs md:text-sm text-red-800 font-semibold">(tidak wajib)</span>.
                    </li>
                </ol>
            </div>
        </div>

    </div>
    <div class="my-10"></div>
@endsection
