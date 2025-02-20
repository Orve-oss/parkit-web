@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-4">
        <a href="{{route('eventcreate')}}">
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
    <div class="col-md-4">
        <a href="#">
            <div class="card card-post card-round">
                <img
                  class="card-img-top"
                  src="assets/img/cetef.jpg"
                  height="150"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <div class="separator-solid"></div>
                  <p class="card-category text-info mb-1">
                    <a href="#">Event</a>
                  </p>
                  <h3 class="card-title">
                    <a href="#"> Foire internationale Lomé </a>
                  </h3>
                  <p class="card-text">
                    Start date: 22 Novembre 2025
                  </p>
                  <p class="card-text">
                    End date: 08 Decembre 2025
                  </p>
                  <a href="#" class="btn btn-primary btn-rounded btn-sm"
                    >Read More</a
                  >
                </div>
              </div>
        </a>
      </div>
    {{-- <div class="col-md-4">
      <div class="card card-info card-annoucement card-round">
        <div class="card-body text-center">
          <div class="card-opening">Welcome Rian,</div>
          <div class="card-desc">
            Aucun evenement ajouté
          </div>

        </div>
      </div>
    </div> --}}
</div>
@endsection
