@extends('layout.item.add')

@section('addType')
    @if( $result )
        <div class="positive">
            <p>{{ $message }}</p>
        </div>
    @else
        <div class="negative">
            <p>{{ $message }}</p>
        </div>
    @endif
@endsection