<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model {
  use HasFactory;

  protected $guarded = ['id'];

  // Relation one to one
  public function description() {
    return $this->hasOne('App\Models\Description');
  }

  // Relation one to one Inverse
  public function section() {
    return $this->belongsTo('App\Models\Section');
  }

  // Relation one to one Inverse
  public function platform() {
    return $this->belongsTo('App\Models\Platform');
  }

  // Relation one to many
  public function users() {
    return $this->belongsToMany('App\Models\User');
  }

  // Relation one to one Poli
  public function resource() {
    return $this->morphOne('App\Models\Resource', 'resourceable');
  }

  // Relation one to many Poli
  public function comments() {
    return $this->morphMany('App\Models\Comment', 'commentable');
  }

  // Relation one to many Poli
  public function reactions() {
    return $this->morphMany('App\Models\Reaction', 'reactionable');
  }
}