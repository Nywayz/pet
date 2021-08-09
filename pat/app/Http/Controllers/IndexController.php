<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index', [
            'oui'=> 'oui',
            'non'=> 'non',
        ]);
    }

    public function color($color = "FFFFFF")
    {
        return inertia('Color', ['colored' => $color, 'oui' => 'oui']);
    }
}
