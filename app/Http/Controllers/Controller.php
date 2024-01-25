<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



// app/Http/Controllers/CatsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function index()
    {
        return view('cats'); // Zorg ervoor dat je een 'cats.blade.php' view bestand hebt
    }
}

// app/Http/Controllers/DogsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function index()
    {
        return view('dogs'); // Zorg ervoor dat je een 'dogs.blade.php' view bestand hebt
    }
}

