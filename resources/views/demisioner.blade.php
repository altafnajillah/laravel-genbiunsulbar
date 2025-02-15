@extends('member')

@section('member')
    <div class="max-w-3xl mx-auto">
        <p class="text-base md:text-xl">GenBI Unsulbar telah bertranformasi dari masa ke masa, berikut foto bersama para demisioner GenBI Unsulbar :</p>
    </div>

    <div class="mt-10 md:mt-20 mb-5 md:mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold bg-[#10758F] w-fit px-4 py-2 rounded-xl text-white mx-auto">{{__("2023/2024")}}</h1>
    </div>
    <div class="flex items-center justify-center mt-2 mx-4 relative">
        <img class="rounded-xl" width="900" src="{{ asset('/images/IMG_4681.png') }}" alt="GenBIUnsulbar">
    </div>

    <div class="mt-10 md:mt-20 mb-5 md:mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold bg-[#10758F] w-fit px-4 py-2 rounded-xl text-white mx-auto">{{__("2022/2023")}}</h1>
    </div>
    <div class="flex items-center justify-center mt-2 mx-4 relative">
        <img class="rounded-xl" width="900" src="{{ asset('/images/IMG_4681.png') }}" alt="GenBIUnsulbar">
    </div>

    <div class="mt-10 md:mt-20 mb-5 md:mb-10 max-w-md mx-auto">
        <h1 class="text-xl md:text-3xl font-poppins font-semibold bg-[#10758F] w-fit px-4 py-2 rounded-xl text-white mx-auto">{{__("2021/2022")}}</h1>
    </div>
    <div class="flex items-center justify-center mt-2 mx-4 relative">
        <img class="rounded-xl" width="900" src="{{ asset('/images/IMG_4681.png') }}" alt="GenBIUnsulbar">
    </div>

    <div class="my-10"></div>
@endsection
