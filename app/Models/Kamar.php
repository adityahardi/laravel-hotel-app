<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kamar',
        'harga_kamar',
    ];

    // public function booking()
    // {
    //     return $this->hasMany(Booking::class);
    // }

    // public function fasilitas()
    // {
    //     return $this->belongsTo(Fasilitas::class);
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function scopeStoreKamar($query, $request)
    {
        $status = $query->create([
            'nama_kamar'        => $request->nama_kamar,
            'harga_kamar'       => $request->harga_kamar,
        ]);

        if(!$status) return false;

        else true;
    }

    // public function scopeHargakamar($query, $nama_kamar)
    // {
    //     $harga = 150000;
        
    //     if($nama_kamar == 'Vip'){
    //         $harga = 500000;    
    //     } else if($nama_kamar == 'RedRooms') {
    //         $harga = 200000;
    //     }
        

    //     return $harga;
    // }


    public function scopeEditKamar($query, $request)
    {
        $status = $query->where('id', $request->id)->update([
            'nama_kamar'        => $request->nama_kamar,
            'harga_kamar'       => $request->harga_kamar,
        ]);

        if (!$status) return false;

        else true;
    }
}
