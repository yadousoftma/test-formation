<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view("validator.create");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'validation_accepted' => 'accepted',
            'url' => 'active_url',
            'date_2024' => 'after:2023-12-31',
            'alpha' => 'alpha',
            'alpha_num' => 'alpha_num',
            'alphadash' => 'alpha_dash',
            'boolean' => 'boolean',
            'nombre' => 'between:10,20',
            'date_2022' => 'before:2023-01-01',
            'tableau' => 'array',

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
