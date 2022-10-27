<?php

namespace App\Http\Controllers;

use App\Models\cadUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class cadUserController extends Controller
{

    public function cadUser(Request $request, cadUser $cadUser){

        
        return view('users\cadUser');

        }
        public function store(Request $request, cadUser $cadUser) {
            //Aqui estou validando o campo nome
            $request->validate([
              

            'email' => 'required|min:8',
            'password' => 'required|min:8|max:10',
            'name' => 'required|min:5',
            'phone' => 'required|min:11',

        ],[
            'email.required' => 'O campo nao pode esta vazio',
            'password.required' => 'O campo nao pode esta vazio',
            'name.required' => 'O campo nao pode esta vazio',
            'phone.required' => 'O campo nao pode esta vazio',
            'email.min' => 'O campo precisa ter mais de 8 caracteres',
            'password.min' => 'O campo precisa ter mais de 8 caracteres',
            'name.min' => 'O campo precisa ter mais de 10 caracteres',
            'phone.min' => 'O campo precisa ter 11 caracteres',
            'password.max' => 'O campo precisa ter no maximo 10 caracteres',       
            ]);
        
            $cadUser->create($request->all());
            return  view('users\cadUser');
     

}
public function superAdmin (Request $request, cadUser $cadUser) {        
        
    $this->authorize('superAdmin');        

    $cadUser = cadUser::find($cadUser->id);
    $cadUser->admin = 1;
    $cadUser->save();
    
    return back();

}
}
