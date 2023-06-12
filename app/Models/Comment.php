<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
  use HasFactory;

  protected $guarded = ['id'];

  public function commentable() {
    return $this->morphTo();
  }

  // Relation one to one Inverse
  public function user() {
    return $this->belongsTo('App\Models\User');
  }

  // Relation one to many poli
  public function comments() {
    return $this->morphMany('App\Models\Comment', 'commentable');
  }

  // Relation one to many poli
  public function reactions() {
    return $this->morphMany('App\Models\Reaction', 'reactionable');
  }
}