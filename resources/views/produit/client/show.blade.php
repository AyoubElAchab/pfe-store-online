@extends('templateClient')
@section('css')
    <link rel="stylesheet" href="{{asset('css/produit/show.css')}}">

@endsection
@section('sidebar')
    <ul class="list-group">
        @foreach ($category as $cat)
            <li class="list-group-item">
                <i class="{{$cat->icon}}"></i>
                {{$cat->nom}}
            </li>
        @endforeach
    </ul>
@endsection 

@section('cards')
    <div class="product-details">
        @foreach ($product as $pro)
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset($pro->urlimg)}}" alt="#" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h5><strong>{{ $pro->nom }}</strong></h5>
                    <p class="description">{{ $pro->description }}</p>
                    <strong>
                    <p class="item-price" >Original Price : <strike>${{$pro->prixOriginal}}</strike></p>
                    <p class="item-price">Final Price : <span>${{$pro->prixFinal}}</span>
                    </p>
                    <p>Quantity in Stock: {{ $pro->QStock }}</p>
                    </strong>
                    <div class="btnstar" >
                        <button class="btn btn-primary" >Add to Cart</button>
                    </div>                
                </div> 
            </div>
        @endforeach
    </div>
@endsection