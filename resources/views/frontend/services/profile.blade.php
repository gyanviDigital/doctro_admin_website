@extends('layout2.index',['title'=>'Profile'])
@section('main')
@include('layout2.page-name',[$pagename='Specialization'])
<main class="p-2">
{{$id}}
@include('layout2.profile-details')
</main>
@endSection