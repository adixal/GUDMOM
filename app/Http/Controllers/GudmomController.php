<?php

namespace App\Http\Controllers;

use App\gudmom;	
use Illuminate\Http\Request;
use App\Http\Requests\GuardarGudmomsRequest;

class GudmomController extends Controller
{
    //
    public function index()

    {
    

    }

    public function show()
    {
    	return "holi";
    }
    public function guardar (GuardarGudmomsRequest $request)
    { 	
    	//dd($request->all());
    	/*$gudmom=new gudmom;
    	$gudmom->Nombre=$request->input('Nombre'); 
    	$gudmom->Ciudad=$request->input('Ciudad'); 
    	$gudmom->Telefono=$request->input('Telefono'); 
    	$gudmom->Descripcion=$request->input('Descripcion'); 
    	$gudmom->save();*/
    	gudmom::create ($request->all());
    	return redirect(route('home'));

    }
    public function buscando (Request $request)
    {

    		return "funciona";
    }
}


