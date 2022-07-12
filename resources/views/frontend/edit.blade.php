@extends('layouts.admin')

@section('content')
  <div class="card">
    <div class="card-body">
      <form method="POST" action="/update-user">
        @csrf
        <div class="mb-3">
          <input type="hidden" name="id" value="{{ $member->id }}">
          <label for="exampleInputEmail1">Nama User</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_user" placeholder="Nama User" aria-describedby="emailHelp" value="{{ $member->nama_user }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">No Kamar</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="no_kamar" placeholder="No Kamar" aria-describedby="emailHelp" value="{{ $member->no_kamar }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Nama Kamar</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kamar" placeholder="Nama Kamar" aria-describedby="emailHelp" value="{{ $member->nama_kamar }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Fasilitas</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="fasilitas" placeholder="Fasilitas" aria-describedby="emailHelp" value="{{ $member->fasilitas }}">
        </div>
        <button type="submit" class="btn btn-primary float-end">Submit</button>
      </form>
    </div>
  </div>
@endsection