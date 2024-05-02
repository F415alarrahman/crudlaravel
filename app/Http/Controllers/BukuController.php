<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::all();
        return view("products.indexbuku", ['bukus' => $bukus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.createbuku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
        ]);

        $newBuku = Buku::create($data);

        return redirect(route('buku.indexbuku'));
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        return view('products.editbuku', ['buku' => $buku]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('products.editbuku', ['buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Buku $buku, Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
        ]);

        $buku->update($data);

        return redirect(route('buku.indexbuku'))->with('success', 'Product update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted successfully');
    }
}
