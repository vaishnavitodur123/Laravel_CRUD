<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\app_crud;

class CurdController extends Controller
{
    public function list(){
        return app_crud::all();
    }
}
