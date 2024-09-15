@extends('layouts.app')

@section('styles')
<style>
    #outer
    {
        width: auto;
        text-align: center;
    }
    .inner
    {
        display: inline-block;
    }
</style>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    @if (Session::has('alart-success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('alart-success')}}
                    </div>
                    @endif

                    @if (Session::has(key: 'alart-info'))
                    <div class="alert alert-info" role="alert">
                        {{Session::get('alart-info')}}
                    </div>
                    @endif

                    @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error')}}
                    </div>
                    @endif
                    
                    <a href="{{route('todos.create')}}" class="btn btn-sm btn-success">Create Todo</a>

                    @if (count($todos)> 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Completed</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($todos as $todo)
                            <tr>
                               <td>{{ $todo->title}}</td>
                               <td>{{ $todo->description}}</td>
                               <td>
                                    @if ($todo->is_completed == 1)
                                    <a href="" class="btn btn-sm btn-success">Completed</a>
                                    @else
                                    <a href="" class="btn btn-sm btn-danger">Incompleted</a>                                    
                                    @endif
                                </td>
                               <td id="outer">
                               <a href="{{route('todos.edit', $todo->id)}}" class="inner btn btn-sm btn-success">Edit</a>
                               <a href="{{route('todos.show', $todo->id)}}" class="inner btn btn-sm btn-success">View</a>
                                <form action="{{route('todos.destroy')}}" method="post" class="inner">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="todo_id" value="{{$todo->id}}">
                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                </form>
                               </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @else
                    <h4>No Todos are created Yet</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection