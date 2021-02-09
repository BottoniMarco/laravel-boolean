<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;

class CarController extends Controller
{
        public function index()
    {
        $cars = CarModel::all();
        dd($cars);
        return view('cars');
    }
}
