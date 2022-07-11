<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_kamar',
        'nama_kamar',
        'nama_user',
        'fasilitas',
    ];

    public function scopeStoreUser($query, $request)
    {
        $status = $query->create([
            'nama_user' => $request->nama_user,
            'no_kamar' => $request->no_kamar,
            'nama_kamar' => $request->nama_kamar,
            'fasilitas' => $request->fasilitas,
        ]);

        if(!$status) return false;

        else true;
    }

    public function scopeUpdateUser($query, $request)
    {
        $status = $query->where('id', $request->id)
            ->update([
                'nama_user' => $request->nama_user,
                'no_kamar' => $request->no_kamar,
                'nama_kamar' => $request->nama_kamar,
                'fasilitas' => $request->fasilitas,
            ]);

        if(!$status) return false;

        else true;
    }

    public function scopeDeleteUser($query, $id)
    {
        $status = $query->where('id', $id)
            ->delete();

        if(!$status) return false;

        else true;
    }
}
