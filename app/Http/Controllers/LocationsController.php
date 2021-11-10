<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;


class LocationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){

    	$this->validate($request,[
    		'profile_id' => 'required',
    		'color' => 'sometimes',
    		'place' => 'required',
    
      ]);

    	// dd($request->all());

    	

    	$location = new Location();

    	$location->profile_id = $request->profile_id;
    	$location->color = $request->color;
    	$location->place = $request->place;

    	$location->save();

    	 return redirect(route('profile.show', $request->profile_id));
    }

    public function edit(Location $location){
    	return view('location.edit', compact('location'));
    }

    public function update(Request $request, Location $location){

    	$this->validate($request,[
    		
    		'color' => 'sometimes',
    		'place' => 'required',
    
      ]);

    	$location =  Location::findOrFail($location->id);
    	$location->color = $request->color;
    	$location->place = $request->place;

    	$location->save();

    	return redirect()->back();
    }

    public function destroy(Location $location){
    	$location->delete();
    	return redirect(route('profile.show', $location->profile_id));
    }
}
