<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model {
  use HasFactory;

  protected $guarded = ['id'];

  const LIKE = 1;
  const DISLIKE = 2;

  // Relation one to one Inverse
  public function user() {
    return $this->belongsTo('App\Models\User');
  }

  public function reactionable() {
    return $this->morphTo();
  }
}