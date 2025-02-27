@extends('layouts.layout')

@section('content')
<form action="{{route('eventstore')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Ajouter un événement</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="nom">Nom de l'événement </label>
                    <input
                      type="text"
                      class="form-control"
                      id="nom"
                      name="name"
                      placeholder="Entrez le nom"
                    />
                  </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="search-box">Localisation</label>
                        <input type="text" id="search-box" class="form-control" placeholder="Rechercher un lieu" />
                        <small class="form-text text-muted">Cliquez sur la carte pour choisir l'emplacement.</small>
                        <input type="hidden" id="latitude" name="latitude">
                        <input type="hidden" id="longitude" name="longitude">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">

                    <div class="form-group">
                      <label for="comment">Description </label>
                      <textarea class="form-control" name="description" id="comment" rows="5">
                      </textarea>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="image">Image de l'événement</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="start-date"
                      >Start Date</label>
                      <input
                        type="date"
                        class="form-control"
                        id="start-date"
                        name="start_date"
                        placeholder="Enter date"
                      />
                      <small id="dateHelp2" class="form-text text-muted"
                        >The start date of the event.</small
                      >
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="end-date"
                      >End date</label>
                      <input
                        type="date"
                        class="form-control"
                        id="end-date"
                        name="end_date"
                        placeholder="Enter date"
                      />
                      <small id="dateHelp2" class="form-text text-muted"
                        >End date of the event</small
                      >
                    </div>

                </div>

              </div>
            </div>

            <!--Map -->
            <div class="col-md-12">
                <div id="map" style="width: 100%; height: 300px;"></div>
            </div>
            <div class="card-action">
              <button class="btn btn-success">Submit</button>
              <button class="btn btn-danger">Cancel</button>
            </div>
          </div>
        </div>
    </div>
</form>

<!--Script for the map -->
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&libraries=places"></script>
<script>
    function initMap() {
        var defaultLocation = { lat: 6.1319, lng: 1.2228 }; // Position par défaut (Lomé)

        var map = new google.maps.Map(document.getElementById('map'), {
            center: defaultLocation,
            zoom: 12
        });

        var marker = new google.maps.Marker({
            position: defaultLocation,
            map: map,
            draggable: true
        });

        // Auto-suggestion avec Google Places API
        var input = document.getElementById('search-box');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                alert("Sélectionnez un lieu valide.");
                return;
            }

            map.setCenter(place.geometry.location);
            marker.setPosition(place.geometry.location);
            document.getElementById('latitude').value = place.geometry.location.lat();
            document.getElementById('longitude').value = place.geometry.location.lng();
        });

        // Récupérer les coordonnées après déplacement du marqueur
        google.maps.event.addListener(marker, 'dragend', function(event) {
            document.getElementById('latitude').value = event.latLng.lat();
            document.getElementById('longitude').value = event.latLng.lng();
        });
    }

    window.onload = initMap;
</script>


@endsection
