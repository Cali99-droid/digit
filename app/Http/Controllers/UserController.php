<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function crearUsuario()
    {
        $roles = Roles::where('id', '!=', 1)->get();
        return view('users.create', compact('roles'));
    }

    public function guardarUsuario(Request $request)
    {
        //return $request;
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed|min:8',
            'rol' => 'required|numeric|min:2|max:4'
        ];

        $messages = [
            'name.required' => 'El nombre del usuario es obligatorio.',
            'name.string' => 'El nombre del usuario deben de ser caracteres válidos.',
            'name.max' => 'El nombre debe de tener a lo mucho 255 caracteres.',
            'rol.required' => 'Es necesario seleccionar una opción del rol',
            'rol.string' => 'Necesita seleccionar una opción válida',
            'rol.min:2' => 'Por favor seleccione una opción válida'
        ];

        $this->validate($request, $rules, $messages);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => $request->rol
        ]);

        $notification = 'Usuario registrado correctamente';
        return redirect()->route('users.create')->with(compact('notification'));
    }

    public function edit(User $user)
    {
        if ($user->rol_id == 1) {
            return redirect()->route('users.index');
        }
        $roles = Roles::where('id', '!=', 1)->get();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|string|email|unique:users,email,' . $id,
            'rol' => 'required|numeric|min:2|max:4'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->rol_id = $request->rol;

        $user->save();
        $notification = 'Información de usuario actualizada correctamente';
        return redirect()->route('users.index')->with(compact('notification'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->rol_id == 1) {
            $notification_error = "El usuario es de tipo de Administrador y no se le puede inhabilitar";
            return redirect()->route("users.index")->with(compact('notification_error'));
        }

        if ($user->status == 1) { //El usuario está activo
            $user->status = 0;
            $mensaje = "El usuario $user->name se deshabilitó correctamente";
        } else {
            $user->status = 1;
            $mensaje = "El usuario $user->name se habilitó correctamente";
        }

        $user->save();

        $notification = $mensaje;
        //return "Eliminado";
        return redirect()->route("users.index")->with(compact('notification'));
    }
}
