<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Seeb</title>
</head>

<style>
    body {
        background-color: beige;
        text-align: center;
    }
</style>

<body>
    <div class="header p-3 m-2">
        <h2>Painel - usuário Seeb</h2>
    </div>

    <div class="container-xxl text-center border p-2 subheader ">
        <div class="row align-items-start">
            <div class="col">
                <a href="Cadastro">Cadastro</a>
            </div>
            <div class="col">
                <a href="noticias">Notícias</a>
            </div>
            <div class="col">
                <a href="convenios">Convênios</a>
            </div>
        </div>
    </div>

    <div class="container-sm shadow p-3 mb-5 bg-body rounded mt-3 forms-user-data">
        <form>

            <h4 class="p-3 mb-2">Dados da pessoa enfermeira</h4>

            <div class="input-group mb-3 mb-2">
                <label class="input-group-text" for="pilar">Nome:</label>
                <input type="text" class="form-select" name="" id=""></input>
            </div>

            <div class="input-group mb-3 mb-2">
                <label class="input-group-text" for="">Filiação:</label>
                <input type="text" class="form-select" name="" id=""></input>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Naturalizadade:</label>
                    <input type="text" class="form-select" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Nacionalidade:</label>
                    <input type="text" class="form-select" name="" id=""></input>
                </div>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Data de nascimento:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Estado civil:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Registro Coren:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">RG:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Órgão de exp.:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Data de exp.:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">CPF:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">CPTS:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">PIS:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
            </div>

            <div class="input-group mb-3 mb-2">
                <label class="input-group-text" for="">End. Resisdência:</label>
                <select class="form-select" name="" id=""></select>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Bairro:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Cidade:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">CEP:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Telefone/Celular:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">E-mail:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
            </div>

            <div class="input-group mb-3 mb-2">
                <label class="input-group-text" for="">Local de trab.1:</label>
                <select class="form-select" name="" id=""></select>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Setor:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text ms-3" for="">Tel.:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text ms-3" for="">E-mail:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
            </div>

            <div class="input-group mb-3 mb-2">
                <label class="input-group-text" for="">Local de trab.2:</label>
                <select class="form-select" name="" id=""></select>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Setor:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text ms-3" for="">Tel.:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text ms-3" for="">E-mail:</label>
                    <select class="form-select" name="" id=""></select>
                </div>
            </div>
            <br>
            <button type="submit" id="" name="" value="Enviar" class="btn btn-success m" style="margin-bottom: 2rem;">Enviar</button>
        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>