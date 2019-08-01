@extends('layouts.app')

@section('content')

<h1> Projects </h1>

<br>
<header class="Flex items-center mb-3 py-4">
    <a href="/projects/create" style="color: grey"class="no-underline">Create a New Project</a>
</header>
<br>
<div class="introBox">
    <p> Below are the Projects that have been created, click on a project title to find out more details. </p>
</div>
    
<div class="flex flex-wrap ">
    @forelse ($projects as $project)
    <div class="w-1/3 px-3 pb-6 -mx-3">
        <div class="bg-white p-5 rounded shadow" style="height: 200px">
        
            <h3 class="font-normal text-xl py-4">
                <a class="project_title"href="/projects/{{$project->id}}">
                {{ $project->title }}
                </a>
            </h3>

            <div style ="color: grey">{{ str_limit($project->description), 100 }}</div>
        </div>
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