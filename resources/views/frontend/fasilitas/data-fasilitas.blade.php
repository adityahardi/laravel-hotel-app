@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <div class="card">
        <div class="card-header">
            Data Fasilitas <a href="/input-fasilitas" class="btn btn-primary float-end">Tambah Fasilitas</a>
        </div>
        <div class="card-body">
            <table class="table datatable" id="fasilitas">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fasilitas</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <script>
            $('#fasilitas').DataTable({
                'ajax': '/datatable/fasilitas',
            })
        </script>
@endsection