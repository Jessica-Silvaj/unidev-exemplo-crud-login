@extends('layout.template')
@section('main')

@include('users.partials.search')

<div class="row">
    <div class="col-md d-flex justify-content-between align-items-center">
        <h1>Listagem de Usuario</h1>
        <a href="/user/create" class="btn btn-success btn-unidev">Cadastrar novo</a>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped mt-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do Usuario</th>
            <th scope="col">E-mail</th>
            <th scope="col" width="150"></th>
          </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)

          <tr>
            <td scope="col"> {{ $user->id }}  </td>
            <td scope="col">{{ $user->name}}</td>
            <td scope="col">{{ $user->email}}</td>

            <td scope="col" width="150"></td>
          </tr>

          @endforeach
        </tbody>
      </table>

      <div class="mt-5">
          {{ $users->links()}}
      </div>
</div>
@endsection
