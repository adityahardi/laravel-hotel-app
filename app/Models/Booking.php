<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'kamar_id',
        'fasilitas_id',
        'user_id',
        'tanggal_booking',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class);
    }

    public function user()
    {
        return $this->belongsTo(Member::class);
    }

    public function scopeStoreBooking($query, $request)
    {
        $kamar = Kamar::find($request->kamar_id);
        $fasilitas = Fasilitas::find($request->fasilitas_id);
        $user = Member::find($request->user_id);

        $status = $query->create([
            'kamar_id' => $request->kamar_id,
            'fasilitas_id' => $request->fasilitas_id,
            'user_id' => $request->user_id,
            'tanggal_booking' => $request->tanggal_booking,
        ]);

        if(!$status) return false;

        else true;
    }
}
