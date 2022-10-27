<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct () {
        $this->middleware('auth');
        
        //autorização via Policy para resource controller
        $this->authorizeResource(User::class);
    }

    //listar todos os usuários do sistema
    //so admin pode fazer isso
    public function index() {

        $users = User::where('id', '<>', Auth::id())->get();
        return view('users.index',[
            'users' => $users
        ]);
    }

    //definir um usuário como super admin
    public function superAdmin (Request $request, User $user) {        
        
        $this->authorize('superAdmin');        

        $user = User::find($user->id);
        $user->admin = 1;
        $user->save();
        
        return back();

    }


    public function show (Request $request, User $user) {
        return view ('users.show', [
            'user'=>$user
        ]);
    }

    //editar dados
    public function edit(Request $request, User $user) {
        return view('users.edit', [
            'user'=>$user
        ]);
    }

    //salvar dados editados
    public function update(Request $request, User $user) {
        
        $update = User::find($user->id);

        //validação simples
        if ($request->password) {
            $password = $request->password;
            $update->update([
                'name' => $request->name,
                'password' => Hash::make($password)
            ]);
            return redirect(url('users/show', [$update->id]));
        } else {
            return back();
        }
        

    }
   


  
}
