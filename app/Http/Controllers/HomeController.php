<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $data = DB::table('users')->get()->first();
        $projects = DB::table('projects')->get();
        return view('Pages.home',[
            'title' => 'Home',
            'data' => $data,
            'projects' => $projects
        ]);
    }
}
