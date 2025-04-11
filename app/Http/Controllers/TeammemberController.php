<?php

namespace App\Http\Controllers;

use App\Models\Teammember;
use Illuminate\Http\Request;

class TeammemberController extends Controller
{
    public function index ()
    {
        $teammembers = Teammember::all();
        return view ('welcome', compact('teammembers'));
    }
}
