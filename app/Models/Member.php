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
        // $kamar = Kamar::find($request->kamar_id);
        // $fasilitas = Fasilitas::find($request->fasilitas_id);
        // $user = Member::find($request->user_id);
        // $data = $request->all();

        // $user = new Member;
        // $user->nama_user = $data['nama_user'];
        // $user->jenis_kelamin = $data['jenis_kelamin'];
        // $user->no_telepon = $data['no_telepon'];
        // $user->email = $data['email'];
        // $user->alamat = $data['alamat'];
        // $user->save();

        // $kamar = new Kamar;
        // $kamar->nama_kamar = $data['nama_kamar'];
        // $kamar->save();

        // $fasilitas = new Fasilitas;
        // $fasilitas->nama_fasilitas = $data['nama_fasilitas'];
        // $fasilitas->harga = $data['harga'];
        // $fasilitas->save();
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
