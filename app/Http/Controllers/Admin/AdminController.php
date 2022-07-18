<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Kamar;
use App\Models\Fasilitas;

class AdminController extends Controller
{
    public function index()
    {
        $users = Member::where('id', '!=', 0)->count();
        $booking = Booking::Where('id', '!=', 0)->count();
        $kamar = Kamar::Where('id', '!=', 0)->count();
        $fasilitas = Fasilitas::Where('id', '!=', 0)->count();
        return view('frontend.dashboard', compact('users', 'booking', 'kamar', 'fasilitas'));
    }

    public function tampilan()
    {
        $members = Member::all();
        return view('frontend.user')->with('members', $members);
    }

    public function tampilanOrder()
    {
        return view('frontend.order-data');
    }

    public function datatableUser()
    {
        $data = [];
        $member = Member::get();
        foreach ($member as $item) {
            $data[] = [
                $item->id,
                $item->nama_user,
                $item->jenis_kelamin,
                $item->no_telepon,
                $item->email,
                $item->alamat,
                '<a href="/edit/'.$item->id.'" class="btn btn-primary">Edit</a> <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
            ];
        }

        return [
            'data' => $data,
        ];
    }

    public function create()
    {
        return view('frontend.input');
    }

    public function store(Request $request)
    {
        $status = Member::storeUser($request);
        if($status) return redirect('/user');
        else return redirect('/form-input');
    }
    

    public function edit($id)
    {
        $data['member'] = Member::find($id);

        return view('frontend.edit', $data);
    }

    public function update(Request $request)
    {
        $update = Member::updateUser($request);

        if($update) return redirect('/user');
        else return 'gagal update data';
    }


    public function delete($id)
    {
        $status = Member::deleteUser($id);
        if($status) return redirect('/user');
        else return redirect('/user');
    }
}
