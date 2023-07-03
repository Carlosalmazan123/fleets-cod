<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\SheetDay;

class Fleet extends Model
{
    use HasFactory;
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function sheet_day(){
        return $this->belongsTo(SheetDay::class);
    }
}
