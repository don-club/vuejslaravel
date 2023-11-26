<?php

namespace App\Http\Controllers;

use App\Models\TableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function urlData()
    {
        $data = TableModel::all();
        return view('welcome', ['data' => json_encode($data)]);
    }
}
