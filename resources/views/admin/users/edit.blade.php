@extends('master.master')

@section('content')

<section>
  <h1>Edit Users</h1>

  <form action="{{ route('admin.users.update',['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="hidden" name="id" value="{{ $user->id }}">

    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ?? $user->name }}" placeholder="Seu nome">
    </div>
    <div class="form-group">
      <label for="email">Endereço de email</label>
      <input type="email" class="form-control" name="email" id="email" value="{{ old('email') ?? $user->email }}" placeholder="Seu email">
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input type="password" class="form-control" name="password" id="password" value="" placeholder="Senha">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</section>

@endsection