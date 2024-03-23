<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\Kategori;
use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Shows all kategori
     */
    function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    /**
     * Return Create kategori page
     */
    function create() {
        return view('kategori.create');
    }

    /**
     * Create a new row from input req form
     */
    function store(Request $request) {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    /**
     * Return to edit page
     */
    function edit($id) {
        return view('kategori.edit', ['data' => KategoriModel::find($id)]);
    }

    /**
     * Update kategori data
     */
    public function update(Request $request, $id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->kategori_kode = $request->kategori_kode;
        $kategori->kategori_nama = $request->kategori_nama;

        $kategori->save();
        return redirect('/kategori');
    }

    function destroy($id) {
        KategoriModel::find($id)->delete();

        return redirect('/kategori');
    }
}