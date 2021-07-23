<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function bookinglist(){
        return view('admin.bookinglist');
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
