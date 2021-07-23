@extends('layouts.userlayout')

@section('content')


<style>
    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto auto;
      grid-gap: 10px;
      background-color: #2196F3;
      padding: 10px;
    }
    
    .grid-container > div {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px 0;
    }
    </style>
  
  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

  <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">My tickets</h1>
    </div>
    
    <div class="grid-container">
    @foreach ($mytickets as $myticket)
          <div class="item">
            <table>
              <colgroup>
                <col style="width: 25%"/>
                <col style="width: 25%"/>
                <col style="width: 25%"/>
                <col style="width: 25%"/>
              </colgroup>
              <tbody>
                <tr>
                  <td colspan="4" style="text-align: center">
                    <img src="{{ URL::asset('img/logo/ticket.jpg')}}" style="width: 150px" alt="">
                  </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center"><strong>Ticket ID: {{$myticket->id}}</strong></td>
                  </tr>
                <tr>
                  <td colspan="4" style="text-align: center">
                    <h4 style="text-align: center">{{$myticket->name}}</h4>
                  </td>
                </tr>
                <tr>
                    <td colspan="4">
                        Date: <strong> {{ $myticket->created_at }}</strong>
                    </td>
                </tr>
                
                <tr>
                  <td colspan="4" style="text-align: center">{{ $myticket->description}}</td>
                </tr>
                <tr>
                  <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4" style="text-align: center">
                    <form action="/cancelticket/{{ $myticket->id }}" method="post">
                      @csrf
                      <button type="submit" onclick="return confirm('Are you sure??')" class="btn btn-danger">Cancel</button>
                    </form>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
      @endforeach
    </div>

@endsection