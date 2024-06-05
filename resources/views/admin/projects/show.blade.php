@extends('layouts.app')
@section('title', 'Project')
@section('content')

    <div class="container p-3">
        <div class="row align-items-center">
            <h1 class="col-auto">Project: {{ $project->title }} </h1>
            <a href="{{ route('admin.projects.edit', $project) }}" class=" col-auto btn btn-secondary ms-auto">Modify</a>
        </div>
    </div>
    <div class="container p-3">
        <p><strong>Type of the project: </strong>{{ $project->type ? $project->type->name : 'Nessun tipo' }}</p>
        <div class="fs-3"><strong>Description: </strong>{{ $project->description }}</div>
    </div>

@endsection