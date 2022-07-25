@extends('layouts.admin')

@section('content')
  
<div class="card-header">
    <div class="card-body">
        <form method="POST" action="/store-kamar">
            @csrf
                <div class="mb-4">
                    <label for="exampleInputEmail1">Nama Kamar</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kamar" placeholder="Nama Kamar" aria-describedby="emailHelp">
                    <input type="hidden" name="is_booked" value="1">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1">Harga Kamar</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="harga_kamar" placeholder="Harga Kamar" aria-describedby="emailHelp">
                </div>
            <button type="submit" class="btn btn-primary float-end">Submit</button>
            <br>
        </form>
    </div>
</div>

@endsection