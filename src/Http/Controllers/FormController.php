<?php

namespace Arthurkushman\NovaApiGenerator\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(Request $request)
    {
        dump($request->post('entity'));
    }
}