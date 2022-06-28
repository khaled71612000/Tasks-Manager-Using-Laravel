@extends ('layouts.app')

@section('title')
Todos List
@endsection

@section('content')
<h1 class="text-center my-5">Todos Page</h1>
        <div class="row justify-content-center">

            <div class="col-md-8 offset-md-2">
                <div class="card card">
                    <div class="card-header">
                        Todos
                    </div>
                    <div class="card-body">
                        <!-- key iwth content $ley todos and stirng interpoloe -->
                        <!-- for each for laravel cleaner -->
                        <!-- todo is now an object -->
                        <ul class="list-group">
                            @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{$todo -> name}}
                                <!-- create /todo/the id -->
                                @if(!$todo->completed)
                                <a href="/todos/{{$todo->id}}/complete" class="text-light mx-2 btn-sm btn-warning float-right">Complete</a>
                                @endif
                                <a href="/todos/{{$todo->id}}" class="btn-sm btn-primary float-right">View</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection