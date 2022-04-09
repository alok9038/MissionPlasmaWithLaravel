@extends('layouts.base')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="get">
                <p class="small text-center text-muted search-label"> search your district or state</p>
                <div class="input-group search-input">
                    <span class="input-group-text fs-4 bg-white border-0" id="basic-addon1"><i class='bx bx-search'></i></span>
                    <input type="text" class="form-control border-0" placeholder="state or district ...." aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </form>

            <ul class="list-group mt-5">
                <div class="d-flex mb-2">
                    <li class="list-group-item list-group-item-action border-0 bg-light">State</li>
                    <li class="list-group-item list-group-item-action border-0  bg-light text-center">Donar</li>
                    <li class="list-group-item list-group-item-action border-0  bg-light text-center">Requester</li>
                </div>
                <div class="d-flex mb-1 state-list">
                    <li class="state list-group-item list-group-item-action border-0 bg-light">Bihar</li>
                    <li class="donar list-group-item list-group-item-action border-0 ms-2 bg-light text-center">45</li>
                    <li class="requester list-group-item list-group-item-action border-0 ms-2 bg-light text-center">65</li>
                </div>
            </ul>
        </div>
        <div class="col-lg-6">
            <div class="d-flex">
                <h1 class="state-name fadeInUp header text-muted py-0" style="animation-delay: 0ms;">Dashboard</h1>
            </div>
            <p class="text-muted fw-bold" style="font-size: .75rem; font-family: 'Roboto', sans-serif;">Last update on 09 APR, 9:13 PM</p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-bg-green border-0 shadow-none">
                        <div class="card-body text-center text-success">
                            <p class="small">Donors</p>
                            <p class="fs-3">1,52,560</p>
                            <a href="" class="text-decoration-none text-success small">view all</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-bg border-0 shadow-none">
                        <div class="card-body text-primary text-center">
                            <p class="small">Requesters</p>
                            <p class="small fs-3">3,12,560</p>
                            <a href="" class="text-decoration-none small">view all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
