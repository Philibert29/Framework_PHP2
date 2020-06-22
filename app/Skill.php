<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //Nom de la competence
    $table->string('name');
    //Une courte description
    $table->string('description');
    //Le logo correspond au nom du fichier qui sera le logo 
    $table->string('logo');

  public function users()
  {
      return $this->belongsToMany('App\User')->withPivot('level');
  }
}
