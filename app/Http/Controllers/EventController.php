<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruta;

class EventController extends Controller
{
    public function index(){
    
        return view('welcome');
        }

        public function dashboard(){
            $user=auth()->user();

            $frutas = $user->frutas;
            return view('events.dashboard',['frutas'=>$frutas]);
        }
    
        public function list(){
            $frutas = Fruta::all();
    
            return view('events.list',['frutas'=>$frutas]);
        }
    
        public function create(){
            return view('events.create');
        }
    
        public function store(Request $request){
    
            $fruta = new Fruta;
    
            $fruta->nome=$request->nome;
            $fruta->cor=$request->cor;
            $fruta->sabor=$request->sabor;

            $user=auth()->user();
            $fruta->user_id=$user->id;
            
            $fruta->save();
            return redirect('/');
    
        }
    
        public function edit($id){
            $fruta = Fruta::findOrFail($id);
            return view('events.edit',['fruta'=>$fruta]);
        }
    
        public function update(Request $request){
            Fruta::findOrFail ($request->id)->update($request->all());
            return redirect('/');
        }
    
        public function destroy($id){
            Fruta::findOrFail($id)->delete();
            return redirect('/');
        }
}
