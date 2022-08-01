<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyClothing;
class MyClothingController extends Controller
{
    public function index(){
        $clothes = MyClothing::get();

       return inertia('GarageSales',[
        'clothes' => $clothes
       ]);
    }
}
