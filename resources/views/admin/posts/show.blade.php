@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="card">
         <div class="card-header">
            <h1>{{ $post->title }}</h1>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Visualizza posts</a>
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success">Modifica posts</a>

         </div>
         <div class="card-body">

            <div>
               {{ $post->content }}
            </div>
         </div>
      </div>
   </div>
@endsection
