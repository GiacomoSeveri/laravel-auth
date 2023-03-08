@extends('layouts.app')

@section('title', 'eccoci')

@section('content')
<section id="project">
    <div class="container">
        <div class="row">
            <div class="col-12 my-3 text-center">
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h1 class="m-0">{{ $project->title }}</h1>
                    <div class="d-flex justify-content-between">
                        <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-small btn-primary-custom text-light me-1">Modifica</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="me-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-small btn-primary-custom text-light">Elimina</button>
                        </form>
                        <a href="{{route('admin.projects.index')}}" class="btn btn-small btn-primary-custom text-light">Indietro</a>
                    </div>
                </div>
                <div>
                    <p class="text-start my-5">
                        {{ $project->content }}
                    </p>
                </div>
                <img src="{{ $project->image }}" class="w-100 img-fluid">
                <div class="text-start my-4">
                    <ul>
                        <h6>Collaboratori</h6>
                        <li>{{ $project->collab }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection