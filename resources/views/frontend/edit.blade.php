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
          <label for="exampleInputEmail1">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin">
            <option value="Laki-Laki" {{ $member->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="Perempuan" {{ $member->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">No Telepon</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="no_telepon" placeholder="No Telepon" aria-describedby="emailHelp" value="{{ $member->no_telepon }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" aria-describedby="emailHelp" value="{{ $member->email }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Alamat</label>
          <textarea class="form-control" name="alamat" rows="3">{{ $member->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary float-end">Submit</button>
      </form>
    </div>
  </div>
@endsection