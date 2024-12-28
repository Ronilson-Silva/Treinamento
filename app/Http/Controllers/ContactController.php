<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view('contacts.create');
    }
    public function list(){
        return view('contacts.list');
    }
}
