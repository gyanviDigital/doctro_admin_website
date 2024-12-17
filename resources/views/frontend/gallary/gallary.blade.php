@extends('layout.index')
@section('main')
@include('layout.page-name',[$pagename='Gallery'])
<main class="p-4">
@include('layout.gallery')
</main>
@endSection