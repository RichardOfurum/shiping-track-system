<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use App\Profile;
use App\Location;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$profiles = DB::table('profiles')->orderBy('created_at', 'desc')->paginate(5);
    	return view('profile.index', compact('profiles'));
    }

    public function create(){
    	return view('profile.create');
    }

    public function store(Request $request, Profile $profile){

    	$this->validate($request,[
    	'active' => 'sometimes',
        'sender' => 'sometimes',
       	'reciever' => 'sometimes',
       	'destination' => 'sometimes',
       	'track_code' => 'sometimes|unique:profiles,track_code'

		// 'title' => 'required|unique:posts,title'
      ]);

    	

    	$profile = new Profile();

    	$profile->sender = $request->sender;
    	$profile->reciever = $request->reciever;
    	$profile->destination = $request->destination;
    	$profile->track_code = $request->track_code;

    	if (isset($request->active)) {
    		// dd($request->active);
    		$profile->active = $request->active;
    	}else{
    		$profile->active = '0';
    	}

    	$profile->save();

    	$message = "Your Uploade was successful";
    	// return redirect()->back()->with('message');
    	 return redirect(route('profile.show', $profile->id));
    }

    public function active(){
    	//$active_profiles = DB::table('profiles')->where('active', '=', '1')->get();
    	$profiles = DB::table('profiles')->where('active', '=', '1')->orderBy('created_at', 'desc')->paginate(5);
    	return view('profile.index', compact( 'profiles'));
    }

    public function inActive(){
    	$profiles = DB::table('profiles')->where('active', '=', '0')->orderBy('created_at', 'desc')->paginate(5);
    	//$in_Active_profiles = DB::table('profiles')->where('active', '=', '0' || 'Null')->get();

    	// dd($profiles);
    	return view('profile.index', compact( 'profiles'));
    }

    public function show(Profile $profile){
    	return view('profile.show', compact('profile'));
    }

    public function edit(Profile $profile){
    	return view('profile.edit', compact('profile'));
    }


    public function update(Request $request, Profile $profile){

    	$this->validate($request,[
    	'active' => 'sometimes',
        'sender' => 'sometimes',
       	'reciever' => 'sometimes',
       	'destination' => 'sometimes',
       	'track_code' => 'sometimes'
      ]);


    	$profile =  Profile::findOrFail($profile->id);
     	// $post =Post::findOrFail($id);

    	$profile->sender = $request->sender;
    	$profile->reciever = $request->reciever;
    	$profile->destination = $request->destination;
    	$profile->track_code = $request->track_code;

    	if (isset($request->active)) {
    		// dd($request->active);
    		$profile->active = $request->active;
    	}else{
    		$profile->active = '0';
    	}

    	$profile->save();

    	$message = "Your Uploade was successful";
    	
    	$message = "You have Updated a record";
    	return redirect()->back()->with('message');


    }

    public function destroy(Profile $profile){
    	$profile->delete();
    	
    	$message = "You have successfully deleted a record";
    	return redirect(route('admin.profiles'))->with('message');
    }
}
