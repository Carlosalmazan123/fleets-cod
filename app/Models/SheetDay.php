<?php

namespace App\Models;

use App\Models\Fleet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SheetDay extends Model
{
    use HasFactory;
    
    public function fleets(){
        return $this->hasMany(Fleet::class);
    }
}
