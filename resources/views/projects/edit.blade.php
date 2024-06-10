@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica Progetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}" required>
        </div>
        <div class="form-group">
            <label for="web_site">Sito Web</label>
            <input type="url" class="form-control" id="web_site" name="web_site" value="{{ old('web_site', $project->web_site) }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $project->slug) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $project->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="type_id">Tipologia</label>
            <select
