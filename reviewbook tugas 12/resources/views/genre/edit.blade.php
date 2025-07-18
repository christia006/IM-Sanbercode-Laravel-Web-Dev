@extends('layouts.app')

@section('content')
<h1>Edit Genre</h1>
<form action="{{ route('genre.update', $genre->id) }}" method="POST">
  @csrf
  @method('PUT')
  <p>Name: <input type="text" name="name" value="{{ $genre->name }}"></p>
  <p>Description: <textarea name="description">{{ $genre->description }}</textarea></p>
  <button type="submit">Update</button>
</form>
@endsection
