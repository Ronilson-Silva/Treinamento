<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
   public function index(){
     
     $events = Event::all();

        return view('events.list',['events'=>$events]);
   }

   public function create(){
        return view('events.create');
   }

   public function store(Request $request){

      $event = new Event;
      
      if($request->hasFile('image') && $request->file('image')->isValid()){
         $event->title = $request->title;
         $event-> city= $request->city;
         $event-> private= $request->private;
         $event-> descripion= $request->descripion; 
        //encapulu a imagem em uma variavel
         $requestImage = $request->image;
         //Com a função extension retiro a extensão do arquivo
         $extension = $requestImage->extension();
         //renomeio a imagem utilizando a função md5 e getClientOrinalName
         $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;
         //insiro no banco de dados o nome da imagem
         $event->image = $imageName;
         //utilizando o metodo move() movo a imagem para pasta img do projeto
         $requestImage->move(public_path('img'), $imageName);
         // salvo os danos no banco
         $event->save();  
         //retorno para a pagina de listar eventos
         return redirect('/events/list')->with('msg','Evento salvo com sucesso!');
      }else{
         return redirect('/events/list')->with('msg','Imagem não é valida.');
      }
      
      
        
     
      
      
      


   }
}
