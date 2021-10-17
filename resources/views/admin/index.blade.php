<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="{{ url('css/app.css') }}"/>

    <title>SandroDeveloper - Site Control</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="ajax_response"></div>

<div class="dash_login">
    <div class="dash_login_left">
        <article class="dash_login_left_box">
            <header class="dash_login_box_headline">
                <div class="dash_login_box_headline_logo icon-code icon-notext"><small> Sandro<b>Developer</b></small></div>
                <h1>Login</h1>
            </header>

            <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="on">

              <div class="form-group">
                <label for="email">Endereço de email</label>
                <input type="email" class="form-control" name="email" id="email" value="sandroantoniosouza98@gmail.com" placeholder="Seu email">
              </div>
              <div class="form-group">
                <label for="password_check">Senha</label>
                <input type="password" class="form-control"  name="password_check" id="password_check" value="" placeholder="Senha">
              </div>

                <button class="icon-sign-in">Entrar</button>
            </form>

            <footer>
                <p>Desenvolvido por <a href="#">www.<b>sandrodeveloper</b>.com.br</a></p>
                <p>&copy; <?= date("Y"); ?> - Todos os Direitos Reservados</p>
                <p class="">
                    <a target="_blank"
                       class="icon-whatsapp transition text-green"
                       href="https://api.whatsapp.com/send?phone=DDI+DDD+TELEFONE&text=Olá, preciso de ajuda com o login."
                    >Precisa de Suporte?</a>
                </p>
            </footer>
        </article>
    </div>

    <div class=""></div>

</div>

<script src="{{ url('js/app.js') }}"></script>

</body>
</html>