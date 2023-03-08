@extends('layouts.app')

@section('title', 'projects')

@section('content')
<ul class="row d-flex justify-content-center">
    @foreach ($projects as $project)
    <li class="col-2 p-2 m-1 card">
        <h4>{{$project->title}}</h4>
        <img src="{{$project->image}}" class="my-2">
        <div>
            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-small btn-success">Vedi</a>
        </div>
    </li>
    @endforeach
</ul>
@endsection
