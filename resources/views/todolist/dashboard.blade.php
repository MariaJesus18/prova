@extends('layouts.layout')

@section('conteudo-principal')
<div class="container pt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <h3 class="h3 border-bottom">
                <i class="bi bi-list-task"></i>
                Task list
            </h3 class="h3">
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <ul class="list-group list-group-flush mt-4">
                @foreach ($tasks as $item)
                <li class="list-group-item d-flex flex-wrap align-items-center">                            
                    <p class="flex-grow-1">
                        <a href="{{url('/tasks', ['id'=>$item->id])}}">
                           {{$item->description}}
                        </a>
                    </p>
                    @if ($item->status)
                    <span class="badge bg-success">
                        <i class="bi bi-check-square-fill"></i>
                        done
                    </span>    
                    @else
                    <span class="badge bg-warning text-black">
                        <i class="bi bi-clock"></i>
                        pending
                    </span>                            
                    @endif
                </li>   
                @endforeach
                
            </ul>

            <div class="d-flex justify-content-center ">
                <button class="btn btn-outline-success m-2">
                    <i class="bi bi-caret-left"></i>
                </button>

                <button class="btn btn-outline-success m-2">
                    <i class="bi bi-caret-right"></i>
                </button>
            </div>
            
        </div>

    </div> {{-- Fim da lista de tarefa --}}
</div>

@endsection