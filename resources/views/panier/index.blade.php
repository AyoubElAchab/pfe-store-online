@extends('templateClient')
@section('sidebar')
    <ul class="list-group">
        @foreach ($category as $cat)
            <li class="list-group-item">
                <i class="{{$cat->iconCategorie}}"></i>
                {{$cat->nom}}
            </li>
        @endforeach
    </ul>
@endsection
@section('css')
    <link href="css/panier/index.css"  rel="stylesheet" />
@endsection

@section('cards')
    <div class="content">

        <h2 id="titre" align="center"><strong>Tout les producs</strong></h2>
        <table  class="table align-middle mb-0 bg-white table-hover">
            <thead class="bg-light">
                <tr>
                    <th>img</th>
                    <th>nom product</th>
                    <th>prix unitaire</th>
                    <th></th>
                    <th>Quantité</th>
                    <th></th>
                    <th>Total</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                    @php
                        $PrixTotal = 0;
                    @endphp
                    @foreach ($panier as $pany)
                        @php
                            foreach ($products as $product) {
                                if ($pany->produit_id == $product->id) {
                                    $imgProduct = $product->urlimg;
                                    $nomProduct = $product->nom;
                                    $prixProduct = $product->prixFinal;
                                    
                                }
                            }
                            $Qn = $pany->Quantite;
                            $total = $prixProduct * $Qn;
                         
                            
                            $PrixTotal = $PrixTotal + $total;
                        @endphp
                        <tr class="boltd">
                            <td><img height="45px" src="{{asset($imgProduct)}}" alt=""></td>
                            <td>{{$nomProduct}} </td>
                            <td>${{$prixProduct}} </td>
                            <td ><button class="but butm" onclick="function(){
                                return {{$Qn=$Qn-1}} ;}"><i class="fa-solid fa-minus"></i></button></td>
                            <td>{{$Qn+1}} </td>
                            <td ><button class="but butp" onclick="<?php $Qn = $Qn +1; ?>"><i class="fa-solid fa-plus"></i></button></td>
                            
                            <td><span>${{$total}} </span></td>
                            <td class="delete">
                                <a href="{{route('produits.destroy',['produit'=>$product->id])}}">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    
            </tbody>

        </table>
        <div  class="tot">
           <p><span>prix total de votre panier = </span><strong>${{$PrixTotal}}</strong> </p>
        
            <div class="btnstar"  >
                <button class="btn btn-primary" >Add new command</button>
            </div> 
        </div>

    </div>
@endsection