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

<body onload="dadosUsuario()">
    <div class="header p-3 m-2" style="display: flex">
        <img width="155" height="90" src="https://seeb.org.br/wp-content/uploads/2022/01/logo-1.png">
        <h2 style="margin-left: auto; margin-right: auto">Painel - Usuário Seeb</h2>
    </div>

    <div class=" text-center border p-2 subheader ">
        <div class="row justify-content-center">
            <div class="col-2">
                <a class="subheader " style="text-decoration: none; color: black" href="Cadastro">Cadastro</a>
            </div>
            <div class="col-2">
                <a class="subheader" style="text-decoration: none; color: black" href="noticias">Notícias</a>
            </div>
            <div class="col-2">
                <a class="subheader" style="text-decoration: none; color: black" href="convenios">Convênios</a>
            </div>
        </div>
    </div>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Cadastro do usuário
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container-sm shadow p-3 mb-5 bg-body rounded mt-3 forms-user-data">
                        <form>

                            <h4 class="p-3 mb-2">Cadastro do usuário</h4>

                            <div class="d-flex">
                                <div class="input-group mb-3 mb-2">
                                    <label class="input-group-text" for="pilar">Nome:</label>
                                    <input type="text" class="form-control" name="" id=""></input>
                                </div>

                                <div class="input-group mb-3 mb-2">
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
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Pendências</button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Mensalidade</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Anuidade</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Documentos</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            <script src="./scripts/inputCep.js"></script>
            <script src="./scripts/dados_usuario.js"></script>
</body>

</html>