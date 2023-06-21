<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 
    public function index()
    {
        $panier= DB::select('select * from paniers');
        if ($panier === null) {
            $panierCount = 0;
        } else {
            $panierCount = count($panier);
        }

        $produits= DB::select('select * from produits');
        $categories = DB::select('select * from categories');
        return view("produit.admin.index",[
            'panierCount' => $panierCount,
            'products'=>$produits,
            'category'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::select('select DISTINCT id,nom from categories ');
        return view("produit.admin.create",compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nom = $request->input('nom');
        $prix_original = $request->input('prixOriginal');
        $prix_final = $request->input('prixFinal');
        $description =$request->input('description');
        $urlimg = $request->input('urlimg');
        $categorie_id= $request->input('categorie_id');
        $QStock = $request->input('QStock');

        DB::insert("INSERT into produits ( nom , prixOriginal, prixFinal , description ,urlimg , categorie_id , QStock ) values(?,?,?,?,?,?,?)",[$nom,$prix_original, $prix_final,$description,$urlimg,$categorie_id,$QStock]);
         return redirect()->route('produits.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $panier= DB::select('select * from paniers');
        if ($panier === null) {
            $panierCount = 0;
        } else {
            $panierCount = count($panier);
        }

        $categories = DB::select('select id , nom , iconCategorie as icon from categories');
        $products = DB::select('select id,nom,prixOriginal,prixFinal,description,urlimg,categorie_id,QStock from produits WHERE id = ?',[$id]);
        return view("produit.client.show",[
            'panierCount' => $panierCount,
            'category'=>$categories,
            "product"=>$products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $categories = DB::select('select DISTINCT id,nom from categories ');
        $produit= DB::select('select * from produits where id = ?',[$id]);
        return view("produit.admin.edit",["product"=>$produit[0],'categories'=>$categories]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$product)
    {
        //
        $nom = $request->input('nom');
        $prix_original = $request->input('prixOriginal');
        $prix_final = $request->input('prixFinal');
        $description =$request->input('description');
        $urlimg = $request->input('urlimg');
        $categorie_id= $request->input('categorie_id');
        $QStock = $request->input('QStock');

        DB::update("UPDATE  produits SET nom = ? , prixOriginal =?, prixFinal=? , description=? ,urlimg=? , categorie_id=? , QStock=? where id =? )",[$nom,$prix_original, $prix_final,$description,$urlimg,$categorie_id,$QStock,$product]);
        return redirect()->route('produits.create');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
