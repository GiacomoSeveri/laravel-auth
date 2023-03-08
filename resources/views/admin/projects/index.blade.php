@extends('layouts.app')

@section('title', 'projects')

@section('content')
<div class="row d-flex justify-content-start">
    @foreach ($projects as $project)
    <div class="col-2 p-2 m-1 card">
        <h4 class="text-custom">{{$project->title}}</h4>
        <img src="{{$project->image}}" class="my-2">
        <div>
            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-small btn-success">Vedi</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
