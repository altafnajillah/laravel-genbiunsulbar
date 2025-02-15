@extends('member')

@section('member')
    <div class="max-w-3xl mx-auto">
        <p class="text-base md:text-xl">Dalam menjalankan tugas dan tanggung jawabnya, GenBI Unsulbar memiliki struktur kepengurusan yang terdiri dari:</p>
    </div>

    <div class="my-10">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Pengurus Inti")}}</h1>
    </div>

    <div class="max-w-4xl flex flex-col md:justify-center md:flex-row text-center mx-auto mb-2">
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Salman</div>
            <div class="text-base py-1">Ketua Umum</div>
        </div>
    </div>

    <div class="max-w-4xl flex flex-col md:justify-center md:flex-row text-center mx-auto space-y-2 md:space-y-0 md:space-x-2">
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Muh. Ryan Nurwangsah</div>
            <div class="text-base py-1">Sekretaris Umum</div>
        </div>
        <div class="shadow-xl rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Halima Nurul Huda</div>
            <div class="text-base py-1">Bendahara Umum</div>
        </div>
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Pendidikan")}}</h1>
    </div>
    <div class="max-w-4xl flex flex-col md:justify-center md:flex-row text-center mx-auto space-y-2 md:space-y-0 md:space-x-2 flex-wrap">
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Publikasi dan Sosialisasi")}}</h1>
    </div>
    <div class="max-w-4xl flex flex-col md:justify-center md:flex-row text-center mx-auto space-y-2 md:space-y-0 md:space-x-2 flex-wrap">
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Pendidikan")}}</h1>
    </div>
    <div class="max-w-4xl flex flex-col md:justify-center md:flex-row text-center mx-auto space-y-2 md:space-y-0 md:space-x-2 flex-wrap">
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Lingkungan Hidup")}}</h1>
    </div>
    <div class="max-w-4xl flex flex-col md:justify-center md:flex-row text-center mx-auto space-y-2 md:space-y-0 md:space-x-2 flex-wrap">
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
    </div>

    <div class="mt-20 mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold text-gray-800">{{__("Departemen Hubungan Masyarakat")}}</h1>
    </div>
    <div class="max-w-4xl flex flex-col md:justify-center md:flex-row text-center mx-auto space-y-2 md:space-y-0 md:space-x-2 flex-wrap">
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Ketua</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Sekretaris</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
        <div class="shadow-xl border-[#10758F] rounded-2xl">
            <div class="w-fit h-fit mx-auto p-5">
                <img class="w-52 h-52" src="{{ asset('/images/GenBIUnsulbar.png') }}" alt="profile">
            </div>
            <div class="text-lg font-semibold text-white bg-[#10758F] py-1">Sifulan</div>
            <div class="text-base py-1">Anggota</div>
        </div>
    </div>

    <div class="my-10"></div>
@endsection
