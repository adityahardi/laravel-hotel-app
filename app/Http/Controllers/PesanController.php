<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Fasilitas;
use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Models\Member;
use Carbon\Carbon;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOrder()
    {
        $kamar = Kamar::where('is_booked', 0)->get();
        $fasilitas = Fasilitas::all();

        return view('frontend.order', compact('kamar', 'fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storePesan(Request $request)
    {
        $kamar          = Kamar::find($request->kamar);
        $fasilitas      = Fasilitas::find($request->fasilitas);
        $hargaKamar     = $kamar->harga_kamar;
        $datetime       = Carbon::now();
        $user           = Member::create($request->except('_token', 'kamar', 'nama_fasilitas', 'harga'));
        $total_harga    = $hargaKamar + $fasilitas->harga;

        $store = Booking::create([
            'kamar_id'          => $kamar->id,
            'fasilitas_id'      => $fasilitas->id,
            'user_id'           => $user->id,
            'tanggal_booking'   => $datetime->format('Y-m-d'),
            'total_harga'       => $total_harga
        ]);
        
        $setIsBooked = Kamar::where('id', $kamar->id)->update([
            'is_booked' => 1,
        ]);

        return redirect('/order-sukses')->with('success', 'Pemesanan berhasil');
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

            $data[] = [
                $item->id,
                $item->user->nama_user,
                $item->user->no_telepon,
                $item->kamar->nama_kamar,
                $item->fasilitas->nama_fasilitas,
                $item->tanggal_booking,
                $item->total_harga,

                '<a href="" class="btn btn-primary">Check IN</a> <a href="" class="btn btn-danger">Check OUT</a>'
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
