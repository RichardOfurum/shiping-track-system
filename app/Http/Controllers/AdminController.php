<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$users = DB::table('users')->get();
    	$profiles = DB::table('profiles')->get();
    	$active_profiles = DB::table('profiles')->where('active', '=', '1')->get();
    	$in_Active_profiles = DB::table('profiles')->where('active', '=', '0')->get();
        return view('admin.index', compact('users','profiles', 'active_profiles', 'in_Active_profiles'));
    }
}
