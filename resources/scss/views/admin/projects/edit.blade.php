@extends('layouts.app')

@section('title', 'modifica')

@section('content')
<section id="edit">
    <div class="container">
        <form method="POST" action="{{ route('admin.projects.update', $projects->id) }}">
            @method('PUT')
            @csrf
            <div class="row">
            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $projects->title)}}">
            </div>
            <div class="mb-3 col-6">
                <label for="image" class="form-label">Immagine</label>
                <input type="url" class="form-control" id="image" name="image" value="{{old('image', $projects->image)}}">
            </div>
            <div class="mb-3 col-12">
                <label for="content" class="form-label">Paragrafo</label>
                <textarea class="form-control" id="content" name="content" rows="6">{{old('content', $projects->content)}}</textarea>
            </div>
            <div class="mb-3 col-4">
                <label for="collab" class="form-label">Paragrafo</label>
                <input type="text" class="form-control" id="collab" name="collab" value="{{old('collab', $projects->collab)}}">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-small btn-primary-custom text-light me-1">Vai</button>
        </div>
    </form>
    </div>
</section>
@endsection