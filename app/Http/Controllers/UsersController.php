<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$users = DB::table('users')->orderBy('created_at', 'desc')->get();
    	return view('user.index', compact('users'));
    }

    public function destroy(User $user){
    	$user->delete();
    	return redirect()->back();
    }
}
