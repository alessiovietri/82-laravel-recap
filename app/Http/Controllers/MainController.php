<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\House;

class MainController extends Controller
{
    public function index() {
        $houses = House::all(); // SELECT * FROM houses
        // $houses = House::where('sold', '<>', false)->get(); // SELECT * FROM houses

        return view('welcome', [
            'houses' => $houses
        ]);
    }
}
