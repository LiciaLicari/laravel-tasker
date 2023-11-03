@extends('layouts.admin')

@section('main-content')
    @include('partials.taskCreateForm')

    @if (session('message'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>attention!</strong> {{ session('message') }}
        </div>
    @endif


    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">DATE</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr class="">

                        <td scope="row">{{ $task->id }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->status ? 'done' : 'to do' }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm " href="{{ route('tasks.show', $task) }}" role="button"> show
                            </a>
                            <a class="btn btn-info text-white btn-sm " href="{{ route('tasks.edit', $task) }}"
                                role="button"> edit
                            </a>

                            <form action="{{ route('tasks.destroy', $task) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
