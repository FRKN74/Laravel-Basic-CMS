<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;



class AdminPageController extends Controller
{
    public function index()
    {
        return view('back.adminpage');
    }

}
