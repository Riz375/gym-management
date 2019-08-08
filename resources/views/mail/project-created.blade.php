@component('mail:message')
    #new project: {{ $project->title }}

    {{$project->description}}

    The body of your message.

    @component('mail::button', [url('/projects/'. $project->id)])
    View Project
    @endcommponent

    Thanks,<br>
    {{ config('app.name') }}
    @endcomponent