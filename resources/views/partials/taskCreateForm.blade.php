<div class="container">
    <div class="row">
        <form action="{{ route('tasks.store') }}" method="post">

            @csrf

            <div class="mb-3">
                <label for="description" class="form-label">Task description</label>
                <textarea class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="task"></textarea>
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <button type="submit" class="btn btn-primary">add task</button>
        </form>
    </div>
</div>
