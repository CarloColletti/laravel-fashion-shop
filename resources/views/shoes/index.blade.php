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
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection