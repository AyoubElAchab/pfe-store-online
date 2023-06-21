<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $panier= DB::select('select * from paniers');
        if ($panier === null) {
            $panierCount = 0;
        } else {
            $panierCount = count($panier);
        }

        $categories = DB::select('select * from categories');
        $produits= DB::select('select * from produits');
        $user = DB::select('select * from utilisateurs');
        return view("panier.index",[ 
            'panierCount' => $panierCount,
            'panier'=>$panier,
            'utilisateur'=>$user,
            'products'=>$produits,
            'category'=>$categories
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $client = $request->clientid;
        $product = $request->idproduct;
        $Quant = $request->Quantite;
        DB::insert('INSERT into paniers (client_id , produit_id , Quantite) values(?,?,?)',[$client,$product,$Quant]);
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Panier $panier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Panier $panier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Panier $panier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Panier $panier)
    {
        //
    }
}
