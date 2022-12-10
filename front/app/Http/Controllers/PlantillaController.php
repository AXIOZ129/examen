<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlantillaController extends Controller
{

    public function index(){
        return view('../layouts/app');
    }
    
}
