<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Http::get('https://jsonplaceholder.typicode.com/users');
        $data = $usuarios->json(); 
        
        return view('home', compact('data'));
    }
}
