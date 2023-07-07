<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\SheetDay;
use App\Models\Seat;

class Fleet extends Model
{
    use HasFactory;
    protected $fillable=[
        'type','bathroom','name','assistant'
    ];
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function sheet_day(){
        return $this->belongsTo(SheetDay::class);
    }
    public function seats(){
        return $this->hasMany(Seat::class);
    }
}
