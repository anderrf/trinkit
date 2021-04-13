@extends('layout.base')

@section('linkRef')
    <link rel="stylesheet" href="{{ asset('./styles/partials/list.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2">
            <aside>
                <ul class="nav flex-column">
                    {{-- Lista de categorias, recuperadas do BD, enviadas como parâmetro na rota 'list' --}}
                    @if($categories)
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" aria-current="true" href="/lista/{{ $category->cd_Category }}" data-categoryId="{{ $category->cd_Category }}">{{ $category->nm_Category }}</a>
                            </li>
                        @endforeach
                        {{-- Máximo de 10 categorias a serem adicionadas --}}
                        @if(count($categories) < 10)
                            <li class="nav-item"><a href="/adicionar/categoria" class="nav-link"><i class="bi bi-plus"></i></a></li>
                        @endif
                    @endif
                </ul>
            </aside>
        </div>
        <div class="col-md-10">
            <div class="container" id="list-grid">
                {{-- Objetos a serem listados quando selecionada a categoria --}}
                @yield('objects')
            </div>
            @yield('categoryDeleteButton')
        </div>
    </div>
@endsection