@extends('layout.item.list');

@section('objects')
    <div class="card add-card">
        <a href="/adicionar/objeto/{{$categoryId}}">
            <i class="bi bi-plus"></i>
        </a>
    </div>
@endsection