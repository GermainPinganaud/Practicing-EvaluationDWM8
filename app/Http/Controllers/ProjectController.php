<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\State;
use App\Tag;

class ProjectController extends Controller
{
    public function insertOne(Request $request)
    {
      $project = new Project;
      $project->name = $request->name;
      $project->content = $request->content;
      $project->duration = $request->duration;
      $project->budget = $request->budget;
      $project->state_id = $request->state;
      $project->save();
      $project->tags()->attach($request->tags);
      return redirect('/liste');
    }
    public function deleteOne(Request $request, $id)
    {
      $project = Project::find($id);
      $project->tags()->detach();
      $project->delete();
      return redirect('/liste');
    }
    public function updateOne(Request $request, $id)
    {
      $project = Project::find($id);
      $statesAll = State::all();
      foreach ($statesAll as $value) {
        $states[$value->id] = $value->state;
      }
      $tagsAll = Tag::all();
      foreach ($tagsAll as $value) {
        $tags[$value->id] = $value->tag;
      }
      return view('update', ['states' => $states, 'tags' => $tags, 'project' => $project]);
    }
    public function updateOneAction(Request $request)
    {
      dd($project); ici ca deconne !!!!!
      $project = Project::find($id);
      $project->name = $request->name;
      $project->content = $request->content;
      $project->duration = $request->duration;
      $project->budget = $request->budget;
      $project->gender = $request->gender;
      $project->save();
      $project->colors()->detach();
      $project->colors()->attach($request->colors);
      return redirect('/liste');
    }
}
