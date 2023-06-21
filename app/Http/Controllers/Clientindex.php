<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Clientindex extends Controller
{
    //
    public function indexClient(){
        $panier= DB::select('select * from paniers');
        if ($panier === null) {
            $panierCount = 0;
        } else {
            $panierCount = count($panier);
        }

        $categories = DB::select('select id , nom , iconCategorie as icon from categories');
        $produits = DB::select('select * from produits');
        return view('produit.client.index',[
            'panierCount' => $panierCount,
            'category'=>$categories,
            'products'=>$produits
        ]);
   }  
}  
