@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <div class="row">
            <form action="{{ route('tasks.update', $task) }}" method="post">

                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label for="description" class="form-label">Task to edit</label>
                    <textarea class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="task">{{ $task->description }}</textarea>
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <button type="submit" class="btn btn-primary">add task</button>
            </form>
        </div>
    </div>
@endsection
