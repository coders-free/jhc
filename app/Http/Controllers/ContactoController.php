<?php

namespace App\Http\Controllers;
use App\Mail\contacto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ContactoController extends Controller
{
    public function index(){
return view('contacto.index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'correo' => 'required',
            'telefono' => 'required'
        ]);

        $correo =new contacto($request->all());
    Mail::to('intelisoftw@gmail.com')->send($correo);
    return redirect()->route('home')->with('info','Mensaje enviado con éxito');
    }

    public function show(){
        return view('contacto.instructor');
    }

   
}