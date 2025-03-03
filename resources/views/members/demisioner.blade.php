@extends('member')

@section('member')
    <div class="max-w-3xl mx-auto">
        <p class="text-base md:text-xl">GenBI Unsulbar telah bertransformasi dari masa ke masa, berikut foto bersama
            para demisioner GenBI Unsulbar :</p>
    </div>

    @foreach($demisioners as $demisioner)

        <div class="mt-10 md:mt-20 mb-5 md:mb-10 max-w-md mx-auto">
            <h1 class="text-xl md:text-3xl font-poppins font-semibold bg-[#10758F] w-fit px-4 py-2 rounded-xl text-white mx-auto">{{ $demisioner->name }}</h1>
        </div>
        <div class="flex items-center justify-center mt-2 mx-4 relative">
            <img class="rounded-xl" loading="lazy" width="900" src="{{ asset( $demisioner->image ) }}"
                 alt="{{ "Demisioner " . $demisioner->name }}">
        </div>

    @endforeach

    <div class="my-10"></div>
@endsection
