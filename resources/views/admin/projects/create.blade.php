@extends('layouts.app')

@section('title','Add a Project')

@section('content')

<div class="container p-4">
  <h2 class="fs-2">Add a new Project</h2>
</div>

<div class="container p-4">
  <form action="{{ route('admin.projects.store') }}" method="POST">

    @csrf 

    <div class="mb-3">
      <label for="title" class="form-label"><strong>Title of the project</strong></label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Write the title">
    </div>

    <div class="mb-3">
      <label for="link" class="form-label"><strong>Link of the project</strong></label>
      <input type="text" name="link" class="form-control" id="link" placeholder="Write the link to the repository">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label"><strong>Project description</strong></label>
      <textarea class="form-control" name="description" id="description" rows="3" placeholder="Write a description of your project"></textarea>
    </div>


    <button class="btn btn-primary">Add</button>
  </form>
</div>

@endsection