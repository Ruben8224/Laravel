<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = []; // Aquí puedes cargar los usuarios desde tu base de datos o de donde sea que los estés obteniendo.
        return view('user.index', compact('users'));
    }
    public function store(Request $request)
    {
        // Aquí puedes agregar la lógica para guardar el nuevo usuario en la base de datos.
        // Por ahora, simplemente redireccionaremos a la página principal.
        return redirect()->route('user.index');
    }
}
