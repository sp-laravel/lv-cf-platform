<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model {
  use HasFactory;

  protected $guarded = ['id'];

  // Relarion one to many inverse
  public function user() {
    return $this->belongsTo('App\Models\User');
  }

  // Relarion one to many inverse
  public function course() {
    return $this->belongsTo('App\Models\Course');
  }
}