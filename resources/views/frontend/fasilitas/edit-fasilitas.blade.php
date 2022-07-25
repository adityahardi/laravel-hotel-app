@extends('layouts.admin')

@section('content')
  <div class="card">
    <div class="card-body">
      <form method="POST" action="/update-fasilitas">
        @csrf
        <div class="mb-3">
          <input type="hidden" name="id" value="{{ $fasilitas->id }}">
          <label for="exampleInputEmail1">Nama Fasilitas</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_fasilitas" placeholder="Nama Fasilitas" aria-describedby="emailHelp" value="{{ $fasilitas->nama_fasilitas }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Harga Fasilitas</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="harga" placeholder="Harga Fasilitas" aria-describedby="emailHelp" value="{{ $fasilitas->harga }}">
        </div>
        <button type="submit" class="btn btn-primary float-end">Submit</button>
      </form>
    </div>
  </div>
@endsection