@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="card-header">
         <h1>Insersci post</h1>
         <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Visualizza categorie</a>

      </div>
      <div class="card-body">
         <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf

            <div class="form-group">
               <label for="title" class="">Nome</label>
               <input type="text" class="form-control" name="name" value="{{ old('name') }}">

            </div>


            <div class="form-group">
               <button type="submit" class="btn btn-primary">Crea</button>

            </div>

         </form>
      </div>
   </div>
@endsection
