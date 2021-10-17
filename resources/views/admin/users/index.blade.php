@extends('master.master')

@section('content')

    <section>
        <h1>Index Users</h1>

        <table id="dataTable" class="nowrap stripe" width="100" style="width: 100% !important;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome Completo</th>
                    <th>E-mail</th>
                    <th>Cadastro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                                class="">{{ $user->name }}</a></td>
                        <td><a href="mailto:{{ $user->email }}" class="">{{ $user->email }}</a></td>
                        <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
