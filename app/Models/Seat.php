<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Models\Customer;

class Seat extends Model
{
    use HasFactory;
    public function tickets(){
        return $this->belongsToMany(Ticket::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
