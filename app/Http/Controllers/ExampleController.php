<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class ExampleController extends Controller
{

    public function index()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

}
