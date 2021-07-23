<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketBooking extends Model
{
    use HasFactory;

    protected $table = 'table_ticket_booking';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'ticket_id', 'isCancelled'];
}
