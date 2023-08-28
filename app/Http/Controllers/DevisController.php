<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\devis;
use App\Models\ElementsDevis;
use App\Models\Produit;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $devis = devis::all();
        return view("devis.index", compact('devis'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $clients = Client::all();
        $produits = Produit::all();
        return view('devis.create', compact('clients', 'produits'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $devis = devis::create([
            'id_client' => $request->client,
            'date' => $request->date_devis,
            'numero_devis' => $request->numero,
        ]);

        for ($i = 0; $i < sizeof($request->qte); $i++) {

            ElementsDevis::create([
                "id_devis" => $devis->id,
                "id_produit" => $request->produit[$i],
                "qte" => $request->qte[$i],
            ]);

        }

        return redirect()->route('devis.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(devis $devis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $devis = devis::find($id);

        $clients = Client::all();
        $produits = Produit::all();
        return view('devis.edit', compact('clients', 'produits', 'devis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $devis = devis::find($id);

        $devis->update([
            'id_client' => $request->client,
            'date' => $request->date_devis,
            'numero_devis' => $request->numero,
        ]);


        for ($i = 0; $i < sizeof($request->qte); $i++) {

             ElementsDevis::where('id',  "=", $request->id_elemenet[$i])->update([
                 "id_produit" => $request->produit[$i],
                 "qte" => $request->qte[$i],
             ]);

        }

        return redirect()->route('devis.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(devis $devis)
    {
        //
    }
}
