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
                    <li class="list-group-item list-group-item-action border-0  bg-light text-center">Donor</li>
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
<!-- Modal -->
<div class="modal fade" id="donor_modal" tabindex="-1" aria-labelledby="donor_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="border-radius: 10px;">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="donor_modal">Apply as Donor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
              @csrf
              <div class="row mb-3">
                <div class="col-8">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control shadow-none" id="name">
                </div>
                <div class="col">
                    <label for="name">Age</label>
                    <input type="text" name="name" class="form-control shadow-none" id="name">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-6">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-select">
                        <option value="" hidden disabled selected>select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="blood_group">Blood Group</label>
                    <select name="blood_group" id="blood_group" class="form-select">
                        <option value="" selected hidden disabled>select</option>
                        <option value="O+">O +</option>
                        <option value="O+">O -</option>
                        <option value="O+">A -</option>
                        <option value="O+">A +</option>
                        <option value="O+">B +</option>
                        <option value="O+">B -</option>
                        <option value="O+">AB +</option>
                        <option value="O+">AB -</option>

                    </select>
                </div>
              </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
