<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetailPenjualanModel;
use App\Models\PenjualanDetailModel;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index() {
        return DetailPenjualanModel::all();
    }

    public function store(Request $request) {
        $transaksi = DetailPenjualanModel::create($request->all());
        return response()->json($transaksi, 201);
    }

    public function show(DetailPenjualanModel $transaksi) {
        $transaksiT = DetailPenjualanModel::with(['barang' => function ($query) {
            $query->select('barang_id', 'image'); // Ubah 'id' menjadi 'barang_id'
        }])->find($transaksi->detail_id);
    
        return response()->json([
            'detail_id' => $transaksiT->detail_id,
            'penjualan_id' => $transaksiT->penjualan_id,
            'barang_id' => $transaksiT->barang_id,
            'harga' => $transaksiT->harga,
            'jumlah' => $transaksiT->jumlah,
            'created_at' => $transaksiT->created_at,
            'updated_at' => $transaksiT->updated_at,
            'image' => $transaksiT->barang->image
        ]);
    }
    
    

    public function update(Request $request, DetailPenjualanModel $transaksi) {
        $transaksi->update($request->all());
        return DetailPenjualanModel::find($transaksi);
    }

    public function destroy(DetailPenjualanModel $transaksi) {
        $transaksi->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}