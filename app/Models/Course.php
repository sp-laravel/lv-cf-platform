<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model {
  use HasFactory;

  protected $guarded = ['id', 'status'];
  // protected $withCount = ['students', 'reviews'];
  protected $withCount = ['audiences'];

  const BORRADOR = 1;
  const REVISION = 2;
  const PUBLICADO = 3;

  // Add new attribute
  public function getRatingAttribute() {
    if ($this->reviews_count) {
      return round($this->reviews->avg('rating'), 1);
    } else {
      return 5;
    }
  }

  // Relation one to many
  private function reviews() {
    return $this->hasMany('App\Models\Review');
  }

  // Relation one to many
  public function requirements() {
    return $this->hasMany('App\Models\Requirement');
  }

  // Relation one to many
  public function goals() {
    return $this->hasMany('App\Models\Goal');
  }

  // Relation one to many
  public function audiences() {
    return $this->hasMany('App\Models\Audience');
  }

  // Relation one to many
  public function sections() {
    return $this->hasMany('App\Models\Section');
  }

  // Relation One to One Inverse
  public function teacher() {
    return $this->belongsTo('App\Models\User', 'user_id');
  }

  // Relation One to One Inverse
  public function level() {
    return $this->belongsTo('App\Models\Level');
  }

  // Relation One to One Inverse
  public function category() {
    return $this->belongsTo('App\Models\Category');
  }

  // Relation One to One Inverse
  public function price() {
    return $this->belongsTo('App\Models\Price');
  }

  // Relation many to many Inverse
  private function students() {
    return $this->belongsToMany('App\Models\User');
  }

  // Relation one to one Poli
  private function image() {
    return $this->morphOne('App\Models\Image', 'imageable');
  }

  // Relation one to many
  private function lessons() {
    return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
  }
}