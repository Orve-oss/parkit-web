@extends('layouts.layout')

@section('content')
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
                <label for="email2">Nom de l'événement </label>
                <input
                  type="email"
                  class="form-control"
                  id="email2"
                  placeholder="Entrez le nom"
                />
                <small id="emailHelp2" class="form-text text-muted"
                  >We'll never share your email with anyone
                  else.</small
                >
              </div>

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label for="email2">Nom du parking</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email2"
                    placeholder="Entrez la localisation"
                  />
                  <small id="emailHelp2" class="form-text text-muted"
                    >We'll never share your email with anyone
                    else.</small
                  >
                </div>

            </div>
            <div class="col-md-12 col-lg-12">

                <div class="form-group">
                  <label for="comment">Description </label>
                  <textarea class="form-control" id="comment" rows="5">
                  </textarea>
                </div>

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label for="date2">Localisation</label>
                  <input
                    type="text"
                    class="form-control"
                    id="date2"
                    placeholder="Enter date"
                  />
                  <small id="dateHelp2" class="form-text text-muted"
                    >The start date of the event.</small
                  >
                </div>

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <label for="date2">Total de place</label>
                  <input
                    type="number"
                    class="form-control"
                    id="number"
                    placeholder="Enter date"
                  />
                  <small id="dateHelp2" class="form-text text-muted"
                    >End date of the event</small
                  >
                </div>

            </div>

          </div>
        </div>
        <div class="card-action">
          <button class="btn btn-success">Submit</button>
          <button class="btn btn-danger">Cancel</button>
        </div>
      </div>
    </div>
  </div>
@endsection
