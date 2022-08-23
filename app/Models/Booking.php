<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['datetime_start', 'time', 'bed_id', 'procedure_id'];
    protected $casts = [
        'datetime_start' => 'datetime',
        'datetime_stop' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function bed()
    {
        return $this->belongsTo(Bed::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function procedure()
    {
        return $this->belongsTo(Procedure::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDateLabelAttribute()
    {
        $start = $this->datetime_start->locale('th');
        $thYear = $start->year + 543;
        return "{$start->dayName} {$start->day}/{$start->shortMonthName}/{$thYear}";
    }

    public function getTimeLabelAttribute()
    {
        return $this->datetime_start->hour === 9 ? 'เช้า' : 'บ่าย';
    }

    



}
