@extends('layouts.app')

@section('content')
<h1>Genre List</h1>
<a href="{{ route('genre.create') }}">Add New Genre</a>
@if(session('success'))
  <p>{{ session('success') }}</p>
@endif
<ul>
@foreach ($genres as $genre)
  <li>
    {{ $genre->name }} |
    <a href="{{ route('genre.show', $genre->id) }}">Detail</a> |
    <a href="{{ route('genre.edit', $genre->id) }}">Edit</a> |
    <form action="{{ route('genre.destroy', $genre->id) }}" method="POST" style="display:inline">
      @csrf
      @method('DELETE')
      <button type="submit">Delete</button>
    </form>
  </li>
@endforeach
</ul>
@endsection
