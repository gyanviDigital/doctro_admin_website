@extends('layout2.index',['title'=>'Hospital'])
@section('main')
<main class="mt-8">

<div class="grid place-items-center">
<div class="text-center">
    @foreach($doctorsData as $arr)
    <div class="inline-block p-2 rounded shadow-gray shadow-lg m-2 w-72 h-96 overflow-hidden">
        <div class="w-full h-60 overflow-hidden">
            <img src="{{asset('images/upload/'.$arr->doctorImage)}}" alt="{{$arr->doctorImage}}">
        </div>
        <p class="text-center text-sm text-black mt-2 text-red-500">{{$arr->name}}</p>
        <h3 class="text-2xl font-bold text-center">{{$arr->doctorName}}</h3>
        <a href="{{url('doctor-profile',['id'=>$arr->id, 'name'=>$arr->doctorName])}}" class="mt-4">
            <button class="px-8 py-2 shadow-green-800 shadow-lg text-white"  >View Profile</button>
        </a>
    </div>
    @endforeach
    @if($doctorsData)

    @endif

   

</div>
</div>
</main>


@endsection