<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Krestovina extends Model
{
    use HasFactory;
    protected $table = 'krestoviny';
    protected $fillable = [
        'tiporazmer',
        'catalog_num',
        'size',
        'stopornoe_kolco',
        'total_count',
        'min_count',
    ];
    public function analog()
    {
        return $this->belongsToMany(Analog::class, 'krestovina_analog', 'krestovina_id', 'analog_id');
    }
}
