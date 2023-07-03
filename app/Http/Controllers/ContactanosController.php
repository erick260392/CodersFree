<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMail;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //
    public function index(){

        return view('contactanos.index');

    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'mail'=> 'required|email',
            'mensaje'=>'required'

        ]);

        $correo = New ContactanosMail($request->all());

        Mail::to('erickliconamorales2016@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info','Mensaje Enviado');

    }
}
