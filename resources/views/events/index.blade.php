@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-4">
        <a href="{{ route('eventcreate') }}">
            <div class="card card-info card-annoucement card-round">
                <div class="card-body text-center">
                    <div class="card-opening">New event</div>
                    <div class="card-desc">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    @forelse($events as $event)
    <div class="col-md-4">
        <a href="#">
            <div class="card card-post card-round">
                <img
                  class="card-img-top"
                  src="{{ asset('storage/' . $event->image) }}"
                  height="150"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <div class="separator-solid"></div>
                  <p class="card-category text-info mb-1">
                    <a href="#">{{ $event->location }}</a>
                  </p>
                  <h3 class="card-title">
                    <a href="#">{{ $event->name }}</a>
                  </h3>
                  <p class="card-text">
                    Start date: {{ $event->start_date->format('d M Y') }}
                  </p>
                  <p class="card-text">
                    End date: {{ $event->end_date->format('d M Y') }}
                  </p>
                  <a href="#" class="btn btn-primary btn-rounded btn-sm">Voir</a>
                </div>
            </div>
        </a>
    </div>
    @empty
    <div class="col-md-8">
        <div class="card card-info card-annoucement card-round">
            <div class="card-body text-center">
                <div class="card-opening">Aucun événement</div>
                <div class="card-desc">
                    Aucun événement ajouté
                </div>
            </div>
        </div>
    </div>
    @endforelse
</div>
@endsection
