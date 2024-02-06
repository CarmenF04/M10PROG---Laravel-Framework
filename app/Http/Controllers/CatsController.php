<?php

namespace App\Http\Controllers;
use App\Models\dieren;
use Illuminate\Http\Request;
class CatsController extends Controller
{
    public function index()
    {
        return view('cats'); // Zorg ervoor dat je een 'cats.blade.php' view bestand hebt
    }

    public function add() {
        $model = new Dieren();
        $model->field_one = 'mijn data';
        $model->save();
    }

    public function show(dieren $dier)
    {
        dump($dier);
        return view('cats.show', ['cat' => $dier]);
    }


}
