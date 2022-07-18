<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.fasilitas.data-fasilitas');
    }

    public function datatableFasilitas()
    {
        $data = [];
        $fasilitas = Fasilitas::get();
        foreach ($fasilitas as $item) {
            $data[] = [
                $item->id,
                $item->nama_fasilitas,
                $item->harga,
                '<a href="/edit/'.$item->id.'" class="btn btn-primary">Edit</a> <a href="/delete/'.$item->id.'" class="btn btn-danger">Delete</a>'
            ];
        }

        return [
            'data' => $data,
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFas()
    {
        return view('frontend.fasilitas.add-fasilitas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFasilitasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFas(Request $request)
    {
        $store = Fasilitas::storeFasilitas($request);
        if($store) return redirect('/fasilitas');
        else return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFasilitasRequest  $request
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitas $fasilitas)
    {
        //
    }
}
