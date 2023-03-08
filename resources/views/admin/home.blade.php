@extends('layouts.app')

@section('title', 'home')

@section('content')
<div class="row d-flex align-items-center">
    
    <div class="col-5">
        <h1 class="fw-bold">It's coding time!</h1>
        <p class="mb-4">Perché non tutte le ciambelle escono con il buco, ma le mie si. Perché non tutte le ciambelle escono con il buco, ma le mie si.</p>
        <a href="{{route('admin.projects.index') }}" class="btn btn-small btn-primary-custom text-light fw-semibold">Projects<i class="ms-2 fa-solid fa-arrow-right-long"></i></a>
    </div>
    <div class="col-7 text-center">
        <img src="{{ asset('img/profile.jpeg') }}" width="400">
    </div>
</div>
<div></div>
@endsection