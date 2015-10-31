<?php namespace solyluna\Http\Controllers;

use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\TextIndependent;
use solyluna\TextMemory;
use solyluna\TextWelcome;

class NavigationController extends Controller {

    public function welcome()
    {
        $textW = TextWelcome::all();
        return view('welcome', compact('textW'));
    }

    public function independent()
    {
        $textI = TextIndependent::all();
        return view('independent', compact('textI'));
    }

    public function assisted()
    {
        $textA = TextIndependent::all();
        return view('Assisting', compact('textA'));
    }

    public function memory()
    {
        $textM = TextMemory::all();
        return view('memorycare', compact('textM'));
    }

}
