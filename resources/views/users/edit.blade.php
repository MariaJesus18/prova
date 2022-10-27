@extends('layouts.layout')

@section('conteudo-principal')

<div class="container pt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <h3 class="h3 border-bottom">
                <i class="bi bi-list-task"></i>
                Perfil de Usuário
            </h3 class="h3">
        </div>       
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">            
            <form action="{{url('/users/update', ['user'=>$user->id])}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="nome" class="label">Nome</label>
                    <div class="col">
                        <input type="nome" class="form-control" placeholder="Digite seu nome" id="name" name="name" value="{{$user->name}}">
                    </div>
                </div>                
                <div class="row mb-3">
                    <label for="password" class="label">Senha</label>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Digite seu email" id="password" name="password">
                    </div>                       
                </div>
                <div class="row mb-3">
                    <label for="password" class="label">Confirme a senha</label>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Digite seu email" id="password_confirmation" name="password_confirmation">
                    </div>
                </div>                    
                <div class="row mb-b3">
                    <div class="d-grid justify-content-end">                            
                        <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

    
@endsection