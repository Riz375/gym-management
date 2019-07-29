@extends('layouts.app')

@section('content')
<h1>Create a new project</h1>
<form method = "POST" action="/projects">
    @csrf()
    <div class="field">
        <label class ="label" for="title">Project Title</label>
        <div class="control">
            <input type="text" class="input" name="title" required>
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea name="description" class="textarea" required></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type ="submit" class="button is-link">Create project</button>
        </div>
    </div>
</form>
@endsection