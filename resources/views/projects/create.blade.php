@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea Nuovo Progetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="web_site">Sito Web</label>
            <input type="url" class="form-control" id="web_site" name="web_site" value="{{ old('web_site') }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="type_id">Tipologia</label>
            <select class="form-control" id="type_id" name="type_id">
                <option value="">Seleziona una tipologia</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection
