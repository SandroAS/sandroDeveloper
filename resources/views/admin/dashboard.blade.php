@extends('master.master')

@section('content')
    <div style="flex-basis: 100%;">
        <section class="">
            <header class="">
                <h2 class="icon-tachometer">Dashboard</h2>
            </header>

            <div class="">
                <section class="">
                    <article class="">
                        <h4 class="icon-users">Usuários</h4>
           
                        <p><b>Administradores:</b> </p>
            
                        <p><b>Visitantes:</b> </p>
                        
                        <p><b>Total:</b> </p>
                    </article>
                </section>
            </div>
        </section>

        <section class="" style="margin-top: 40px;">
            <header class="">
                <h2 class="icon-tachometer">Campo 1</h2>
            </header>

            <div class="">
                <div class="">
                    <table id="dataTable" class="" width="100" style="width: 100% !important;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>campo 1</th>
                                <th>campo 2</th>
                                <th>campo 3</th>
                                <th>campo 4</th>
                                <th>campo 5</th>
                            </tr>
                        </thead>
                        <tbody>
                          {{-- @foreach ($requests as $request)
                            <tr>
                                <td><a href="{{ route('admin.requests.edit', ['request' => $request->id]) }}" class="text-orange">{{ $request->id }}</a></td>
                                <td><a href="{{ route('admin.users.edit', ['user' => $request->ownerObject->id]) }}" class="text-orange">{{ $request->ownerObject->name }}</a></td>
                                <td><a href="{{ route('admin.users.edit', ['user' => $request->acquirerObject->id]) }}" class="text-orange">{{ $request->acquirerObject->name }}</a></td>
                                <td>{{ ($request->sale == true ? 'Venda' : 'Locação') }}</td>
                                <td>{{ $request->start_at }}</td>
                                <td>{{ $request->deadline }} meses</td>
                            </tr>
                          @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="" style="margin-top: 40px;">
            <header class="">
                <h2 class="icon-tachometer">Campo 2</h2>
            </header>

            <div class="">
                <div class="">
                    <div class="">
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
