<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project as Project;

class ListController extends Controller
{
    public function index() {

      $projects = Project::all();
      return view('projectList', ['projects' => $projects, ]);
    }
}
