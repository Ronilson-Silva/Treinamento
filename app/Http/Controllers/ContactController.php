<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();

        return view('contacts.list', ['contacts'=> $contacts]);
    }

    public function create(){
        return view('contacts.create');
    }

    public function store(Request $request){
        $contacts = new Contact;
        $contacts->name = $request->name;
        $contacts->contact = $request->contact;
        $contacts->email = $request->email;
        //dd($request);
        $contacts->save();
        return redirect('contacts/list')->with('msg','Registro salvo com sucesso!');


    }
}
