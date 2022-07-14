<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Fasilitas;
use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Models\Member;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOrder()
    {
        return view('frontend.order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storePesan(Request $request)
    {
        $store = Member::createOrder($request);
        if($store) return redirect('/sukses');
        else return redirect('/');
    }

    public function suksesOrder()
    {
        // create name order from database nama_user
        // $order = Member::get( 'nama_user' );
        return view('frontend.order-sukses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function datatableOrder()
    {
        $order = Booking::get();
        $data = [];
        foreach ($order as $item) {
            $member = Member::get($item->id);
            $kamar = Kamar::get($item->kamar_id);
            $fasilitas = Fasilitas::get($item->fasilitas_id);
            $data[] = [
                $member->nama_user,
                $member->no_telepon,
                $kamar->no_kamar,
                $kamar->nama_kamar,
                $fasilitas->nama_fasilitas,
                $fasilitas->harga,
                '<a href="/edit/'.$item->id.'" class="btn btn-primary">Edit</a> <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
            ];
        }

        return [
            'data' => $data,
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editOrder($id)
    {
        $data['order'] = Member::find($id);

        return view('frontend.edit-order', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateOrderDetail(Request $request)
    {
        $update = Member::updateOrder($request);

        if($update) return redirect('/order-detail');
        else return 'gagal update data';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyOrder($id)
    {
        $status = Member::deleteOrder($id);
        if($status) return redirect('/order-detail');
        else return redirect('/order-detail');
    }
}
