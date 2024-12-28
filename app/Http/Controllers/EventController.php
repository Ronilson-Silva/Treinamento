<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
   public function list(){
        return view('events.list');
   }

   public function create(){
        return view('events.create');
   }
}
