<?php
    session_start();
    if(!isset($_SESSION['log'])){
        header('location:index.php');
        session_destroy();
    }
?>




<?php

function __autoload($class_name){
    require_once 'class/' .$class_name . '.php';
}
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<html>
<head>

</head>
<body id="gerente">
    <ul>
        <li>
            Transporter Flex
        </li>
    </ul>
    <nav>
        <ul>
            <a href="motorista.php">
                <li >
                    Motorista
                </li>
            </a>

            <a href="passageiro.php">
                <li >
                    Passageiro
                </li>
            </a>
            <a href="corrida.php">
                <li >
                    corrida
                </li>
            </a>
            <a href="">
                <li >
                    <a href="index.php?d"><img src="img/icon/back.png" alt=""></a>
                </li>
            </a>
        </ul>
    </nav>
    <br />
    <p id="local">
        Passageiro
    </p>
    <section>
        <div id="menu">
            <ul>
                <li>
                    <button type="button" data-toggle="modal" data-target="#register">
                        <img src="img/icon/plus.png" alt="" />
                    </button>
                </li>

            </ul>
        </div>
    </section>

    <section id="busca">
        <table>
            <tr class="first">
                <th scope="col">Nome</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">CPF</th>
                <th scope="col">Status</th>
            </tr>
            <?php
            $pass = new passageiro();
            foreach ($pass->findAll() as $key => $value):?>
            <tr>
                <td><?php echo $value->nome;?></td>
                <td><?php echo $value->dat;?></td>
                <td><?php echo $value->cpf;?></td>
                <td><?php echo $value->sexo;?></td>
            </tr>
            <?php endforeach;?>
        </table>
    </section>

    <footer>
        <p>
            Todos Direitos Reservados.
        </p>
    </footer>



    <!-- Modal -->
    <form method="post" action="processa.php" >
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Adicionar motorista</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="nome" value="" placeholder="Nome" class="inp" />
                    <input type="date" name="data" value="" placeholder="Data de Nascimento" class="inp" /><br />
                    <input type="text" name="cpf" value="" placeholder="CPF" class="inp" /><br />
                    <div class="rad">
                        <input type="radio" name="gender" value="Homem" checked> Homem
                        <input type="radio" name="gender" value="Mulher"> Mulher<br>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="cadastrar-passageiro" class="btn btn-primary" value="Cadastrar dados">
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>




<script src="js/jquery-3.2.1.min.js"></script>

<script>



</script>