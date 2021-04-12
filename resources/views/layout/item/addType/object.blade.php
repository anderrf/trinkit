@extends('layout.item.add')

@section('addType')
    <form action=" {{ route('saveObject') }} " method="POST">
        {{ csrf_field() }}
        <fieldset>
            <legend>Cadastre um novo objeto</legend>
            <div class="row mb-3">
                <div class="col">
                    <label for="objectName" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="objectName" id="objectName">
                    @if($errors->has('objectName'))
                        @foreach($errors->get('objectName') as $error)
                            <strong class="errorMessage">{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="col">
                    <label for="objectYear" class="form-label">Ano:</label>
                    <input type="number" class="form-control" name="objectYear" id="objectYear">
                    @if($errors->has('objectYear'))
                        @foreach($errors->get('objectYear') as $error)
                            <strong class="errorMessage">{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <div class="col">
                    <label for="objectPhoto" class="form-label">Link da foto:</label>
                    <input type="url" class="form-control" name="objectPhoto" id="objectPhoto">
                    @if($errors->has('objectPhoto'))
                        @foreach($errors->get('objectPhoto') as $error)
                            <strong class="errorMessage">{{ $error }}</strong>
                        @endforeach
                    @endif
                </div>
            </div>
            <input type="hidden" value="{{ $categoryId }}" name="categoryId" id="categoryId">
        </fieldset>
        <div class="mb-3 mt-3">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i>
            </button>
        </div>
    </form>
@endsection

