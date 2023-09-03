@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>

                    <div>
                      
<h1>Perfil</h1>
    <form action="." method="post">
        <label for="username">Nome de Usuário:</label>
        <input type="text" id="username" name="username" required>
        <br><br> 

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br><br> 

        <label for="file">Selecione um arquivo:</label>
        <input type="file" id="file" name="file" accept=".jpg, .png">
        <br><br> 

        <input type="submit" value="Cadastrar">
        <br><br>
        <br><br> 

        <label for="cep">Digite o CEP:</label>
        <input type="text" name="cep" id="cep" placeholder="Ex: 12345678" required>
        <button type="submit">Salvar</button>
        <br><br>

      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection


