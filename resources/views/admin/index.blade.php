@extends('admin.layout')

@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="row mb-3">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Ticket Sales Today</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">60</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- New User Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">New User Today</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">24</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Ticket Sales</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">650</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-shopping-cart fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Customers</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Invoice Example -->
      <div class="col-xl-12 col-lg-12 mb-12">
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold">Recent Booking</h6>
            <a class="m-0 float-right btn-sm" href="booking.html" style="color:#3abaf4 !important;">View More <i
                class="fas fa-chevron-right"></i></a>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
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
              <tbody>
                <tr>
                  <td>RA0449</td>
                  <td>Udin Wayang</td>
                  <td>July 12, Sunday</td>
                  <td>Adult - 1 / Children - 3</td>
                  <td><span class="badge badge-success">Paid (Rs.1100)</span></td>
                  <td>Paid online</td>
                </tr>
                <tr>
                  <td>RA5324</td>
                  <td>Jaenab Bajigur</td>
                  <td>July 12, Sunday</td>
                  <td>Adult - 1 / Children - 3</td>
                  <td><span class="badge badge-danger">Pending (Rs.500)</span></td>
                  <td><a href="#" class="btn btn-sm btn-success">Accept payment</a></td>
                </tr>
                <tr>
                  <td>RA8568</td>
                  <td>Rivat Mahesa</td>
                  <td>July 12, Sunday</td>
                  <td>Adult - 1 / Children - 3</td>
                  <td><span class="badge badge-danger">Pending (Rs.1000)</span></td>
                  <td><a href="#" class="btn btn-sm btn-success">Accept payment</a></td>
                </tr>
                <tr>
                  <td>RA1453</td>
                  <td>Indri Junanda</td>
                  <td>July 12, Sunday</td>
                  <td>Adult - 1 / Children - 3</td>
                  <td><span class="badge badge-success">Paid (Rs.1000)</span></td>
                  <td>Paid online</td>
                </tr>
                <tr>
                  <td>RA1998</td>
                  <td>Udin Cilok</td>
                  <td>July 12, Sunday</td>
                  <td>Adult - 1 / Children - 3</td>
                  <td><span class="badge badge-success">Paid (Rs.800)</span></td>
                  <td>Paid online</td>
                </tr>
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
