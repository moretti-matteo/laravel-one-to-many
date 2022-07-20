@extends('layouts.app');

@section('content')
   <div class="container">
      <div class="card">
         <div class="card-header">
            <h1>Lista Categorie</h1>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-warning">Crea categoria</a>
         </div>
         <div class="card-body">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Name</th>
                     <th scope="col">Slug</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($categories as $category)
                     <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                           <a href="{{ route('admin.categories.show', $category->id) }}"
                              class="btn btn-primary">Visualizza</a>
                           <a href="{{ route('admin.categories.edit', $category->id) }}"
                              class="btn btn-success">Modifica</a>
                           <form style="display: inline-block"
                              action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                              @csrf
                              @method('DELETE')

                              <button type="submit" class="btn btn-danger">Cancella</button>
                           </form>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
