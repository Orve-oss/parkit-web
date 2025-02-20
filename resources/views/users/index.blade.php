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
          <table
            id="add-row"
            class="display table table-striped table-hover"
          >
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th style="width: 10%">Action</th>
              </tr>
            </thead>
            
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>
                  <div class="form-button-action">
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-primary btn-lg"
                      data-original-title="Edit Task"
                    >
                      <i class="fa fa-edit"></i>
                    </button>
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-danger"
                      data-original-title="Remove"
                    >
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>
                  <div class="form-button-action">
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-primary btn-lg"
                      data-original-title="Edit Task"
                    >
                      <i class="fa fa-edit"></i>
                    </button>
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-danger"
                      data-original-title="Remove"
                    >
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>
                  <div class="form-button-action">
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-primary btn-lg"
                      data-original-title="Edit Task"
                    >
                      <i class="fa fa-edit"></i>
                    </button>
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-danger"
                      data-original-title="Remove"
                    >
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>
                  <div class="form-button-action">
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-primary btn-lg"
                      data-original-title="Edit Task"
                    >
                      <i class="fa fa-edit"></i>
                    </button>
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-danger"
                      data-original-title="Remove"
                    >
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>
                  <div class="form-button-action">
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-primary btn-lg"
                      data-original-title="Edit Task"
                    >
                      <i class="fa fa-edit"></i>
                    </button>
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-danger"
                      data-original-title="Remove"
                    >
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>
                  <div class="form-button-action">
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-primary btn-lg"
                      data-original-title="Edit Task"
                    >
                      <i class="fa fa-edit"></i>
                    </button>
                    <button
                      type="button"
                      data-bs-toggle="tooltip"
                      title=""
                      class="btn btn-link btn-danger"
                      data-original-title="Remove"
                    >
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
