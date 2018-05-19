<?php

function __autoload($class_name){
    require_once 'class/' .$class_name . '.php';
}

$mot = new motorista();
$pass = new passageiro();
$user = new usuario();
$cor = new corrida();


if(isset($_POST['cadastrar-motorista'])):


    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $cpf = $_POST['cpf'];
    $carro = $_POST['carro'];
    $ativo = 'ativo';
    $sexo = $_POST['gender'];

    $mot->setNome($nome);
    $mot->setDat($data);
    $mot->setCpf($cpf);
    $mot->setCar($carro);
    $mot->setStatus($ativo);
    $mot->setSex($sexo);

    $mot->insert();
    header("location:motorista.php");
endif;


if(isset($_GET['acao']) && $_GET['acao'] == 'editar'):


    $id = (int)$_GET['id'];
    $status = $_GET['status'];

    if($status == 'ativo'){
        $mot->setStatus('inativo');
    }else{
        $mot->setStatus('ativo');
    }

    $mot->update($id);
header("location:motorista.php");
endif;

if(isset($_POST['cadastrar-passageiro'])):


    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $cpf = $_POST['cpf'];
    $sex = $_POST['gender'];

    $pass->setNome($nome);
    $pass->setDat($data);
    $pass->setCpf($cpf);
    $pass->setSex($sex);

    $pass->insert();
    header("location:passageiro.php");
endif;




if(isset($_POST['cadastrar-corrida'])):

    $id_motorista = (int)$_POST['mm'];
    $id_passageiro = (int)$_POST['p'];
    $valor = (int)$_POST['valor'];


    $cor->setId_motorista($id_motorista);
    $cor->setId_passageiro($id_passageiro);
    $cor->setValor($valor);


    $cor->insert();
    header("location:corrida.php");
endif;



if(isset($_POST['session-init'])):

    $log = (int)$_POST['login'];
    $sen = (int)$_POST['senha'];

    session_start();
    if($log == 'admin' and $sen == 'qwerty' ){
        $_SESSION['log'] = true;
        header("location:corrida.php");
    }else {
        header("location:index.php");
    }



endif;
?>





