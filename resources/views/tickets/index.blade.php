@extends('admin.layout')

@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ticket Setup</h1>
    </div>

    <div class="row mb-3">
      <!-- Invoice Example -->
      <div class="col-xl-12 col-lg-12 mb-12">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold">Ticket List</h6>
            <a class="m-0 float-right btn-sm" href="tickets/create" style="color:#3abaf4 !important;">Add New<i
                class="fas fa-chevron-right"></i></a>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id}}</td>
                    <td>{{ $ticket->name }}</td>
                    <td>{{ $ticket->price }}</td>
                    <td>{{ $ticket->description }}</td>
                    <td>
                    <a class="m-0 float-right btn-sm btn-success" href="tickets/{{ $ticket->id }}/edit">Edit<i
                            class="fas fa-chevron-right"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
    </div>
    <!--Row-->

  </div>
  <!---Container Fluid-->
    
@endsection