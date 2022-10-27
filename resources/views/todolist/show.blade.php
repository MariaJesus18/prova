@extends('layouts.layout')

@section('conteudo-principal')
<div class="container pt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <h3 class="h3 border-bottom">
                <i class="bi bi-list-task"></i>
                Task - {{$task->id}}
            </h3 class="h3">
        </div>       
    </div>
    <div class="row align-items-center">
        <div class="col-md-6 offset-md-2">            
            <p class="m-3 fs-4">
               {{$task->description}}
               @if($task->status)
                <span class="badge bg-success">
                    <i class="bi bi-check-square-fill"></i>
                    done
                </span>
                @else 
                <span class="badge bg-warning text-black">
                    pending
                </span>                        
                @endif
            </p>                   
        </div>
        <div class="col-md-2">
            <div class="m-3 fs-4">
                @if ($task->status)
                <span class="badge text-danger">
                    <form action="{{url('/tasks', ['id'=>$task->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link bi bi-x-circle-fill">
                        </button>
                    </form>
                </span>    
                @else
                <span class="badge text-success">
                    <form action="{{url('/tasks', ['id'=>$task->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-link bi bi-check-square-fill">
                        </button>
                    </form>
                    {{-- <i class="bi bi-check-square-fill"></i> --}}
                </span>    
                @endif
            </div>
        </div>
    </div>
</div>
@endsection