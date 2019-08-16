@extends('layouts.app')

@section('content')
<h1>Create a new project</h1>
<div class="lg:flex lg:flex-wrap -mx-3 mt-3">
    <div class="lg:w-1/3 px-3 pb-6">
        <div class="card bg-white rounded-lg shadow" style="width: 25rem;">
            <div class="lg:card-body">
                <form method ="POST" action="/projects" >
                    @csrf()
        
                    <div style="background-image: linear-gradient(lime, white);" class="font-normal text-xl py-4 mb-3  pl-4 pr-4">
                        <label for="title">Title</label>
                        <div class="control">
                            <input style = "border: 1px solid black;padding-inline-start: 4px" type="text" class="input " name="title" placeholder= "Title"  required>
                        </div>
                    </div>

                    <div class=" field pl-4 pr-4">
                    <label class="title"for="description">Description</label>
                        <div class="control">
                            <textarea style ="color: grey;border: 1px solid black;padding-inline-start: 4px" name="description" placeholder="Description" class="textarea" required></textarea>
                        </div>
                    </div>
                    <div >
                        <div class="field p-4">
                            <div class="control">
                                <button type="submit" class = "button is-link button_style no-underline py-2 px-5 rounded-lg text-md text-white">Create project</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
@endsection