@extends('layout.mainlayout_admin',['activePage' => 'treatments'])

@section('title',__('software Charge'))
@section('content')
   <h2 class=" " style="padding: 8px; box-shadow:0px 0px 4px 1px gray; background-color:white; border-radius: 5px;">Software Charge</h2>
   <div class="" style="width: cover; height:400px; display:grid; place-items:center;">
   
    <form action="{{url('software-charge-post')}}" method="post" class="" >
        @csrf
<input type="number" name='price' placeholder="write the price ......" style="height:50px; padding:10px; " required>
<input type="submit" value="Submit" style="padding: 3px 7px; border-radius:6px; color:white; height:50px; padding:10px; background-color:green;">
    </form>
   </div>
@endsection
