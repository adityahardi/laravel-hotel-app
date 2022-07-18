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
        $kamar = Kamar::all();
        return view('frontend.order', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storePesan(Request $request)
    {
        $data['members'] = Member::get();
        $data['fasilitas'] = Fasilitas::get();
        $data['kamar'] = Kamar::get();
        $data['booking'] = Booking::get();


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
    public function showTest()
    {
        //
    }

    public function datatableOrder()
    {
        $data = [];
        $booking = Booking::get();

        foreach($booking as $item) {
            $member = Member::find($item->id);
            $kamar = Kamar::find($item->id);
            $fasilitas = Fasilitas::find($item->id);

            $data[] = [
                $item->id,
                $member->nama_user,
                $member->no_telepon,
                $kamar->nama_kamar,
                $fasilitas->nama_fasilitas,
                $fasilitas->harga,
                $item->tanggal_booking,

                '<a href="" class="btn btn-primary">Check IN</a> <a href="/delete/'.$item->id.'" class="btn btn-danger">Check OUT</a>'
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
