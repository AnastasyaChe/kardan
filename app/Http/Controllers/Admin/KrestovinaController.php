<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Krestovina;
use App\Models\KrestovinaModel;
use Illuminate\Http\Request;

class KrestovinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $krestovins = [];
        $krestoviny = Krestovina::get();
        foreach($krestoviny as $krestovina) {
            $krestovinItem = new KrestovinaModel();
            $krestovinItem->id = $krestovina['id'];
            $krestovinItem->tiporazmer = $krestovina['tiporazmer'];
            $krestovinItem->catalog_num = $krestovina['catalog_num'];
            $krestovinItem->size = $krestovina['size'];
            $krestovinItem->stopornoe_kolco = $krestovina['stopornoe_kolco'];
            $krestovinItem->total_count = $krestovina['total_count'];
            $analogList = '';
         foreach($krestovina->analog as $item) {
         $analogList .= $item['name'] . " ";
         }
         $krestovinItem->analogs = $analogList;  
         $krestovins[] = $krestovinItem;
        }

                    
        return view('admin.index', ['krestoviny' => $krestovins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $krestovinaId)
    {
       dd($krestovinaId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
}
