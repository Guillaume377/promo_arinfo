<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formateur;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formateurs/index', [
            'formateurs' => Formateur::all(),
        ]);
    }

}
