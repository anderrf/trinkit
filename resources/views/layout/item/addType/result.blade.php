@extends('layout.item.add')

@section('addType')
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