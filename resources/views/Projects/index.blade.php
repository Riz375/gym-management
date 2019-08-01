@extends('layouts.app')

@section('content')

<h1> Projects </h1>
{{--  <div style="display: flex; align-items: center; padding: 2;">
    <h1 style="margin-right: auto;">"Jim's Gym"</h1>  --}}
<div class="Flex items-center mb-3">
    <a href="/projects/create">New Project</a>
</div>
    
<div class="flex">
    @forelse ($projects as $project)
    <div class="bg-white mr-3 p-2 rounded shadow w-1/3" style="height: 200px">
    
        <h3>
            <a class="project_title"href="/projects/{{$project->id}}">
            {{ $project->title }}
            </a>
        </h3>

        <div>{{ $project->description }}</div>
    </div>
    <br>
    @empty 
        <div>No Projects Yet.</div>
    @endforelse
</div>

{{--  <ul>
    @foreach ($projects as $project)
        <li>
            
        </li>
    @endforeach
</ul>  --}}
<a href="/">
<p>Welcome Page</p>
</a>

@endsection