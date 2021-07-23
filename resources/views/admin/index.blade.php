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
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ticket_sales_today->count }}</div>
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
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $new_user_today->count }}</div>
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
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_ticket_sales->count }}</div>
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
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_customer->count }}</div>
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
            <a class="m-0 float-right btn-sm" href="/bookinglist" style="color:#3abaf4 !important;">View More <i
                class="fas fa-chevron-right"></i></a>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>Order ID</th>
                  <th>Customer</th>
                  <th>Ticket</th>
                  <th>Ticket Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ticket_bookings as $ticket_booking)
                <tr>
                  <td>B-0000{{ $ticket_booking->bookid}}</td>
                  <td>{{ $ticket_booking->customer}}</td>
                  <td>{{ $ticket_booking->ticket}}</td>
                  <td>{{ $ticket_booking->created_at}}</td>
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
