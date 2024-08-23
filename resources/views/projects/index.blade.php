<x-layout>
    @foreach ($projects as $project)
    <a href="projects/{{ $project['id'] }}">{{ $project['project_name'] }}</a>
    @endforeach
</x-layout>