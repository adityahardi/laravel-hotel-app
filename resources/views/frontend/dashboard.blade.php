@extends('layouts.admin')

@section('content')
        <div class="">
            <h3 class="card-body fs-2 text-center">Dashboard</h3>
        </div>
        <div class="row">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <div class="stat text-primary float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-middle"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                  <h5 class="fs-3">Total User</h5>
                  <div class="col-auto">
                    <h1 class="mt-1 mb-3 float-start">{{ $users }}</h1>
                </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <div class="stat text-primary float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-middle"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </div>
                  <h3 class="fs-3">Total Pemesanan</h3>
                  <div class="col-auto">
                    <h1 class="mt-1 mb-3 float-start">
                        {{ $booking }}
                    </h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <div class="stat text-primary float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck align-middle"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                    </div>
                  <h5 class="fs-3">Kamar Tersedia</h5>
                  <div class="col-auto">
                    <h1 class="mt-1 mb-3 float-start">
                        {{ $kamar }}
                    </h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <div class="stat text-primary float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck align-middle"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                    </div>
                  <h5 class="fs-3">Fasilitas Tersedia</h5>
                  <div class="col-auto">
                    <h1 class="mt-1 mb-3 float-start">
                        {{ $fasilitas }}
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection