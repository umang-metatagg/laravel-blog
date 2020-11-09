<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index()
   {
    $title = "Welcome to Laravel!";
    return view('pages.index')->with('title', $title);
   }
   public function about()
   {
   $title = "About";
    return view('pages.about')->with('title', $title);
   }
   public function service()
   {
      $title = "Service";
      $data = array(
         'title'=>'Service',
         'services'=>['Web Design', 'Programming', 'SEO']
      );
    return view('pages.service')->with($data);
   }

}
