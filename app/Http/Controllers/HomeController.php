<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller {
  public function __invoke() {
    // $courses = "";
    $courses = Course::where('status', '3')->latest('id')->get()->take(12);
    // $courses = Course::where('status', '3')->withCount(['students'])->get();
    // return Course::find(2)->rating;
    // return $courses;
    return view('welcome', compact('courses'));
  }
}