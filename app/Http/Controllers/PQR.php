<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PQR extends Controller
{
    //
    public function ayuda ()
    { 
        return view ('pqr.pqr');
    }
}
