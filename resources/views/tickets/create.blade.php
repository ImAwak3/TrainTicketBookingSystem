@extends('admin.layout')

@section('content')
    
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Ticket - Add new Ticket</h1>
    </div>
    
  <div class="row">
    <div class="col-lg-6">
      <div class="card mb-4">
          <div class="card-body">
            <form action="/tickets" method="POST">
                @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="name"
                    name="name"
                    class="form-control"
                    placeholder="Ticket name....">
              </div>
              <div class="form-group">
                  <label for="price">Price</label>
                  <input type="number"
                    name="price"
                    class="form-control"
                    placeholder="Ticket price....">
              </div>
              <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text"
                    name="description"
                    class="form-control"
                    placeholder="Ticket description....">
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
            </form>
          </div>
        </div>
    </div>
  </div>
  <!---Container Fluid-->

@endsection