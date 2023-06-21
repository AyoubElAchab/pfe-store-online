@extends('templateAdmin')
@section('contentAdmin')

    <div class="content">
        <h2 id="titre"><strong>Ajouter un produit</strong> </h2>
        <form method="POST" action="{{ route('produits.store') }}" enctype="multipart/form-data" class="custom-form">
            @csrf
            <div class="form-group">
                <label for="nom" class="form-label">Product Name:</label>
                <input type="text" id="nom" name="nom" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="prixOriginal" class="form-label">Price Original:</label>
                <input type="number" id="prixOriginal" name="prixOriginal" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="prixFinal" class="form-label">Price Final:</label>
                <input type="number" id="prixFinal" name="prixFinal" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-input" required></textarea>
            </div>
            <div class="form-group">
                <label for="urlimg" class="form-label">URL PUBLIC de  Images </label>
                <input type="text" id="urlimg" name="urlimg" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="categorie_id" class="form-label">Category:</label>
                <select id="categorie_id" name="categorie_id" class="form-input" required>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->nom}} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="QStock" class="form-label">Quantity in Stock:</label>
                <input type="number" id="QStock" name="QStock" class="form-input" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
        
    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/produit/create.css')}}">
@endsection