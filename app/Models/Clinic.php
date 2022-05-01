<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name'];

    public function procedures()
    {
        return $this->hasMany(Procedure::class); // 'App\Models\Procedure'
    }

    public function bookings()
    {
        return $this->belongsTo(Booking::class);
    }

}
