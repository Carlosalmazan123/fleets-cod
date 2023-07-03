<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\User;
use App\Models\Destiny;

class Ticket extends Model
{
    use HasFactory;
    public function seats(){
        return $this->belongsToMany(Seat::class);
    }
    public function destiny(){
        return $this->belongsTo(Destiny::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
