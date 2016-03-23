<?php namespace solyluna\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use solyluna\About;
use solyluna\Country;
use solyluna\Http\Requests;
use solyluna\Http\Controllers\Controller;

use Illuminate\Http\Request;
use solyluna\Professional;
use solyluna\Property;
use solyluna\Service;
use solyluna\State;
use solyluna\TextAssited;
use solyluna\TextContact;
use solyluna\TextMedical;
use solyluna\TextIndependent;
use solyluna\TextMemory;
use solyluna\TextWelcome;

class NavigationController extends Controller {

    public function marro()
    {
	 return view('marro');
    }


    public function welcome()
    {
        $images = Property::all();
        $textW = TextWelcome::all();
        return view('welcome', compact('textW', 'images'));
    }
    
    public function aboutus()
    {
        $textA = About::all();
        return view('aboutus', compact('textA'));
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
        $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms','slogan', 'description', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
            ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
            ->where('service_id', '=', 2)
            ->orderBy('name', 'ASC')
            ->get();
        return view('Mcasas',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role'));
    }

    public function independenthouses()
    {
        $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'slogan', 'description', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
            ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
            ->where('service_id', '=', 3)
            ->orderBy('name', 'ASC')
            ->get();
        return view('Icasas',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role'));
    }
    
    public function medicaltourism()
    {
        $textM = TextMedical::all();
        return view('medicaltourism', compact('textM'));
    }
    
    public function professionalServices()
    {
        $textM = Professional::all();
        return view('healthcare', compact('textM'));
    }

    public function allresidences()
    {
       $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'slogan', 'description', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
            ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
             ->orderBy('name', 'ASC')
            ->get();
        return view('all',compact('properties','service','state', 'city', 'property_type', 'user', 'user_role'));
    }
    
    public function search(Request $request)
    {
   
        $service_id = $request->service;
        $country_id = $request->select;
        $state_id = $request->select2;
        $city_id = $request->select3;
       

        //Si viene el service y la ciudad
        if(!empty($service_id) && !empty($city_id)){
        $service = Service::findOrFail($service_id);
        $get_Jalisco = State::findOrFail(51);
        $get_Nayarit = State::findOrFail(52);
        if($city_id == '-- City --')
            {
                if($state_id == 'Jalisco')
                {
                    $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'slogan', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
                        ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
                        ->where('service_id', '=', $service_id)
                        ->where('state_id', '=', $get_Jalisco->id)
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
                elseif($state_id == 'Nayarit')
                {
                    $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'slogan', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
                        ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
                        ->where('service_id', '=', $service_id)
                        ->where('state_id', '=', $get_Nayarit->id)
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

        //Si viene service y state
        else if(!empty($service_id) && !empty($country_id) && !empty($state_id))
        {
        $service = Service::findOrFail($service_id);
        $get_Jalisco = State::findOrFail(51);
        $get_Nayarit = State::findOrFail(52);
            if($state_id == 'Jalisco')
            {
                $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'slogan', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
                    ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
                    ->where('service_id', '=', $service_id)
                    ->where('state_id', '=', $get_Jalisco->id)
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
            elseif($state_id == 'Nayarit')
            {
                $properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'slogan', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
                    ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
                    ->where('service_id', '=', $service_id)
                    ->where('state_id', '=', $get_Nayarit->id)
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
            else
            {
            	$properties = Property::select('id', 'name', 'image', 'status', 'num_bedrooms', 'description', 'slogan', 'country_id', 'service_id', 'state_id', 'city_id', 'property_type_id', 'user_id')
                    ->with('country')->with('service')->with('state')->with('city')->with('property_type')->with('user')
                    ->where('service_id', '=', $service_id)
                    ->where('country_id', '=', 1)
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


        //Si viene solo el service
        else if(!empty($service_id))
        {
        $service = Service::findOrFail($service_id);
      
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
        else
        {
            return redirect()->back();
        }
    }

}