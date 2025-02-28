@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <select class="form-select form-control" id="defaultSelect">
              <option disabled selected>Choisir un événement</option>
              @foreach($events as $event)
                <option value="{{ $event->id }}">{{ $event->name }}</option>
              @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6 end">
        <a href="{{ route('parkingcreate') }}">
            <button class="btn btn-secondary">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
                Ajouter
            </button>
        </a>
    </div>
</div>

<div class="row">
    @forelse($parkings as $parking)
    <div class="col-12 col-sm-6 col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5><b>{{ $parking->name }}</b></h5>
                        <p class="text-muted">{{ $parking->event->name }}</p>
                    </div>
                    <h3 class="text-info fw-bold">{{ $parking->total_place }}</h3>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-info w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <p class="text-muted mb-0">Change</p>
                    <p class="text-muted mb-0">75%</p>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">Pas de parking</h5>
            </div>
        </div>
    </div>
    @endforelse
</div>

@endsection
