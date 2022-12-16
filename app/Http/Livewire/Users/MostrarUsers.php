<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarUsers extends Component
{
    use WithPagination;
    
    public $search;



    public function render()
    {
        $users = User::select('users.id', 'users.name','users.email', 'roles.nombre')
                ->join('roles', 'users.rol_id', '=', 'roles.id')
                ->where('users.name','like','%'.$this->search.'%')
                ->orWhere('users.email', 'like', '%'.$this->search.'%')
                ->orWhere('roles.nombre', 'like', '%'.$this->search.'%')
                ->orderBy('users.id', 'ASC')
                ->paginate(5);
                
        return view('livewire.users.mostrar-users', compact('users'));
    }
}
