@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <p>Author: {{ $book->author->name }}</p>
        <p>Description: {{ $book->description }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
