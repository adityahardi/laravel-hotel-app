@extends('layouts.admin')

@section('content')
        <div class="">
            <h3 class="card-body fs-2 text-center">Dashboard</h3>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="stat text-primary float-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-middle"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h5 class="fs-2">Total User</h5>
                <div class="col-auto">
                </div>
                <h1 class="mt-1 mb-3 float-start">{{ $users }}</h1>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
                <!-- <iframe class="img-thumbnail" src="https://www.youtube.com/embed/7_pRiUfp938" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
        </div>
@endsection