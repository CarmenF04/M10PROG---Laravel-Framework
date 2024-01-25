<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dogs'); // Zorg ervoor dat je een 'home.blade.php' view bestand hebt
    }
}
