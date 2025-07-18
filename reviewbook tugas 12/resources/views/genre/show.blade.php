@extends('layouts.app')

@section('content')
<h1>Genre Detail</h1>
<p>Name: {{ $genre->name }}</p>
<p>Description: {{ $genre->description }}</p>
<a href="{{ route('genre.index') }}">Back to list</a>
@endsection
