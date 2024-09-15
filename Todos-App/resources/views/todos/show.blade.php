@extends('layouts.app')


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
                    <a href="{{ url()->previous()}}" class="btn btn-sm btn-info">Go Back To Todo List</a> <br>
                    <b>Your Todo Title is:</b> {{$todo->title}} <br>
                    <b>Your Todo Description is:</b> {{$todo->description}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection