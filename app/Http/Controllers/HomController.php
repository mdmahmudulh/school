<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomController extends Controller
{
    public function hom(){
        return redirect()->route('hom');
    }
}
