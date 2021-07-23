@extends('layouts.userlayout')

@section('content')


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Buy tickets</h1>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1"> No. of adult (Above 14 years) <span class="badge badge-success" style="font-size: 12px; font-weight: 400;"> Per adult price - Rs. 500</span></label>
                  <input type="number" class="form-control"
                    placeholder="Enter a number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No. of children (14 or below 14 years) <span class="badge badge-success" style="font-size: 12px; font-weight: 400;"> Per child price - Rs.300</span></label>
                    <input type="number" class="form-control"
                      placeholder="Enter a number">
                </div>
                <div class="form-group" id="simple-date1">
                  <label for="simpleDataInput">Date</label>
                    <div class="input-group date">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control" value="" id="simpleDataInput" placeholder="Enter a date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlReadonly">Total price</label> <span class="badge badge-success" style="font-size: 12px; font-weight: 400;">Discount - 10% (If paid through online)</span>
                    <input class="form-control" type="text" placeholder="Rs. 500"
                      id="exampleFormControlReadonly" readonly>
                </div>
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0">Pay via</legend>
                    <div class="col-sm-9">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Khalti</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Esewa</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Cash</label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <button type="submit" class="btn btn-info">Buy ticket</button>
              </form>
            </div>
          </div>
      </div>
    </div>

    

  </div>
  <!---Container Fluid-->
  
@endsection
