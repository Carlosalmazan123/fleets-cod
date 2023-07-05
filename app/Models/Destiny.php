<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Destiny extends Model
{
    use HasFactory;
    protected $fillable=[
        'origin','destiny','price'
    ];
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
