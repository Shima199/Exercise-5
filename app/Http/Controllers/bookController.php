<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
  public function about () {
return view('subview/about');
}
public function list () {
$books = array(
array("Islamic Banking", "978-3-16-148410-0","Finance",600),
array("Technology In Action, Complete", "895-0-06-256970-1","IT",200),
array("Encyclopedia Of Science", "680-1-84-159877-2","Science",384),
array("The History Of The World", "150-9-88-458293-7","History",466),
array("The Mathematics Devotional", "967-8-55-985321-2","Science and Technology",392),
array("The Physics Behind...", "830-6-97-018962-2","Science",192)
);
return view('subview/list', compact('books'));
}
}
