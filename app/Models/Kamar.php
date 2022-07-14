<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kamar',
        'is_booked',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeStoreKamar($query, $request)
    {
        $status = $query->create([
            'nama_kamar' => $request->nama_kamar,
            'is_booked' => $request->is_booked,
        ]);

        if(!$status) return false;

        else true;
    }
}
