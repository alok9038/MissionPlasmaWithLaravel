@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="get">
                <p class="small text-center text-muted search-label"> search your district or state</p>
                <div class="input-group search-input">
                    <span class="input-group-text fs-4 bg-white border-0" id="basic-addon1"><i class='bx bx-search'></i></span>
                    <input type="text" class="form-control border-0" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
