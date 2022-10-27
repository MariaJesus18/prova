@extends('layouts.layout')

@section('conteudo-principal')

<div class="container pt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <h3 class="h3 border-bottom">
                <i class="bi bi-list-task"></i>
                Edit - Task - {{$task->id}}
            </h3 class="h3">
        </div>           
    </div>

    <div class="row">
        <div class="col-8 offset-2">
            <form action="{{url('/tasks', ['task'=>$task->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row m-3">
                    <label for="task" class="label">Description</label>
                    <div class="col">
                        <input class="form-control" type="text" name="task" id="task" value="{{$task->description}}">
                    </div>                                                       
                </div>
                <div class="row m-3">
                    <div class="d-grid justify-content-end">
                        <button type="submit" class="btn btn-success btn-sm btn-block">Entrar</button>
                    </div>
                </div> 
            </form>
        </div>
        
    </div>


</div>

@endsection