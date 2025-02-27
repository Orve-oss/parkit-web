@extends('layouts.layout')

@section('content')

<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center">
          <h4 class="card-title">Liste des clients</h4>
        </div>
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table id="add-row" class="display table table-striped table-hover">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Date de création</th>
                <th style="width: 10%">Action</th>
              </tr>
            </thead>

            <tbody>
              @forelse($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                <td>
                  <div class="form-button-action">
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title="Edit"
                      class="btn btn-link btn-primary btn-lg"
                      data-original-title="Edit Task"
                    >
                      <i class="fa fa-edit"></i>
                    </button>
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title="Remove"
                      class="btn btn-link btn-danger"
                      data-original-title="Remove"
                    >
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="text-center">Pas de clients</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
