@extends('admin.layout')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Booking List</h1>
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
                      <th>Order ID</th>
                      <th>Customer</th>
                      <th>Ticket Date</th>
                      <th>No. of People</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Order ID</th>
                      <th>Customer</th>
                      <th>Ticket Date</th>
                      <th>No. of People</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-success">Paid (Rs.1100)</span></td>
                      <td>Paid Online</td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-danger">Pending (Rs.500)</span></td>
                      <td><a href="#" class="btn btn-sm btn-success">Accept Payment</a></td>
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-success">Paid (Rs.1100)</span></td>
                      <td>Paid Online</td>
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-danger">Pending (Rs.500)</span></td>
                      <td><a href="#" class="btn btn-sm btn-success">Accept Payment</a></td>
                    </tr>
                    <tr>
                      <td>Airi Satou</td>
                      <td>Accountant</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-danger">Pending (Rs.500)</span></td>
                      <td><a href="#" class="btn btn-sm btn-success">Accept Payment</a></td>
                    </tr>
                    <tr>
                      <td>Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-success">Paid (Rs.1100)</span></td>
                      <td>Paid Online</td>
                    </tr>
                    <tr>
                      <td>Herrod Chandler</td>
                      <td>Sales Assistant</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-success">Paid (Rs.1100)</span></td>
                      <td>Paid Cash</td>
                    </tr>
                    <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-danger">Pending (Rs.500)</span></td>
                      <td><a href="#" class="btn btn-sm btn-success">Accept Payment</a></td>
                    </tr>
                    <tr>
                      <td>Colleen Hurst</td>
                      <td>Javascript Developer</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-danger">Pending (Rs.500)</span></td>
                      <td><a href="#" class="btn btn-sm btn-success">Accept Payment</a></td>
                    </tr>
                    <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-danger">Pending (Rs.500)</span></td>
                      <td><a href="#" class="btn btn-sm btn-success">Accept Payment</a></td>
                    </tr>
                    <tr>
                      <td>Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>July 12, Sunday</td>
                      <td>Adult - 1 / Children - 3</td>
                      <td><span class="badge badge-success">Paid (Rs.1100)</span></td>
                      <td>Paid Online</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!--Row-->

      </div>
      <!---Container Fluid-->
@endsection