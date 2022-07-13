@extends('layouts.admin')

@section('content')
  <div class="card">
    <div class="card-body">
      <form method="POST" action="/update-order">
        @csrf
        <div class="mb-3">
          <input type="hidden" name="id" value="{{ $order->id }}">
          <label for="exampleInputEmail1">Nama User</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_user" placeholder="Nama User" aria-describedby="emailHelp" value="{{ $order->nama_user }}">
        </div>
        <div class="mb-3">
            <label for="">No Kamar</label>
            <input class="form-control" type="number" name="no_kamar" placeholder="No Kamar" value="{{ $order->no_kamar }}">
        </div>
        <div class="mb-3">
            <label for="">Nama Kamar</label>
            <input class="form-control" type="text" name="nama_kamar" placeholder="Nama Kamar" value="{{ $order->nama_kamar }}">
        </div>
        <div class="mb-3">
            <label for="">Fasilitas</label>
            <input class="form-control" type="text" name="fasilitas" placeholder="Fasilitas" value="{{ $order->fasilitas }}">
        </div>
        <button type="submit" class="btn btn-primary float-end">Submit</button>
      </form>
    </div>
  </div>
@endsection