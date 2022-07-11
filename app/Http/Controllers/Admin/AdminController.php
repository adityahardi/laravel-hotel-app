<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class AdminController extends Controller
{
    public function index()
    {
        return view('frontend.dashboard');
    }

    public function tampilan()
    {
        $members = Member::all();
        return view('frontend.user')->with('members', $members);
    }

    public function datatableUser()
    {
        $data = [];
        $member = Member::get();
        foreach ($member as $item) {
            $data[] = [
                $item->id,
                $item->nama_user,
                $item->no_kamar,
                $item->nama_kamar,
                $item->fasilitas,
                '<a href="/edit/'.$item->id.'" class="btn btn-primary">Edit</a>, <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
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
        if($status) return redirect('/pengunjung');
        else return redirect('/form-input');
    }
    

    public function edit($id)
    {
        $member = Member::find($id);
        return view('frontend.edit', compact('member'));
    }

    public function updateUser(Request $request, $id)
    {
        $status = Member::updateUser($request, $id);
        if($status) return redirect('/pengunjung');
        else return redirect('/edit'.$id);
    }

    public function delete($id)
    {
        $status = Member::deleteUser($id);
        if($status) return redirect('/pengunjung');
        else return redirect('/pengunjung');
    }
}
