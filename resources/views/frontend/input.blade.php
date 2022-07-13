@extends('layouts.admin')

@section('content')
  
<div class="card-header">
    <div class="card-body">
        <form method="POST" action="/store-user">
            @csrf
                <div class="mb-4">
                    <label for="exampleInputEmail1">Nama User</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_user" placeholder="Nama User" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="no_telepon" placeholder="No Telepon" aria-describedby="emailHelp" >
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"></textarea>
                </div>
            <button type="submit" class="btn btn-primary float-end">Submit</button>
            <br>
        </form>
    </div>
</div>

@endsection