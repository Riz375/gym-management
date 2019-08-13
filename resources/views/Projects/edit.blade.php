@extends('layouts.app')

@section('content')
<header class="Flex items-center mb-3 py-4">
    <div class="flex justify-between items-center w-full">
        <h1 class="text-grey text-md font-normal"> Edit Projects</h1>
    <a href="/projects" style="background-color: lime;box-shadow: 0 2px 7px 0 lime"class="button_style no-underline py-2 px-5 rounded-lg text-md text-white">Back</a>
    </div>
</header>

<div class="lg:flex lg:flex-wrap -mx-3 mt-3">
    <div class="lg:w-1/3 px-3 pb-6">
        <div class="card bg-white pb-5 pl-5 pr-5 rounded-lg shadow" style="width: 18rem;">
            <div class="card-body">
                <form method ="POST" action="/projects/{{$project->id}}">
                    @method('PATCH')
                    @csrf()
        
                    <div style="background-image: linear-gradient(lime, white);" class="field font-normal text-xl py-4 mb-3 -ml-5 -mr-5 pl-4 pr-5">
                        <label for="title">Title</label>
                        <div class="control">
                            <input style = "border: 1px solid black;padding-inline-start: 4px" type="text" class="input " name="title" placeholder= "Title" value ="{{$project->title}}" required>
                        </div>
                    </div>

                    <div class=" field ">
                    <label class="title"for="description">Description</label>
                        <div class="control">
                            <textarea style ="color: grey;border: 1px solid black;padding-inline-start: 4px" name="description" class="textarea" required>{{$project->description}}</textarea>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="field">
                            <div class="control">
                                <button style="background-color: lime;box-shadow: 0 2px 7px 0 lime" type="submit" class = "button is-link button_style no-underline py-2 px-5 rounded-lg text-md text-white">Update Project</button>
                            </div>
                        </div>
                    </div>
                </form>
                
                <form method ="POST" action="/projects/{{$project->id}}">
                    @method('DELETE')
                    @csrf()

                    <div class="field">
                        <div class="control">
                            <button style="background-color: lime;box-shadow: 0 2px 7px 0 lime" type ="submit" class ="button button_style no-underline py-2 px-5 rounded-lg text-md text-white">Delete Project</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection