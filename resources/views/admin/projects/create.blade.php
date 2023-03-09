@extends('layouts.app')

@section('title', 'modifica')

@section('content')
<section id="edit">
    <div class="container">
        <form method="POST" action="{{ route('admin.projects.store', $project->id) }}">
            @csrf
            <div class="row">
            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{old('title', $project->title)}}">
            </div>
            <div class="mb-3 col-6">
                <label for="image" class="form-label">Immagine</label>
                <input type="url" class="form-control" id="image" name="image" value="{{old('image', $project->image)}}">
            </div>
            <div class="mb-3 col-12">
                <label for="content" class="form-label">Paragrafo</label>
                <textarea class="form-control" id="content" name="content" rows="6" required>{{old('content', $project->content)}}</textarea>
            </div>
            <div class="mb-3 col-4">
                <label for="collab" class="form-label">Collaborazioni</label>
                <input type="text" class="form-control" id="collab" name="collab" value="{{old('collab', $project->collab)}}">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-small btn-primary-custom text-light me-1">Vai</button>
            <a href="{{route('admin.projects.index')}}" class="btn btn-small btn-primary-custom text-light">Indietro</a>
        </div>
    </form>
    </div>
</section>
@endsection