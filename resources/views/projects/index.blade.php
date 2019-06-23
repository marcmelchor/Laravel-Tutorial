@extends('layouts.layout')

@section('title')
  <title>All Projects</title>
@endsection

@section('content')
  <h1 class="title">Projects</h1>

  <ul>
    @foreach ($projects as $project)
    <li>
      <a href="/project/{{ $project->id }}">
        {{ $project->title }}
      </a>
    </li>
    @endforeach
  </ul>
@endsection
