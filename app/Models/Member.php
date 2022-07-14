<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_user',
        'jenis_kelamin',
        'no_telepon',
        'email',
        'alamat',
    ];

    

    // Bagian User Validasi

    public function scopeStoreUser($query, $request)
    {
        $status = $query->create([
            'nama_user' => $request->nama_user,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        if(!$status) return false;

        else true;
    }

    public function scopeUpdateUser($query, $request)
    {
        $status = $query->where('id', $request->id)
            ->update([
            'nama_user' => $request->nama_user,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'alamat' => $request->alamat,
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



    // Bagian  Order Validasi
    public function scopeCreateOrder($query, $request)
    {
        
        
        $kamar = Kamar::find($request->kamar_id);
        $fasilitas = Fasilitas::find($request->fasilitas_id);

        $status = $query->create([
            'nama_user' => $request->nama_user,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nama_kamar' => $request->nama_kamar,
            'nama_fasilitas' => $request->fasilitas,
            'harga' => $request->harga,
            'kamar_id' => $request->kamar_id,
            'fasilitas_id' => $request->fasilitas_id,
            'user_id' => $request->user_id,
        ]);

        if(!$status) return false;

        else true;
    }


    public function scopeEditOrder($query, $id)
    {
        $data['order'] = $query->find($id);

        return view('frontend.edit-order', $data);
    }

    public function scopeUpdateOrder($query, $request)
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

    public function scopeDeleteOrder($query, $id)
    {
        $status = $query->where('id', $id)
            ->delete([
                'no_kamar',
                'nama_kamar',
                'fasilitas',
            ]);

        if(!$status) return false;

        else true;
    }
}
