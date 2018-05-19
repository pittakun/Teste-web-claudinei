<?php
session_start();
    if(isset($_GET['d'])){
        session_destroy();
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body id="index">

<form method="post" action="processa.php">
    <nav>
        <ul>
            <li>
                <input name="session-init" type="submit" value="Logar" id="btn-ind" >
            </li>
            <li>
                Senha
                <input type="password" name="senha" value="" />
            </li>
            <li>
                Login
                <input type="text" name="login" value="" />
            </li>
            <li id="logo">
                Transporter Flex
            </li>

        </ul>
    </nav>
</form>
    <hr />

    <section id="slider">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="img/slide1.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Mais conforto para seu dia.</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="img/slide2.jpg" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Mais facilidade para sua vida.</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="img/slide3.jpg" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Pontual como sempre.</h3>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <label> Quem somos?</label>
    <section id="quem-somos">
        <img src="img/logo.jpg" alt="" />
        <p>
            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
        </p>


    </section>
    <footer>
        <p>
            Todos Direitos Reservados.
        </p>
    </footer>
</body>
</html>


<script src="js/jquery-3.2.1.min.js"></script>

<script>



</script>
