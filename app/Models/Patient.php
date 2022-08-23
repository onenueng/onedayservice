<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['hn','full_name','gender','dob','phone'];
    protected $casts = [
        'dob' => 'datetime'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function getDobLabelAttribute()
    {
        $dob = $this->dob->locale('th');
        $thYear = $dob->year + 543;
        return "{$dob->day}/{$dob->shortMonthName}/{$thYear}";
    }







}
