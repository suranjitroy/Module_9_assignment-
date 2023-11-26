<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(){
        $projects = DB::table('projects')->get();
        return view('Pages.projects',[
            'title' => 'Projects',
            'projects' => $projects
        ]);
    }
}
