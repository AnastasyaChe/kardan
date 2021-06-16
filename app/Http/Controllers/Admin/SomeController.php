<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Krestovina;
use Illuminate\Http\Request;

class SomeController extends Controller
{
     
    public function incrementF(int $krestovinaId)
    {
        echo("<script>console.log('resetUserPlantDone');</script>");
        $krestovina = Krestovina::find( $krestovinaId);
        dd($krestovina);
       
    }
    public function incrementB(int $krestovinaId)
    {
        echo('thjkljh');
       
    }
}
