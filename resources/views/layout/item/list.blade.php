@extends('layout.base')

@section('linkRef')
    <link rel="stylesheet" href="{{ asset('./styles/partials/list.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2">
            <aside>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Pedras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Anéis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Miniaturas</a>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="bi bi-plus"></i></a></li>
                </ul>
            </aside>
        </div>
        <div class="col-md-10">
            <div class="container" id="list-grid">
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
                <div class="card add-card">
                    <a href="#">
                        <i class="bi bi-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection