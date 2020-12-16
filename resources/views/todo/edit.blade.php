@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <h2 class="text-muted py-3">Todo 編集</h2>
            <form style="display: inline;width:10%" action="/todo/{{ $todo->id }}" method="POST">
                @method('PUT')
                @include('parts.todo.input', ['todo' => $todo])
                <button class="btn btn-primary my-2" type="submit">更新</button>
            </form>

            <form style="display: inline;width:10%" action="/todo/{{ $todo->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger delete-btn" type="button" data-toggle="modal" data-target="#delete-modal" data-todo_title="{{ $todo->title }}" data-todo_id="{{ $todo->id }}">
                                <i class="fas fa-trash-alt mr-2"></i>削除
                            </button>
            </form>
            <hr>
            @include('parts.button.back')
        </div>
    </div>
    @include('parts.modal.delete')
@endsection

@section('script')
    <script src="{{ asset('/js/todo/app.js') }}"></script>
@endsection 