<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Models\Customer;
use App\Models\Fleet;

class Seat extends Model
{
    use HasFactory;
    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function fleet(){
        return $this->belongsTo(Fleet::class);
    }
}
