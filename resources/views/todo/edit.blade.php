@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <h2 class="text-muted py-3">Todo 編集</h2>
            <form action="/todo/{{ $todo->id }}" method="POST">
                @method('PUT')
                @include('parts.todo.input', ['todo' => $todo])
                <button class="btn btn-primary my-2" type="submit">更新</button>
            </form>
            
            <form action="/todo/{{ $todo->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt mr-2"></i>削除</button>
            </form>
            <hr>
            @include('parts.button.back')
        </div>
    </div>
@endsection 