<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title><?= $title ?></title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

        <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="theme-color" content="#563d7c">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">

    </head>
    <body class="text-center">

        <form class="form-signin" method="post" action="<?= base_url('Cadastro/cadastrar')?>">

            <img class="mb-4" src="../../../assets/user.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Por favor, inscreva-se</h1>

            <label for="inputName" class="sr-only">Nome</label>
            <input type="text" name="nome" id="inputName" class="form-control" placeholder="Seu Nome" required autofocus>
            
            <label for="inputEmail" class="sr-only">Endereço de email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Seu endereço de email" required autofocus>
            
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>

            <label for="inputCountry" class="sr-only">País</label>
            <input type="text" name="pais" id="inputCountry" class="form-control" placeholder="País" required autofocus>
            
            <br>

            <p>
                <a href="<?= base_url("Login")?>">Já possui uma conta?</a>
            </p>


            <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>

            <p class="mt-5 mb-3 text-muted">&copy; 1999-2022</p>

        </form>
    </body>
</html>