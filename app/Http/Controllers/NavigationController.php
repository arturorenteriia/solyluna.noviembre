<?php namespace solyluna\Http\Controllers;

use Illuminate\Support\Facades\Session;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Property;
use solyluna\Service;
use solyluna\TextAssited;
use solyluna\TextContact;
use solyluna\TextIndependent;
use solyluna\TextMemory;
use solyluna\TextWelcome;

class NavigationController extends Controller {

    public function welcome()
    {
        $images = Property::all();
        $textW = TextWelcome::all();
        return view('welcome', compact('textW', 'images'));
    }

    public function independent()
    {
        $textI = TextIndependent::all();
        return view('independent', compact('textI'));
    }

    public function assisted()
    {
        $textA = TextAssited::all();
        return view('assisting', compact('textA'));
    }

    public function memory()
    {
        $textM = TextMemory::all();
        return view('memorycare', compact('textM'));
    }

    public function contactUs()
    {
        $textC = TextContact::all();
        return view('contacto', compact('textC'));
    }

    public function memoryhouses()
    {
        $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
            ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
            ->where('service_id', '=', 2)
            ->orderBy('name', 'ASC')
            ->get();
        return view('Mcasas',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role'));
    }

    public function independenthouses()
    {
        $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
            ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
            ->where('service_id', '=', 3)
            ->orderBy('name', 'ASC')
            ->get();
        return view('Icasas',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role'));
    }

    public function menu($id)
    {
        return "hola";
    }

    public function search(Request $request)
    {
        $service_id = $request->service;
        $city_id = $request->select3;
        $service = Service::findOrFail($service_id);

        if(!empty($service_id) && !empty($city_id)){
            $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'slogan', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
                ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
                ->where('service_id', '=', $service_id)
                ->where('city_id', '=', $city_id)
                ->get();
            $casas = count($properties);
            if($casas)
            {
                return view('searhResorts',compact('properties','service','state', 'city', 'property_type', 'service'));
            }
            else
            {
                Session::flash('message', " No se encontraron Resorts con los valores buscados.");
                return view('searhResorts',compact('properties','service','state', 'city', 'property_type', 'service'));
            }
        }

        if(!empty($service_id))
        {
            $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'slogan', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
                ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
                ->where('service_id', '=', $service_id)
                ->get();
            $casas = count($properties);
            if($casas)
            {
                return view('searhResorts',compact('properties','service','state', 'city', 'property_type', 'service'));
            }
            else
            {
                Session::flash('message', " No se encontraron Resorts con los valores buscados.");
                return view('searhResorts',compact('properties','service','state', 'city', 'property_type', 'service'));
            }
        }

    }
}
