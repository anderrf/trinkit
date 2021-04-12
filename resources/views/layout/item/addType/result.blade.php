@extends('layout.item.add')

@section('addType')
    {{-- Exibe mensagem de sucesso ou falha, com base em parâmetro bool $result --}}
    @if( $result )
        <div class="positive bg-light rounded">
            <p class="text-success fs-1">{{ $message }}</p>
        </div>
    @else
        <div class="negative bg-light rounded">
            <p class="text-danger fs-1">{{ $message }}</p>
        </div>
    @endif
@endsection