<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KrestovinaAnalog extends Model
{
    use HasFactory;
    protected $table = 'krestovina_analog';
    protected $fillable = [
        'krestovina_id',
        'analog_id',
    ];
    public function krestovina() 
    {
        return $this->belongsTo(Krestovina::class,  'krestovina_id', 'id');
    }
    public function analog() 
    {
        return $this->belongsTo(Analog::class,  'id', 'analog_id');
    }
}