<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Seeb</title>
</head>

<style>
    body {
        background-color: beige;
        text-align: center;
    }
</style>

<body onload="dadosUsuario()">
    <div class="header p-3 m-2">
        <h2>Painel - usuário Seeb</h2>
    </div>

    <div class=" text-center border p-2 subheader ">
        <div class="row justify-content-center">
            <div class="col-2">
                <a class="subheader" href="Cadastro">Cadastro</a>
            </div>
            <div class="col-2">
                <a class="subheader" href="noticias">Notícias</a>
            </div>
            <div class="col-2">
                <a class="subheader" href="convenios">Convênios</a>
            </div>
        </div>
    </div>

    <div class="container-sm shadow p-3 mb-5 bg-body rounded mt-3 forms-user-data">
        <form>

            <h4 class="p-3 mb-2">Dados da pessoa enfermeira</h4>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="pilar">Nome:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>

                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Filiação:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
            </div>
            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Naturalizadade:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Nacionalidade:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Data de nascimento:</label>
                    <input type="date" class="form-control" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Estado civil:</label>
                    <select class="form-select" name="" id="">
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="separado">Separado(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                        <option value="viuvo">Viúvo(a)</option>
                    </select>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Registro Coren:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">RG:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Órgão de exp.:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Data de exp.:</label>
                    <input type="date" class="form-control" name="" id=""></input>
                </div>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">CPF:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">CPTS:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">PIS:</label>
                    <input type="number" class="form-control" name="" id=""></input>
                </div>
            </div>
            <div class="d-flex">
                <div class="input-group mb-3 mb-2 cep">
                    <label class="input-group-text" for="">CEP:</label>
                    <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" /></label>
                </div>
                <div class="input-group mb-3 mb-2 ms-3" id>
                    <label class="input-group-text" for="">End. Resisdência:</label>
                    <input type="text" class="form-control" name="rua" id="rua"></input>
                </div>
            </div>
            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" id="bairro"></input>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">Cidade:</label>
                    <input type="text" class="form-control" name="cidade" id="cidade"></input>
                </div>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Telefone/Celular:</label>
                    <input type="number" class="form-control" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2 ms-3">
                    <label class="input-group-text" for="">E-mail:</label>
                    <input type="text" class="form-control" name="" id=""></input>

                </div>
            </div>

            <div class="input-group mb-3 mb-2">
                <label class="input-group-text" for="">Local de trab.1:</label>
                <input type="text" class="form-control" name="" id=""></input>
            </div>

            <div class="d-flex">
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text" for="">Setor:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text ms-3" for="">Tel.:</label>
                    <input type="number" class="form-control" name="" id=""></input>
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
                    <input type="number" class="form-control" name="" id=""></input>
                </div>
                <div class="input-group mb-3 mb-2">
                    <label class="input-group-text ms-3" for="">E-mail:</label>
                    <input type="text" class="form-control" name="" id=""></input>
                </div>
            </div>
            <br>
            <button type="submit" id="" name="" value="Enviar" class="btn btn-secondary btn-lg" style="margin-bottom: 2rem;">Editar</button>
        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="./scripts/inputCep.js"></script>
        <script src="./scripts/dados_usuario.js"></script>
</body>

</html>