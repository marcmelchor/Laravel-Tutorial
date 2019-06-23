@extends('layouts.layout')

@section('title')
  <title>Create Project</title>
@endsection

@section('content')

  <h1 class="title">Create a new project</h1>

  <form method="POST" action="/project">
    @csrf

    <div class="field">
      <label class="label" for="title">Project Title</label>

      <div class="control">
        <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}" required>
      </div>
    </div>

    <div class="field">
      <label class="label" for="description">Project Description</label>

      <div class="control">
        <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" required>{{ old('description') }}</textarea>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-link">Create Project</button>
      </div>
    </div>

    @include('layouts.errors')
  </form>

@endsection
