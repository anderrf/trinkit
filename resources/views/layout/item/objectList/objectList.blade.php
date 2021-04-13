@extends('layout.item.list')

@section('objects')
    @if($objects)
        @foreach($objects as $object)
            <div class="card">
                <img src="{{ $object->ds_ObjectPhoto }}" class="card-img-top" alt="{{ $object->nm_Object }}">
                <div class="card-body">
                    <h3 class="card-title">{{ $object->nm_Object }}</h3>
                    <p class="card-text text-muted">{{ $object->yy_Object }}</p>
                    <a href="/deletar/objeto/{{ $object->cd_Object }}" class="btn btn-danger">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </div>
            </div>
        @endforeach
        {{-- Limite de 50 objetos por categoria --}}
        @if(count($objects) < 50)
            <div class="card add-card">
                <a href="/adicionar/objeto/{{$categoryId}}">
                    <i class="bi bi-plus"></i>
                </a>
            </div>
        @endif
    @endif
@endsection

