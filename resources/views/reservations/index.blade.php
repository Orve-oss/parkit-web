@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Liste des réservations</div>
            </div>
            <div class="card-body">
                @if($reservations->isEmpty())
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pas de réservation</h5>
                        </div>
                    </div>
                @else
                    <table class="table table-head-bg-success">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Utilisateur</th>
                                <th scope="col">Événement</th>
                                <th scope="col">Statut de paiement</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->id }}</td>
                                    <td>{{ $reservation->user->name }}</td>
                                    <td>{{ $reservation->event->name }}</td>
                                    <td>{{ $reservation->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
