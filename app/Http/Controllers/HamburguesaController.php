<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hamburguesa;
class HamburguesaController extends Controller
{
    public function Listar(Request $request){
        return Hamburguesa::all();
    }
}
