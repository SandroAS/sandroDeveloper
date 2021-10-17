@extends('master.master')

@section('content')

<section>
  <h1>Create Users</h1>

  <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Nome Completo">
    </div>
    <div class="form-group">
      <label for="email">Endereço de email</label>
      <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Seu email">
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input type="password" class="form-control" name="password" id="password" value="" placeholder="Senha">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</section>

@endsection