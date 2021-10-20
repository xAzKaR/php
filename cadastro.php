<?php

/*
    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['cpf']);
        print_r('<br>');
        print_r($_POST['nascimento']);
        print_r('<br>');
        print_r($_POST['sexo']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['telefone']);
        print_r('<br>');
        print_r($_POST['endereco']);
        print_r('<br>');
        print_r($_POST['end_numero']);
        print_r('<br>');
        print_r($_POST['bairro']);
        print_r('<br>');
        print_r($_POST['cidade']);
        print_r('<br>');
        print_r($_POST['estado']);
        print_r('<br>');
        print_r($_POST['cep']);
        print_r('<br>');
        print_r($_POST['termos']);

    }

*/
    include_once("banco.php");
    
    $nome = $_POST['nome'];
    $CPF = $_POST['cpf'];
    $data_nasc = $_POST['nascimento'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $tel_cli = $_POST['telefone'];
    $end_cli = $_POST['endereco'];
    $end_numero = $_POST['end_numero'];
    $b_cli = $_POST['bairro'];
    $cid_cli = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $termos = $_POST['termos'];
    
    
    
    $resultado = mysqli_query($conexao, "INSERT INTO cadastro (nome, CPF, data_nasc, sexo, email, tel_cli, end_cli, end_numero, b_cli, cid_cli, estado, cep, termos)
    VALUES ('$nome', '$CPF', '$data_nasc', '$sexo', '$email', '$tel_cli', '$end_cli', $end_numero, '$b_cli', '$cid_cli', '$estado', '$cep', '$termos')");
       


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Bootstrap 	Online	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">	</script>
	-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Cadastro - Healthy Lieah </title>

    <!-- Bootstrap Local  -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Link Style	-->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/elusive-webfont.css">
    <!-- Animation and JS Scripts -->
    <link href="css/animate.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        .centralizar {
            align-self: center;
            align-content: center;
            text-align: center;
            
        }
        label {
            color: white;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }


        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to left, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">


    <div id="navbar-main">
        <!-- Fixed navbar -->
        <div class="navbar navbar-default nav-dark navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="el-icon-lines"></i>
                    </button>
                    <a class="navbar-brand hidden-xs hidden-sm" href="index.html">
                        <h1> Healthy Lieah </h1>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li> <a href="cadastro.php"> Cadastro </a></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>



    <!-- ==== HEADERWRAP ==== -->
    <div id="headerwrap" id="home" name="Principal">
        <header class="clearfix">
            <h1 class="animated bounceIn">Cadastro</h1>
            <p class="animated slideInLeft">Estamos a disposição para ajuda-lo!</p>
            <p class="animated slideInRight">Sua saúde melhora aqui!</p>

        </header>
    </div><!-- /headerwrap -->



    <main class="container-fluid">
        <section class="row mx-5 mt-3 p-3 mb-3 bg-white rounded">
                <form action="cadastro.php" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <h4 class="mb-3" style="color: white">Dados Pessoais</h4>
                            <div class="col mb-3">
                                <label for="nome" class="form-label">Nome Completo:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome completo" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-4 col-sm-12 mb-3">
                                    <label for="cpf" class="form-label">CPF:</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" placeholder="Somente números" required>
                                </div>
                                <div class="col-lg-4 col-sm-12 mb-3">
                                    <label for="nascimento" class="form-label">Data de Nascimento:</label>
                                    <input type="date" class="form-control" id="nascimento" name="nascimento" required>
                                </div>
                                <div class="col-lg-4 col-sm-12 mb-3">
                                    <label for="sexo" class="form-label">Sexo:</label>
                                    <select class="form-select" id="sexo" name="sexo" required>
                                        <option value="0" selected>Selecione uma opção</option>
                                        <option value="F">Feminino</option>
                                        <option value="M">Masculino</option>
                                        <option value="O">Outro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <label for="email" class="form-label">E-mail:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@dominio.com" required>
                                </div>
                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <label for="telefone" class="form-label">Telefone:</label>
                                    <input type="text" class="form-control" id="telefone" name="telefone" maxlength="20" placeholder="Somente numeros mais o DDD" required>
                                </div>
                            </div>
                            <hr>
                            <div class="col mb-3">
                                <label for="endereco" class="form-label">Endereço:</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-4 col-sm-12 mb-3">
                                    <label for="end_numero" class="form-label">Número:</label>
                                    <input type="text" class="form-control" id="end_numero" name="end_numero" placeholder="Número da Residência" required>
                                </div>
                                <div class="col-lg-4 col-sm-12 mb-3">
                                    <label for="bairro" class="form-label">Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
                                </div>
                                <div class="col-lg-4 col-sm-12 mb-3">
                                    <label for="cidade" class="form-label">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <label for="estado" class="form-label">Estado:</label>
                                    <select class="form-select" id="estado" name="estado" required>
                                        <option value="" selected>Selecione uma opção</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <label for="cep" class="form-label">CEP:</label>
                                    <input type="text" class="form-control" id="cep" name="cep" placeholder="Somente números" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-10 col-sm-12 mb-3 centralizar">
                                <input type="submit" value="Cadastrar" name="submit" id="submit" class="btn btn-primary btn-lg">
                            </div>
                            <div class="col-lg-10 col-sm-12 mb-3 form-check centralizar">
                                <input type="checkbox" name="termos" id="termos" class="form-check-input" required>
                                <label for="termos" class="termos">
                                    <a href="termo-privacidade.html" target="_blank" style="color: white">Termos de Privacidade</a> |
                                    <a href="termo-de-uso.html" target="_blank" style="color: white">Termos de Uso</a>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </form>
        </section>
    </main>

    <div id="footerwrap">
        <div class="container">
            <div class="btt-wrapper fade-down"> <a href="#navbar-main"> <i class="el-icon-chevron-up"> </i></a></div>
            <ul id="footer-social" class="fade-down">
                <li><a href="#" target="_blank" title="Nos siga"><i class="el-icon-twitter"></i></a></li>
                <li><a href="#" target="_blank" title="Nos siga"><i class="el-icon-facebook"></i></a></li>
                <li><a href="#" target="_blank" title="Nos siga"><i class="el-icon-googleplus"></i></a></li>
                <li><a href="#" target="_blank" title="Nos siga"><i class="el-icon-flickr"></i></a></li>
                <li><a href="#" target="_blank" title="Nos siga"><i class="el-icon-youtube"></i></a></li>
                <li><a href="#" target="_blank" title="Nos siga"><i class="el-icon-rss"></i></a></li>
            </ul>
            <h4 class="fade-up"> Created by xAzKaR </a> - Copyright 2021 </h4>
        </div>
    </div>


    <!-- Bootstrap e JavaScript
    ================================================== -->
    <!-- Adicionar sempre no final para o carregamento ser mais rápido -->
    <script src="js/valida-form.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
</body>

</html>