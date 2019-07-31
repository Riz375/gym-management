@extends('layouts.app')

@section('content')
<h1> Edit Projects</h1>
<a href="/projects">Back</a>
<form method ="POST" action="/projects/{{$project->id}}">
    @method('PATCH')
    @csrf()
    <div class="field">
        <label for="title">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder= "Title" value ="{{$project->title}}" required>
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea name="description" class="textarea" required>{{$project->description}}</textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class = "button is-link">Update Project</button>
        </div>
    </div>
</form>


<form method ="POST" action="/projects/{{$project->id}}">
    @method('DELETE')
    @csrf()

    <div class="field">
        <div class="control">
            <button type ="submit" class ="button">Delete Project</button>
        </div>
    </div>
</form>

@endsection