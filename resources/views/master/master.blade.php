<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

    {{-- <link rel="stylesheet" href="{{ mix('backend/assets/css/reset.css') }}"/>
    <link rel="stylesheet" href="{{ mix('backend/assets/css/libs.css') }}">
    <link rel="stylesheet" href="{{ mix('backend/assets/css/boot.css') }}"/>
    <link rel="stylesheet" href="{{ mix('backend/assets/css/style.css') }}"/> --}}

    <link rel="stylesheet" href="{{ url('css/app.css') }}"/>

    @hasSection ('css')
        @yield('css')
    @endif
    
    <link rel="icon" type="image/png" href="{{ url(asset('backend/assets/images/favicon.png')) }}"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SandroDeveloper</title>
</head>
<body>

{{-- <div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div> --}}

{{-- <div class="ajax_response"></div> --}}

{{-- @php
    if(\Illuminate\Support\Facades\File::exists(public_path() . '/storage/' . \Illuminate\Support\Facades\Auth::user()->cover)){
        $cover = \Illuminate\Support\Facades\Auth::user()->url_cover;
    } else {
        $cover = url(asset('backend/assets/images/avatar.jpg'));
    }
@endphp --}}

<div class="">
    <aside class="">
        <article class="">
            {{-- <img class="" src="{{ url(asset('backend/assets/images/avatar.jpg')) }}" alt="Avatar" title=""/> --}}

            <h1 class="">
                <a href="#">Nome do usuário logado</a>
            </h1>
        </article>

        <ul class="">
            <li class="">
                <a class="btn btn-primary icon-tachometer" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="">
                <a class="icon-users" href="{{ route('admin.users.index') }}">Usuários</a>
                <ul class="">
                    <li class="">
                        <a href="{{ route('admin.users.index') }}">Ver Todos</a>
                    </li>
                    <li class="">
                        <a href="{{ route('admin.users.create') }}">Criar Novo</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a class="btn btn-primary icon-tachometer" href="{{ route('admin.organisationchart') }}">Organograma - OrganizationChart</a>
            </li>
            <li class="">
                <a class="btn btn-primary icon-tachometer" href="{{ route('admin.orgchart') }}">Organograma - OrgChart</a>
            </li>
            <li class="">
                <a class="btn btn-primary icon-tachometer" href="{{ route('admin.d3orgchart') }}">Organograma - D3-Org-Chart</a>
            </li>
            {{-- <li class=" {{ isActive('admin.products') }}"><a class="icon-cubes" href="{{ route('admin.products.index') }}">Produtos</a>
                <ul class="">
                    <li class="{{ isActive('admin.products.index') }}"><a href="{{ route('admin.products.index') }}">Ver Todos</a></li>
                    <li class="{{ isActive('admin.products.create') }}"><a href="{{ route('admin.products.create') }}">Criar Novo</a></li>
                </ul>
            </li>
            <li class=" {{ isActive('admin.requests') }}"><a class="icon-file-text" href="{{ route('admin.requests.index') }}">Pedidos</a>
                <ul class="">
                    <li class="{{ isActive('admin.requests.index') }}"><a href="{{ route('admin.requests.index') }}">Ver Todos</a></li>
                    <li class="{{ isActive('admin.requests.create') }}"><a href="{{ route('admin.requests.create') }}">Criar Novo</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-reply" href="#">Ver Site</a></li>
            <li class="dash_sidebar_nav_item"><a class="icon-sign-out on_mobile" href="{{ route('admin.logout') }}" target="_blank">Sair</a></li> --}}
        </ul>

    </aside>

    <section class="">
        <div class="">
            <div class="">
                <div class="">
                    <span class=""></span>
                    <h1 class="">
                        <i class=""></i><a href="">Sandro<b>Developer</b></a>
                    </h1>
                    <div class="">
                        <a class="" href="{{ route('admin.logout') }}">Sair</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            @yield('content')
        </div>
    </section>
</div>


{{-- <script src="{{ mix('backend/assets/js/jquery.js') }}"></script>
<script src="{{ url(asset('backend/assets/js/tinymce/tinymce.min.js')) }}"></script>
<script src="{{ mix('backend/assets/js/libs.js') }}"></script>
<script src="{{ mix('backend/assets/js/scripts.js') }}"></script> --}}

<script src="{{ url('js/app.js') }}"></script>

@hasSection ('js')
    @yield('js')
@endif

</body>
</html>