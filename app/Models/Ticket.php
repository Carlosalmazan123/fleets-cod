<?php

namespace App\Models;

use App\Models\Seat;
use App\Models\User;
use App\Models\Destiny;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'total',
        'schedule',
        'destiny_id'

    ];
    public function seats(){
        return $this->hasMany(Seat::class);
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
