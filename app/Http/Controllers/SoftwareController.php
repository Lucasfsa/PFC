<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Software;

class SoftwareController extends Controller
{
    public function index()
    {
        $softwares = Software::all();
        return view('softwares.softwares', compact('softwares'));
    }
}
