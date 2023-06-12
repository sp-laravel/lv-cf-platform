<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {
  use HasApiTokens;
  use HasFactory;
  use HasProfilePhoto;
  use Notifiable;
  use TwoFactorAuthenticatable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
    'two_factor_recovery_codes',
    'two_factor_secret',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  /**
   * The accessors to append to the model's array form.
   *
   * @var array<int, string>
   */
  protected $appends = [
    'profile_photo_url',
  ];

  // Relation One to One
  public function profile() {
    return $this->hasOne('App\Models\Profile');
  }

  // Relation one to many
  private function courses_dictated() {
    return $this->hasMany('App\Models\Course');
  }

  // Relation one to many
  private function reviews() {
    return $this->hasMany('App\Models\Review');
  }

  // Relation one to many
  public function comments() {
    return $this->hasMany('App\Models\Comment');
  }

  // Relation one to many
  public function reactions() {
    return $this->hasMany('App\Models\Reaction');
  }

  // Relation many to many
  private function courses_enrolled() {
    return $this->belongsToMany('App\Models\Course');
  }

  // Relation many to many
  private function lessons() {
    return $this->belongsToMany('App\Models\Lesson');
  }
}