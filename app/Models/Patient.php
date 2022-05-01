<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['hn','full_name','gender','dob','phone'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }




}
