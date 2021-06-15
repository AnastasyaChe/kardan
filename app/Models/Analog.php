<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Analog extends Model
{
    use HasFactory;
    protected $table = 'analog';
    protected $fillable = [
        'name',
        
    ];
    public function krestovina()
    {
        return $this->belongsToMany(Krestovina::class);
    }
}