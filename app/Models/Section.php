<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model {
  use HasFactory;

  protected $guarded = ['id'];

  // Relation one to many Inverse
  private function lessons() {
    return $this->hasMany('App\Models\Lesson');
  }

  // Relation one to one Inverse
  private function course() {
    return $this->belongsTo('App\Models\Course');
  }
}