@extends('layout.template')
@section('main')

 <div class="row">
    <div class="col-md d-flex justify-content-between align-items-center">
        <h1>Cadastro de Usuario</h1>
        <a href="/user" class="btn btn-primary">Voltar para a listagem</a>
    </div>
</div>

@include('layout.messages')

<form action="/user/store" method="POST">

    @csrf

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Nome do Usuario</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex.: Fulano de tal" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Exemplo@gmail.com"required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ex.: 123456789" required>
            </div>
        </div>
         <div class="col-md-4">
            <div class="mb-3">
                <label for="" class="form-label">Confirmação da Senha</label>
                <input type="password" class="form-control" id="password_Confirmation" name="password_Confirmation" placeholder="Ex.: 123456789">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <hr>
            <button type="submit" class="btn btn-success">Registrar usuario</button>
        </div>
    </div>
</form>

@endsection
