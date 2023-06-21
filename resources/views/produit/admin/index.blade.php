@extends('templateAdmin')

@section('style')
    <link rel="stylesheet" href="{{asset('css/category/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/produit/produitAdmin.css')}}">
@endsection

@section('contentAdmin')
    <div class="content">

        <h2 id="titre"><strong>Tout les producs</strong></h2>
        <table  class="table align-middle mb-0 bg-white table-hover">
            <thead class="bg-light">
                <tr>
                    <th>img</th>
                    <th>nom</th>
                    <th>prix Final</th>
                    <th>QStock</th>
                    <th>Category</th>
                    <th>edit product</th>
                    <th>delete product</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="boltd">
                        <td><img height="45px" src="{{asset($product->urlimg)}}" alt=""></td>
                        <td>{{$product->nom}} </td>
                        <td>{{$product->prixFinal}} </td>
                        <td>{{$product->QStock}} </td>
                        @php
                            foreach ($category as $cat) {
                                if ($cat->id == $product->id) {
                                    $nomCategory = $cat->nom ;
                                }
                            }
                        @endphp
                        <td>{{ $nomCategory}} </td>
                        <td class="edit">
                            <a href="{{route('produits.edit',['produit'=>$product->id])}}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>

                        <td class="delete">
                            <a href="{{route('produits.destroy',['produit'=>$product->id])}}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection