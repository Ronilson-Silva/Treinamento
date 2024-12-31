<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
class EventController extends Controller
{
   public function index(){
     
      $search = request('search');

      if($search){

         $events = Event::where([
            ['title', 'like', '%'.$search.'%']
         ])->get();
         }else{
            $events = Event::all();
         }
        return view('events.list',['events'=>$events, 'search'=>$search]);
   }

   public function create(){
        return view('events.create');
   }

   public function store(Request $request){

      $event = new Event;
      
      if($request->hasFile('image') && $request->file('image')->isValid()){
         $event->title = $request->title;
         $event->data = $request->data;
         $event-> city = $request->city;
         $event-> private = $request->private;
         $event-> descripion = $request->descripion;
         $event->itens = $request->itens; 

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
      public function show($id){
         
         $event = Event::findOrFail($id);

         $eventOwne = User::where('id', $event->user_id)-first()->toArray();

         return view('events.show',['event' => $event]);
      }

      public function destroy($id){
         Event::findOrFail($id)->delete();
         return redirect('events/list')->with('msg','Evento deletado com sucesso!!');
      }

      public function edit($id){
         $event = Event::findOrFail($id);
         return view('/events/edit',['event'=>$event]);

      }

      public function update(Request $request){
         
         $data = $request->all();
         

         //encapulu a imagem em uma variavel
         $requestImage = $request->image;
         //Com a função extension retiro a extensão do arquivo
         $extension = $requestImage->extension();
         //renomeio a imagem utilizando a função md5 e getClientOrinalName
         $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;
         //insiro no banco de dados o nome da imagem
         $data['image']= $imageName;
         //utilizando o metodo move() movo a imagem para pasta img do projeto
         $requestImage->move(public_path('img'), $imageName);

         Event::findOrFail($request->id)->update($data);
         return redirect('events/list')->with('msg','Evento atualizado com sucesso!!');
      }
   
}
