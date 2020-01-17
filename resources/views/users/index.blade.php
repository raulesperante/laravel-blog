@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-dark text-">
    <tr>
      <th scope="col">IDs</th>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Handle</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  @foreach($users as $user)
      <tbody>
            <th>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->format('d-m-Y')}}</td>
            <td>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-sm text-light ">Editar</a>
            </td>
      </tbody>
  @endforeach
</table>
{{-- Paginacion --}}
{!! $users->render() !!}
@endsection
