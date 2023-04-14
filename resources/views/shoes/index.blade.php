@extends('layouts.app')

@section('content')
<div class="row">
  <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Brand</th>
            <th scope="col">Tipo</th>
            <th scope="col">Taglia</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shoes as $shoe)
        <tr>
            <th scope="row">{{ $shoe->id }}</th>
            <td>{{ $shoe->name }}</td>
            <td>{{ $shoe->brand }}</td>
            <td>{{ $shoe->type }}</td>
            <td>{{ $shoe->size }}</td>
            <td>{{ $shoe->price }} €</td>
            <td> 
              <a class="text-decoration-none mx-2" href="{{ route('shoes.show', $shoe )}}"> <i class="bi bi-eye"> </i> </a> 
              <a class="text-decoration-none" href=""> <i class="bi bi-pencil"> </i></i> </a>
              <a class="text-decoration-none text-danger mx-2" href=""> <i class="bi bi-trash3"> </i> </a>
            
            
            </td>
          

        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection