<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $ticket_sales_today = DB::table('table_ticket_booking')
                                ->select(DB::raw('count(*) as count'))
                                ->whereDate('created_at', Carbon::today())
                                ->get()
                                ->first();

        $new_user_today = DB::table('users')
                                ->select(DB::raw('count(*) as count'))
                                ->whereDate('created_at', Carbon::today())
                                ->get()
                                ->first();

        $total_ticket_sales = DB::table('table_ticket_booking')
                                ->select(DB::raw('count(*) as count'))
                                ->get()
                                ->first();

        $total_customer = DB::table('users')
                                ->select(DB::raw('count(*) as count'))
                                ->get()
                                ->first();

        $ticket_bookings = DB::table('table_ticket_booking')
                            ->join('users', 'table_ticket_booking.user_id', '=', 'users.id')
                            ->join('ticket', 'table_ticket_booking.ticket_id', '=', 'ticket.id')
                            ->select('table_ticket_booking.id as bookid', 'table_ticket_booking.created_at', 'users.name as customer', 'ticket.name as ticket')
                            ->take(5)
                            ->orderBy('table_ticket_booking.id','desc')
                            ->get();

        return view('admin.index', [
            'ticket_sales_today'=>$ticket_sales_today,
            'new_user_today' => $new_user_today,
            'total_ticket_sales' =>$total_ticket_sales,
            'total_customer' => $total_customer,
            'ticket_bookings' => $ticket_bookings
        ]);
    }
    public function bookinglist(){
        $ticket_bookings = DB::table('table_ticket_booking')
                            ->join('users', 'table_ticket_booking.user_id', '=', 'users.id')
                            ->join('ticket', 'table_ticket_booking.ticket_id', '=', 'ticket.id')
                            ->select('table_ticket_booking.id as bookid', 'table_ticket_booking.created_at', 'users.name as customer', 'ticket.name as ticket')
                            ->get();
        return view('admin.bookinglist',[
            'ticket_bookings' => $ticket_bookings
        ]);
    }
    public function customer(){

        $customers = DB::table('users')
                    ->where('isAdmin', false)
                    ->get();
        return view('admin.customer',[
            'customers' => $customers
        ]);
    }
}
