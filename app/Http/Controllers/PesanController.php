<?php

namespace App\Http\Controllers;

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
        $data = [];
        $order = Member::get();
        foreach ($order as $item) {
            $data[] = [
                $item->id,
                $item->nama_user,
                $item->no_kamar,
                $item->nama_kamar,
                $item->fasilitas,
                '<a href="/edit-order/'.$item->id.'" class="btn btn-primary">Tambah / Edit Order</a> <a href="/delete-order/'.$item->id.'" class="btn btn-danger">Cancel Order</a>'
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
