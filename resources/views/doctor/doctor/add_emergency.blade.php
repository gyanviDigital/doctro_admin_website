@extends('layout.mainlayout_admin',['activePage' => 'schedule'])

@section('title',__('Schedule'))
@section('content')
<section class="section">
    @include('layout.breadcrumb',[
        'title' => __('doctor schedule'),
    ])

  
</section>
@endsection