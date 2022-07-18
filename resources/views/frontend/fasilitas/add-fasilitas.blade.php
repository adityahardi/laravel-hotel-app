@extends('layouts.admin')

@section('content')
    
    <div class="card-header">
        <div class="card-body">
            <form method="POST" action="/store-fasilitas">
                @csrf
                    <div class="mb-4">
                        <label for="exampleInputEmail1">Nama Fasilitas</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nama_fasilitas" placeholder="Nama Fasilitas" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1">Harga</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="harga" placeholder="Harga" aria-describedby="emailHelp">
                    </div>
                <button type="submit" class="btn btn-primary float-end">Submit</button>
                <br>
            </form>
        </div>
    </div>

@endsection