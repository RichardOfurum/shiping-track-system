<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\profile;
use App\User;



class fetchLocationsController extends Controller
{
    public function fetch(Request $request){

    	$this->validate($request,[
    	'track_code' => 'required'
       
      ]);

    	// dd($request->all());


    	// $profile =  Profile::findOrFail($profile->id);
    	

    	// $profiles = DB::table('profiles')->orderBy('created_at', 'desc')->paginate(5);
    	// $profile = DB::table('profiles')->where('track_code', $request->track_cdode)->get();



  //   	$profiles = DB::table('profiles')->with('locations')->where([
		//     ['active', '=', '1'],
		//     ['track_code', '=', $request->track_code],
		// ])->get();

    	 $profiles = Profile::with('locations')->where([


    	 ['active', '=', '1'],
		    ['track_code', '=', $request->track_code],
		])->get();


		// if ($profile->count() > 0) {
		// 	echo "yes";
		// }

		// dd($profile->id);

		// $profile =  Profile::findOrFail($profile);

		return view('showpackage', compact('profiles'));
    }

    public function sample(){


    	$user = new User();
    	$user->name = "bbb";
    	$user->email = "bbbb@gmail.com";
    	$user->password = bcrypt('bbbbbbbbbbb');
    	$user->save();
    }


}
