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
                      <th>Ticket</th>
                      <th>Ticket Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Booking ID</th>
                      <th>Customer</th>
                      <th>Ticket</th>
                      <th>Ticket Date</th>
                    </tr>
                  </tfoot>
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
            </div>
          </div>
        </div>
        <!--Row-->

      </div>
      <!---Container Fluid-->
@endsection