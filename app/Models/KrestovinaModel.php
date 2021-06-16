<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KrestovinaModel extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $tiporazmer;
    /**
     * @var string
     */
    public $catalog_num;
    /**
     * @var string
     */
    public $size;
    /**
     * @var string
     */
    public $stopornoe_kolco;

    /**
     * @var string
     */
    public $total_count;

    public $min_count;
    
    public $analogs;

}