<?php

namespace App\Models;

use App\Models\Seat;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','last_name',
        'CI'
    ];
    public function seats(){
        return $this->hasMany(Seat::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
