@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header">
            <h1>Modifica: {{ $post->title }}</h1>
            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Visualizza posts</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title" class="">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        value="{{ old('title', $post->title) }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="content" class="">content</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input @error('published') is-invalid @enderror"
                        name="published" {{ old('published', $post->published) ? 'checked' : '' }}>
                    <label for="" class="form-check-label">pubblica</label>
                    @error('published')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Modifica</button>

                </div>

            </form>
        </div>
    </div>
@endsection
