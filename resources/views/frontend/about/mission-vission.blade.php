@extends('layout2.index',['title'=>'Mission vission'])
@section('main')
@include('layout2.page-name',[$pagename='Mission & Vision'])
<main class="p-4">
@include('layout2.vission-mission')
</main>

@endSection