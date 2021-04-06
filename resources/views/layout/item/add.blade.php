@extends('layout.base')

@section('linkRef')
    <link rel="stylesheet" href="{{ asset('./styles/partials/add.css') }}">    
@endsection

@section('content')
    <div class="row mt-3 mb-3">
        <div class="col-md-2">
            <a href="/" class="back-add nav-link">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @yield('addType')
        </div>
    </div>
@endsection