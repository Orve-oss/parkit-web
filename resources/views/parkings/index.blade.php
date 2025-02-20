@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <select
              class="form-select form-control"
              id="defaultSelect"
            >
              <option disabled>Choisir un événement </option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
    </div>
    <div class="col-md-6 end">
        <a href="{{route("parkingcreate")}}"><button class="btn btn-secondary">
            <span class="btn-label">
              <i class="fa fa-plus"></i>
            </span>
            Ajouter
          </button></a>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-4 col-md-4 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <h5><b>Parking</b></h5>
              <p class="text-muted">Event/p>
            </div>
            <h3 class="text-info fw-bold">20</h3>
          </div>
          <div class="progress progress-sm">
            <div
              class="progress-bar bg-info w-75"
              role="progressbar"
              aria-valuenow="75"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="d-flex justify-content-between mt-2">
            <p class="text-muted mb-0">Change</p>
            <p class="text-muted mb-0">75%</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-xl-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div>
                <h5><b>Parking</b></h5>
                <p class="text-muted">Event</p>
              </div>
              <h3 class="text-info fw-bold">20</h3>
            </div>
            <div class="progress progress-sm">
              <div
                class="progress-bar bg-info w-75"
                role="progressbar"
                aria-valuenow="75"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <div class="d-flex justify-content-between mt-2">
              <p class="text-muted mb-0">Change</p>
              <p class="text-muted mb-0">75%</p>
            </div>
          </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-xl-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div>
                <h5><b>Parking</b></h5>
                <p class="text-muted">Event</p>
              </div>
              <h3 class="text-info fw-bold">20</h3>
            </div>
            <div class="progress progress-sm">
              <div
                class="progress-bar bg-info w-75"
                role="progressbar"
                aria-valuenow="75"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <div class="d-flex justify-content-between mt-2">
              <p class="text-muted mb-0">Change</p>
              <p class="text-muted mb-0">75%</p>
            </div>
          </div>
        </div>
    </div>


  </div>

@endsection
