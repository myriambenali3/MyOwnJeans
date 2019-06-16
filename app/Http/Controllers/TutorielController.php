<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorielController extends Controller
{
    //
    public function getTutoriel()
    {
        return view('tutoriel');
    }
}
