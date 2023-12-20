<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add()
    {
        return view('Create');
    }

    public function update_component($id) {
        return view('Update', ['id' => $id]);
    }

    public function update($id, Request $request) {
        $country = Country::find($id);
        $country->name = $request->get('countryName');

        $country->save();

        return [
            'status' => 200,
            'message' => 'Country changed'
        ];
    }

    public function create(Request $request)
    {
        Country::create([
            'name' => $request->get('countryName')
        ]);

        return [
            'status' => 200,
            'message' => 'Country created'
        ];
//        return view('Read');
    }

    public function index()
    {
        return view('Read');
    }
    public function delete($id) {
        $country = new Country;
        $country->destroy($id);
//        $country->save();

        return redirect('/');
    }
}
