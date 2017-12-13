<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  public $timestamps = false;
  public function state()
  {
    return $this->belongsTo('App\State');
  }

  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }
}
