@extends('layout.item.add')

@section('addType')
    <form action=" {{ route('saveCategory') }} " method="POST">
        {{ csrf_field() }}
        <fieldset>
            <legend>Cadastre uma nova categoria</legend>
            <div class="row mb-3">
                <div class="col">
                    <label for="categoryName" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="categoryName" id="categoryName" minlength="3" maxlength="20">
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

