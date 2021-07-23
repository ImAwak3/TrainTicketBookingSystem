<?php

namespace App\Http\Controllers;

use App\Models\TicketBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tickets = DB::table('ticket')->get();
        
        return view('home', [
            'tickets' => $tickets
        ]);
    }

    public function buyticket($id){
        $ticket_booking = TicketBooking::create([
            'user_id' => Auth::user()->id,
            'ticket_id' => $id,
            'isCancelled' => false,
        ]);

        return redirect('/home')->with('message', 'Booking Successful!');
    }

    public function myticket(){
        $mytickets = DB::table('table_ticket_booking')
                    ->join('ticket', 'table_ticket_booking.ticket_id', '=','ticket.id')
                    ->select('table_ticket_booking.*', 'ticket.name', 'ticket.description')
                    ->where('table_ticket_booking.user_id', Auth::user()->id)
                    ->get();

        return view('myticket',[
            'mytickets' => $mytickets
        ]);
    }

    public function cancelticket($id){
        DB::table('table_ticket_booking')->delete($id);
        return redirect('/myticket')->with('message', 'Cancel Successful!');
    }
}
