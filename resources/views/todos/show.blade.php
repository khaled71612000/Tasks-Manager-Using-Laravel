@extends ('layouts.app')
@section('title')
Single To do : {{$todo->name}}
@endsection
@section('content')
<h1 class="text-center my-5">
    {{$todo->name}}
</h1>
<div class="card">
    <div class="card-header">
        Details
    </div>
    <div class="card-body">
        {{$todo->description}}
    </div>
    <a href="/todos/{{$todo->id}}/edit" class="btn btn-info">Edit</a>
    <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger">Delete</a>
</div>
@endsection