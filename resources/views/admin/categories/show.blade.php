@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="card">
         <div class="card-header">
            <h1>Categoria: {{ $category->name }}</h1>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Visualizza categorie</a>
            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-success">Modifica categoria</a>

         </div>
         <div class="card-body">

            <div>
               Nome: {{ $category->name }}
            </div>
         </div>
      </div>
   </div>
@endsection
