@extends('templateAdmin')

@section('style')
    <link rel="stylesheet" href="{{asset('css/category/create.css')}}">
@endsection

@section('contentAdmin')
    <div class="content">
        <h2 id="titre"><strong>Ajouter un category</strong> </h2>
        
        <form method="POST" action="{{route('category.store')}}" class="custom-form">
            @csrf
            <div class="form-group">
                <label for="nom" class="form-label">Nom de Category :</label>
                <input type="text" id="nom" name="nom" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="iconCategorie" class="form-label">Icon de Category :</label>
                <input type="text" id="iconCategorie" name="iconCategorie" class="form-input" required>
            </div>
            <button type="submit" class="btn btn-primary">Crée un category</button>
        </form>
    </div>
@endsection