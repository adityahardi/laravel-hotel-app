@extends('layouts.admin')

@section('content')
  
<div class="card-header">
    <div class="card-body">
        <form method="POST" action="/store-kamar">
            @csrf
                <div class="mb-4">
                    <label for="exampleInputEmail1">Nama Kamar</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kamar" placeholder="Nama User" aria-describedby="emailHelp">
                    <input type="hidden" name="is_booked" value="1">
                </div>
            <button type="submit" class="btn btn-primary float-end">Submit</button>
            <br>
        </form>
    </div>
</div>

@endsection