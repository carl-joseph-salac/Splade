<?php

// app/Http/Controllers/PageController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Protonemedia\Splade\Facades\Splade;

class PageController extends Controller
{
    public function home()
    {
        return Splade::render('example-home');
    }

    public function about()
    {
        return Splade::render('example-about');
    }
}
