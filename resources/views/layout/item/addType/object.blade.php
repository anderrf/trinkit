@extends('layout.item.add')

@section('addType')
    <form action="" method="POST">
        {{ csrf_field() }}
        <fieldset>
            <legend>Cadastre um novo objeto</legend>
            <div class="row mb-3">
                <div class="col">
                    <label for="objectName" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="objectName" id="objectName" minlength="3" maxlength="20">
                </div>
                <div class="col">
                    <label for="objectYear" class="form-label">Ano:</label>
                    <input type="number" class="form-control" name="objectYear" id="objectYear" min="1900" max="2100">
                </div>
            </div>
            <div class="mb-3">
                <div class="col">
                    <label for="objectPhoto" class="form-label">Link da foto:</label>
                    <input type="url" class="form-control" name="objectPhoto" id="objectPhoto">
                </div>
            </div>
        </fieldset>
        <div class="mb-3 mt-3">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i>
            </button>
        </div>
    </form>
@endsection

