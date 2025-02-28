@extends('layouts.layout')

@section('content')
<form action="{{ route('parkingstore') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Ajouter un parking</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="event_id">Nom de l'événement</label>
                    <select class="form-select form-control" id="event_id" name="event_id" required>
                      <option disabled selected>Choisir un événement</option>
                      @foreach($events as $event)
                        <option value="{{ $event->id }}">{{ $event->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="name">Nom du parking</label>
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Entrez le nom du parking"
                        required
                      />
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="location">Localisation</label>
                      <input
                        type="text"
                        class="form-control"
                        id="location"
                        name="location"
                        placeholder="Entrez la localisation"
                        
                      />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="total_place">Total de places</label>
                      <input
                        type="number"
                        class="form-control"
                        id="total_place"
                        name="total_place"
                        placeholder="Entrez le nombre total de places"
                        required
                      />
                    </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Submit</button>
              <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
          </div>
        </div>
    </div>
</form>
@endsection
