@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $project->name }}</h1>
    <p><strong>Descrizione:</strong> {{ $project->description }}</p>
    <p><strong>Sito Web:</strong> <a href="{{ $project->web_site }}" target="_blank">{{ $project->web_site }}</a></p>
    <p><strong>Slug:</strong> {{ $project->slug }}</p>
    @if($project->type)
        <p><strong>Tipologia:</strong> {{ $project->type->name }}</p>
    @endif
</div>
@endsection