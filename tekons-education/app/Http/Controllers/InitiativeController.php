<?php

namespace App\Http\Controllers;

use App\Models\Initiative;
use Illuminate\Http\Request;

class InitiativeController extends Controller
{
    public function index()
    {
        $initiatives = Initiative::all();
        return view('initiatives.index', compact('initiatives'));
    }
}
