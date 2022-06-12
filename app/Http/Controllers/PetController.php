<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /** 
    *Retorna a lista de pets cadastrados 
    *
    *@return Colletion
    */
    public function index()
    {

        return Pet::get();
    }
    public function store(PetRequest $request){
       
        $dadosDoPet = $request->all();
      
       return Pet::create($dadosDoPet);
    }
}
