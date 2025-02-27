@extends('layouts.authlayout')

@section('content')


    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="col-md-6 mx-5">
            <div class="card">
              <div class="card-header">
                <div class="card-title">Se connecter</div>
              </div>
              <div class="card-body">

                  <div class="col-md-6 col-lg-12">
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Entrez l'email"
                      />
                      <small id="email" class="form-text text-muted"
                        >We'll never share your email with anyone
                        else.</small
                      >
                    </div>

                  </div>
                  <div class="col-md-6 col-lg-12">
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Password"
                          />
                        </div>

                    </div>

              </div>
              <div class="card-action">
                <button class="btn btn-success">Submit</button>
                <button class="btn btn-danger">Cancel</button>
              </div>
            </div>
          </div>
    </form>


@endsection
