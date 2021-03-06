@extends('layouts.app')

@section('content')


<header class="Flex items-center mb-3 py-4">
    <div class="flex justify-between items-center w-full">
        <h1 class="text-grey text-md font-normal"> My Projects</h1>
    <a href="/projects/create" style="background-color: lime;box-shadow: 0 2px 7px 0 lime"class="button_style no-underline py-2 px-5 rounded-lg text-md text-white">Create a New Project</a>
    </div>
</header>

<div class="introBox" style = "border: 3px solid black;">
    <p> Below are the Projects that have been created, click on a project title to find out more details. </p>
</div>
    
<div class="project-list">
    @forelse ($projects as $project)
    <div class="my-3;">
        <div class="bg-white pb-5 mr-15-pr-48px rounded-lg shadow" style="height: 200px;">
            <h3 style="background-image: linear-gradient(lime, white);" class="font-normal text-xl py-4 mb-3  pl-4 pr-4">
                <a class="project_title text-black no-underline"href="/projects/{{$project->id}}">
                {{ $project->title }}
                </a>
            </h3>

            <div style ="color: grey"class="pl-4 pr-4">{{ str_limit($project->description), 100 }}</div>
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