<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

class DetailPenjualanModel extends Model {
    use HasFactory;

    protected $table = 't_penjualan_detail';
    protected $primaryKey = 'detail_id';
    protected $fillable = ['penjualan_id', 'barang_id', 'harga', 'jumlah', 'updated_at', 'created_at', 'image'];

    public function penjualan(): BelongsTo {
        return $this->belongsTo(PenjualanModel::class, 'penjualan_id', 'penjualan_id');
    }
    
    public function barang(): BelongsTo {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id'); // Ubah 'id' menjadi 'barang_id' sesuai kolom utama yang benar
    }

    public function image(): Attribute {
        return Attribute::make(
            get: fn($image) =>url('/storage/posts/' .$image),
        );
    }
}

