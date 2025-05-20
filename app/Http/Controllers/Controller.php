<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function render()
    {
        return view('products.index', [
            'posting'=>Product::latest()->paginate(10),
        ]);
    }
}
