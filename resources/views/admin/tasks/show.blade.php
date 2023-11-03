@extends('layouts.admin')

@section('main-content')
    <div class="row align-items-md-stretch">
        <div class="col-md-12">
            <div class="h-100 p-5 text-white bg-primary border rounded-3">
                <span>The task</span>
                <h2>{{ $task->description }}</h2>
                <p>add: {{ $task->created_at }}</p>
            </div>
        </div>

    </div>
@endsection
