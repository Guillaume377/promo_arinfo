<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diplome;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('diplomes/index', [
            'diplomes' => Diplome::all(),
        ]);
    }
}
