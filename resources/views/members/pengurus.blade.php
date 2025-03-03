@extends('member')

@section('member')
    <div class="max-w-3xl mx-auto">
        <p class="text-base md:text-xl">Dalam menjalankan tugas dan tanggung jawabnya, GenBI Unsulbar memiliki struktur
            kepengurusan yang terdiri dari:</p>
    </div>

    <div class="my-10">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Pengurus Inti")}}</h1>
    </div>

    <div class="max-w-4xl flex flex-col md:justify-center md:flex-row text-center mx-auto mb-2">
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img loading="lazy" class="object-cover w-full h-4/5 rounded-t-2xl" src="{{ asset($inti->get(0)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $inti->get(0)->name }}</div>
            <div class="text-base py-1">Ketua Umum</div>
        </div>
    </div>

    <div
        class="max-w-lg space-y-4 md:space-y-0 mt-4 md:mt-10 grid grid-cols-1 md:grid-cols-2 md:justify-center md:flex-row text-center mx-auto">
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img loading="lazy" class="object-cover w-full h-4/5 rounded-t-2xl" src="{{ asset($inti->get(1)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $inti->get(1)->name }}</div>
            <div class="text-base py-1">Sekretaris Umum</div>
        </div>
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img loading="lazy" class="object-cover w-full h-4/5 rounded-t-2xl" src="{{ asset($inti->get(2)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $inti->get(2)->name }}</div>
            <div class="text-base py-1">Bendahara Umum</div>
        </div>
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Pendidikan")}}</h1>
    </div>
    <div
        class="max-w-lg space-y-4 md:space-y-0 mt-4 md:mt-10 grid grid-cols-1 md:grid-cols-2 md:justify-center text-center mx-auto">
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img loading="lazy" class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($pendidikan->get(0)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $pendidikan->get(0)->name }}</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img loading="lazy" class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($pendidikan->get(1)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $pendidikan->get(1)->name }}</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
    </div>

    <div
        class="grid grid-cols-1 md:grid-cols-2 md:max-w-lg xl:max-w-3xl xl:grid-cols-3 xl:space-x-4 space-y-4 items-end justify-center mt-4 md:mt-4 md:justify-center text-center mx-auto">

        @for($i = 2; $i < count($pendidikan); $i++)
            <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
                <img loading="lazy" class="object-cover w-full h-4/5 rounded-t-2xl"
                     src="{{ asset(($pendidikan->get($i)->image) ) }}"
                     alt="profile">
                <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $pendidikan->get($i)->name }}</div>
                <div class="text-base py-1">Anggota</div>
            </div>
        @endfor
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Publikasi dan Sosialisasi")}}</h1>
    </div>
    <div
        class="max-w-lg space-y-4 md:space-y-0 mt-4 md:mt-10 grid grid-cols-1 md:grid-cols-2 md:justify-center text-center mx-auto">
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img loading="lazy" class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($pubdok->get(0)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $pubdok->get(0)->name }}</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img loading="lazy" class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($pubdok->get(1)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $pubdok->get(1)->name }}</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
    </div>

    <div
        class="grid grid-cols-1 md:grid-cols-2 md:max-w-lg xl:max-w-3xl xl:grid-cols-3 xl:space-x-4 space-y-4 items-end justify-center mt-4 md:mt-4 md:justify-center text-center mx-auto">

        @for($i = 2; $i < count($pubdok); $i++)
            <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
                <img loading="lazy" class="object-cover w-full h-4/5 rounded-t-2xl"
                     src="{{ asset(($pubdok->get($i)->image) ) }}"
                     alt="profile">
                <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $pubdok->get($i)->name }}</div>
                <div class="text-base py-1">Anggota</div>
            </div>
        @endfor
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Kewirausahaan")}}</h1>
    </div>
    <div
        class="max-w-lg space-y-4 md:space-y-0 mt-4 md:mt-10 grid grid-cols-1 md:grid-cols-2 md:justify-center text-center mx-auto">
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($kewirus->get(0)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $kewirus->get(0)->name }}</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($kewirus->get(1)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $kewirus->get(1)->name }}</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
    </div>

    <div
        class="grid grid-cols-1 md:grid-cols-2 md:max-w-lg xl:max-w-3xl xl:grid-cols-3 xl:space-x-4 space-y-4 items-end justify-center mt-4 md:mt-4 md:justify-center text-center mx-auto">

        @for($i = 2; $i < count($kewirus); $i++)
            <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
                <img class="object-cover w-full h-4/5 rounded-t-2xl"
                     src="{{ asset(($kewirus->get($i)->image) ) }}"
                     alt="profile">
                <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $kewirus->get($i)->name }}</div>
                <div class="text-base py-1">Anggota</div>
            </div>
        @endfor
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Lingkungan Hidup")}}</h1>
    </div>
    <div
        class="max-w-lg space-y-4 md:space-y-0 mt-4 md:mt-10 grid grid-cols-1 md:grid-cols-2 md:justify-center text-center mx-auto">
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($lkh->get(0)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $lkh->get(0)->name }}</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($lkh->get(1)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $lkh->get(1)->name }}</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
    </div>

    <div
        class="grid grid-cols-1 md:grid-cols-2 md:max-w-lg xl:max-w-3xl xl:grid-cols-3 xl:space-x-4 space-y-4 items-end justify-center mt-4 md:mt-4 md:justify-center text-center mx-auto">

        @for($i = 2; $i < count($lkh); $i++)
            <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
                <img class="object-cover w-full h-4/5 rounded-t-2xl"
                     src="{{ asset(($lkh->get($i)->image) ) }}"
                     alt="profile">
                <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $lkh->get($i)->name }}</div>
                <div class="text-base py-1">Anggota</div>
            </div>
        @endfor
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Hubungan Masyarakat")}}</h1>
    </div>
    <div
        class="max-w-lg space-y-4 md:space-y-0 mt-4 md:mt-10 grid grid-cols-1 md:grid-cols-2 md:justify-center text-center mx-auto">
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($humas->get(0)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $humas->get(0)->name }}</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
            <img class="object-cover w-full h-4/5 rounded-t-2xl"
                 src="{{ asset($humas->get(1)->image ) }}"
                 alt="profile">
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $humas->get(1)->name }}</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
    </div>

    <div
        class="grid grid-cols-1 md:grid-cols-2 md:max-w-lg xl:max-w-3xl xl:grid-cols-3 xl:space-x-4 space-y-4 items-end justify-center mt-4 md:mt-4 md:justify-center text-center mx-auto">

        @for($i = 2; $i < count($humas); $i++)
            <div class="shadow-xl border-[#10758F] w-56 h-fit mx-auto rounded-2xl">
                <img class="object-cover w-full h-4/5 rounded-t-2xl"
                     src="{{ asset(($humas->get($i)->image) ) }}"
                     alt="profile">
                <div class="text-lg font-semibold text-white bg-[#10758F] py-1">{{ $humas->get($i)->name }}</div>
                <div class="text-base py-1">Anggota</div>
            </div>
        @endfor
    </div>

    <div class="my-10"></div>
@endsection
