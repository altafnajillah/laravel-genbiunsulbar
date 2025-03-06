@extends('layout')

@section('title', 'Tentang Kami')

@section('content')
    <div class="pt-24 text-center px-10">
        {{--        <h1 class="text-4xl text-gray-800 font-semibold my-5 md:my-10">Tentang Kami</h1>--}}
        <div class="h-72 mx-auto flex flex-col justify-center md:min-h-screen">
            <iframe class="rounded-xl w-full h-full"
                    width="560" height="315" src="https://www.youtube.com/embed/-qAsFAqHjyo?si=MQdQVEs0av4-V4ut"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>

            <div class="bg-[#10758F] rounded-2xl px-4 py-2 text-white my-10 w-fit text-2xl md:text-4xl mx-auto">Halo
                GenBIers
            </div>
        </div>
        <div class="px-4 max-w-2xl mx-auto mb-20">
            <p class="text-sm md:text-lg text-center text-gray-800">
                <span class="text-[#10758F] font-semibold">Generasi Baru Indonesia (GenBI)</span> adalah sebuah
                komunitas yang berdiri pada 11 November 2011. Perkumpulan ini beranggotakan para mahasiswa yang berhasil
                menerima <span class="text-[#10758F] font-semibold">Beasiswa Bank Indonesia (BI)</span>.
                Beasiswa tersebut merupakan salah satu bentuk kepedulian Bank Indonesia terhadap kualitas pendidikan
                anak negeri yang kurang beruntung dalam hal finansial.
                Tidak hanya itu, pemberian bantuan ini juga menjadi apresiasi terhadap mahasiswa berprestasi yang juga
                aktif dalam organisasi maupun kegiatan sosial kemasyarakatan.
                Sebagai penerima beasiswa, GenBI memiliki peran ganda, yaitu sebagai penghubung dalam menyebarkan
                kebijakan Bank Indonesia <span class="text-[#10758F] font-semibold">(front liners)</span> dan sebagai
                agen perubahan bagi masyarakat <span class="text-[#10758F] font-semibold">(agent of change)</span>.
                Melalui program-program pengembangan diri, anggota GenBI diberi kesempatan untuk berkembang menjadi
                pemimpin masa depan <span class="text-[#10758F] font-semibold">(future leaders)</span>.
            </p>
        </div>

        <h1 class="text-2xl md:text-4xl font-poppins font-semibold text-gray-800">{{__("5 Departemen GenBI Unsulbar")}}</h1>
        <div class="h-1 w-36 bg-gray-800 rounded-full mt-1 mb-0 mx-auto"></div>
        <div class="max-w-xl my-10 mx-auto">
            <p class="text-lg text-gray-800 mt-5">{{__("GenBI Unsulbar memiliki 5 departemen  yang bertanggungjawab atas berbagai bidang, yaitu:")}}</p>
        </div>

        <div class="flex justify-center items-center mb-20">
            <div
                class="relative flex justify-center items-center w-64 h-64 md:w-[480px] md:h-[480px] bg-[#e8f1f3] rounded-full">
                <div class="absolute w-44 h-44 md:w-72 md:h-72 bg-[#bdd6dc] rounded-full mx-auto">
                    <div class="w-3/4 flex mx-auto items-center h-full">
                        <img id="logo" src="{{ asset("./images/GenBIUnsulbar.png")}}" width="w-full"
                             alt="GenBI Unsulbar">
                    </div>
                </div>
                <div class="absolute w-8 h-8 md:w-16 md:h-16 rounded-full text-[#116b82]"
                     style="top: 0; left: 50%; transform: translateX(-50%);">
                    <div class="flex w-full justify-center mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <mask id="ipSBook0">
                                <g fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4">
                                    <path fill="#fff"
                                          d="M8 40V10c0-3.314 2.865-6 6.4-6H40v32H14.4c-5.038 0-6.4.684-6.4 4Z"/>
                                    <path stroke-linecap="round" d="M12 44h28v-8H12a4 4 0 0 0 0 8Z"
                                          clip-rule="evenodd"/>
                                </g>
                            </mask>
                            <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSBook0)"/>
                        </svg>
                    </div>
                    <p class="text-xs md:text-base text-left font-semibold">Pendidikan</p>
                </div>
                <div class="absolute w-8 h-8 md:w-16 md:h-16 rounded-full text-[#116b82]" style="top: 25%; left: -5%;">
                    <div class="flex w-full justify-center mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                  d="M6.75 10a3.25 3.25 0 1 0 0-6.5a3.25 3.25 0 0 0 0 6.5Zm5.687 5.145c.53.217 1.204.355 2.062.355c4 0 4-3 4-3A1.5 1.5 0 0 0 17 11h-4.628c.393.476.629 1.085.629 1.75v.356a2.936 2.936 0 0 1-.017.252a4.974 4.974 0 0 1-.546 1.787ZM17 7.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0ZM1.5 13a2 2 0 0 1 2-2H10a2 2 0 0 1 2 2s0 4-5.25 4s-5.25-4-5.25-4Zm11.5.106l-.003.064Z"/>
                        </svg>
                    </div>
                    <p class="text-xs md:text-base text-left font-semibold">Pengabdian<br>Masyarakat</p>
                </div>
                <div class="absolute w-8 h-8 md:w-16 md:h-16 rounded-full text-[#116b82]"
                     style="top: 25%; right: 0;">
                    <div class="flex w-full justify-center mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M17 12c0 1.7-1.3 3-3 3s-3-1.3-3-3s1.3-3 3-3s3 1.3 3 3zm5-5v11c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V7c0-1.1.9-2 2-2V4h4v1h2l1-2h6l1 2h2c1.1 0 2 .9 2 2zM7.5 9c0-.8-.7-1.5-1.5-1.5S4.5 8.2 4.5 9s.7 1.5 1.5 1.5S7.5 9.8 7.5 9zM19 12c0-2.8-2.2-5-5-5s-5 2.2-5 5s2.2 5 5 5s5-2.2 5-5z"/>
                        </svg>
                    </div>
                    <p class="text-xs md:text-base text-left font-semibold">Publikasi dan Sosialisasi</p>
                </div>
                <div class="absolute w-8 h-8 md:w-16 md:h-16 rounded-full text-[#116b82]"
                     style="bottom: 10%; left: 10%;">
                    <div class="flex w-full justify-center mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56">
                            <path fill="currentColor" fill-rule="evenodd"
                                  d="M31.8 36.237c-.917 3.427-.942 6.285-.074 8.574c1.595 4.208 7.2 5.419 7.464 6.522C39.454 52.437 31.726 53 27.358 53c-4.367 0-9.724-.833-9.724-1.667c0-.833 5.084-1.939 6.629-6.6c.9-2.717.802-5.838-.296-9.361a2.808 2.808 0 0 1-.845.128c-1.191 0-2.183-.73-2.397-1.694c-.822.54-1.852.86-2.969.86c-2.41 0-4.411-1.492-4.807-3.454a4.534 4.534 0 0 1-1.047.121C9.747 31.333 8 29.841 8 28c0-1.243.796-2.327 1.977-2.9c-.607-.379-1.001-.992-1.001-1.683c0-.24.047-.471.135-.686C8.442 22.434 8 21.92 8 21.333c0-.727.682-1.345 1.632-1.573C8.637 19.15 8 18.214 8 17.167c0-1.663 1.603-3.04 3.699-3.293a3.368 3.368 0 0 1-.772-2.124c0-2.071 1.965-3.75 4.39-3.75c.244 0 .484.017.718.05c.585-1.483 2.227-2.55 4.16-2.55c.537 0 1.051.082 1.527.233C22.052 4.179 23.646 3 25.56 3c1.958 0 3.58 1.232 3.86 2.837c.715-.716 1.78-1.17 2.97-1.17c2.155 0 3.902 1.492 3.902 3.333c0 .62-.199 1.201-.544 1.699c.177-.021.359-.032.544-.032c2.006 0 3.66 1.293 3.878 2.958a4.4 4.4 0 0 1 1.975-.458c2.156 0 3.903 1.492 3.903 3.333c0 1.255-.812 2.348-2.012 2.917c1.2.568 2.012 1.661 2.012 2.916c0 1.09-.613 2.059-1.56 2.667c.366.418.584.937.584 1.5c0 .216-.032.425-.092.624c1.8.853 3.019 2.493 3.019 4.376c0 2.761-2.62 5-5.854 5a6.68 6.68 0 0 1-2.362-.424c-.886.776-2.123 1.257-3.491 1.257a5.415 5.415 0 0 1-2.955-.85c-.42.357-.948.621-1.538.754"/>
                        </svg>
                    </div>
                    <p class="text-xs md:text-base text-left font-semibold">Lingkungan Hidup</p>
                </div>
                <div class="absolute w-8 h-8 md:w-16 md:h-16 rounded-full text-[#116b82]"
                     style="bottom: 10%; right: 10%;">
                    <div class="flex w-full justify-center mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M12 12.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM10.5 16a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0Z"/>
                            <path fill="currentColor"
                                  d="M17.526 5.116L14.347.659L2.658 9.997L2.01 9.99V10H1.5v12h21V10h-.962l-1.914-5.599l-2.098.715ZM19.425 10H9.397l7.469-2.546l1.522-.487L19.425 10ZM15.55 5.79L7.84 8.418l6.106-4.878l1.604 2.25ZM3.5 18.169v-4.34A3.008 3.008 0 0 0 5.33 12h13.34a3.009 3.009 0 0 0 1.83 1.83v4.34A3.009 3.009 0 0 0 18.67 20H5.332A3.01 3.01 0 0 0 3.5 18.169Z"/>
                        </svg>
                    </div>
                    <p class="text-xs md:text-base text-left font-semibold">Kewirausahaan</p>
                </div>
            </div>
        </div>
    </div>
@endsection
