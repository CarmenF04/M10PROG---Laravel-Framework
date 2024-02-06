<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function index()
    {
        return view('dogs'); // Zorg ervoor dat je een 'dogs.blade.php' view bestand hebt
    }
}
