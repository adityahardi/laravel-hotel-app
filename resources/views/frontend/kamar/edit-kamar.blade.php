@extends('layouts.admin')

@section('content')
  <div class="card">
    <div class="card-body">
      <form method="POST" action="/update-kamar">
        @csrf
        <div class="mb-3">
          <input type="hidden" name="id" value="{{ $kamar->id }}">
          <label for="exampleInputEmail1">Nama Kamar</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kamar" placeholder="Nama Kamar" aria-describedby="emailHelp" value="{{ $kamar->nama_kamar }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Harga Kamar</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="harga_kamar" placeholder="No Telepon" aria-describedby="emailHelp" value="{{ $kamar->harga_kamar }}">
        </div>
        <button type="submit" class="btn btn-primary float-end">Submit</button>
      </form>
    </div>
  </div>
@endsection