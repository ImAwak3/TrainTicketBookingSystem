@extends('admin.layout')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Customer List</h1>
        </div>

        <!-- Row -->
        <div class="row">
          <!-- DataTable with Hover -->
          <div class="col-lg-12">
            <div class="card mb-4">
              <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                  <thead class="thead-light">
                    <tr>
                      <th>Customer ID</th>
                      <th>Customer</th>
                      <th>Email</th>
                      <th>Total Tickets Purchased</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Customer ID</th>
                      <th>Customer</th>
                      <th>Email</th>
                      <th>Total Tickets Purchased</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($customers as $customer)
                      <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td></td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!--Row-->

      </div>
      <!---Container Fluid-->

      <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
  
@endsection