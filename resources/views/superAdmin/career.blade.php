@extends('layout.mainlayout_admin',['activePage' => 'treatments'])

@section('title',__('Career'))
@section('content')
   <h2 class=" " style="padding: 8px; box-shadow:0px 0px 4px 1px gray; background-color:white; border-radius: 5px;">Career</h2>
   <div class="" style="width: cover;">
   
   </div>
  <div class="">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Full-Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">File</th>
    </tr>
  </thead>
  <tbody>
    @foreach($careerData as $arr)
    <tr>
      <th scope="row">{{$arr->fullname}}</th>
      <td>{{$arr->email}}</td>
      <td>{{$arr->message}}</td>
      <td><a href="{{url('storage/'.$arr->cvfile)}}" style="padding: 6px 10px; background-color:green; cursor:pointer; color:white;" download>Download</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
  </div>
@endsection
