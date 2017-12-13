<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Tag;

class CreateController extends Controller
{
    public function index( ) {
      $states = State::all();
      $tags = Tag::all();
      return view ('create', ['states' => $states, 'tags' => $tags]);
    }
}
