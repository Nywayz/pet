<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ReadController extends Controller
{
    public function reader($series = null, $chapter = null, $page = null){
        if ($series){

        }
        return redirect('/');
    }
}
