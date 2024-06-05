@extends('layouts.app')
@section('title', 'Projects')
@section('content')

    <div class="container p-3">
        <div class="row align-items-center">
            <h1 class="col-auto">Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="col-auto ms-auto btn btn-primary">Create</a>
        </div>
    </div>
    <div class="container p-3">
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($projects as $project)
                <tr>
                  <td>{{ $project->id }}</td>
                  <td><a class="link-underline link-underline-opacity-0 fw-bold" href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a></td>                
                  <td>{{ $project->description }}</td>
                  <td><a href="{{ $project->link }}" class="link-underline link-underline-opacity-0">Link alla repository</a></td>
                  <td>
                    {{-- edit e delete --}}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>

@endsection