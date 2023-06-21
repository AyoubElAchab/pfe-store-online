@extends('templateClient')
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

    @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card cardstyle">
                <div class="hea" align="right">
                    <span class="wish-icon" ><i class="fa fa-heart-o"></i></span>
                </div>
                <a href="produits/{{$product->id}}">
                    <div class="img-box">
                        <img src="{{$product->urlimg}}" width="180px" class="img-fluid" alt="Product Image">
                    </div>
                </a>
                <div class="thumb-content">
                    <h3>{{$product->nom}}</h3>
                    <p class="item-price"  align="center">
                        <strike>${{$product->prixOriginal}}</strike>
                        <span>${{$product->prixFinal}}</span>
                    </p>
                    <div class="star-rating" align="center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                    <div class="btnstar" align="center">
                        <form action="{{ route('paniers.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="1" name="clientid" >
                            <input type="hidden" value="{{$product->id}}" name="idproduct" >
                            <input type="hidden" value='1' name="Quantite">
                            <button type="submit" class="btn btn-primary" >Add to Cart</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('css')
    <link href="css/produit/produitClient.css"  rel="stylesheet" />

@endsection

