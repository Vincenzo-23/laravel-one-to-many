@extends('layouts.app')
@section('title', 'Project')
@section('content')

    <div class="container p-3">
        <h1>Project: {{ $project->title }} </h1>
    </div>
    <div class="container p-3">
        <div class="fs-3"><strong>Description: </strong>{{ $project->description }}</div>
    </div>

@endsection