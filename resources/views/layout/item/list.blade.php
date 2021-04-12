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
                @yield('objects')
                {{--
                <div class="card">
                    <img src="https://images.pexels.com/photos/4040600/pexels-photo-4040600.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Quartzo">
                    <div class="card-body">
                        <h3 class="card-title">Quartzo</h3>
                        <p class="card-text text-muted">2021</p>
                        <a href="#" class="btn btn-danger">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>
@endsection