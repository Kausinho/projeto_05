<!DOCTYPE html>
<html>
<head>
    <title>Projeto 05</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
</head>
<body>
    <header style="border-bottom: 3px solid #EB2D2D">
        <div class="container">
            <div class="logo">
                <img src="images/logo.jpg" />
            </div><!--logo-->

            <nav class="desktop">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="venda">Vendas</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            
            <nav class="mobile">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="venda">Vendas</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
                </ul>
            </nav><!--mobile-->
            <div class="clear"></div><!--clear-->
        </div><!--container-->
    </header>

<?php
    if(isset($_GET['url'])){
        if(file_exists($_GET['url']).'.html'){
            include($_GET['url'].'.html');
        }else{
            include('404.html');
        }
    }else{
        include('home.html');
    }

?>

<footer>
        <div class="container">
            <nav>
                <ul>
                    <li><a style="color: #EB2D2D;" href="home">Home</a></li>
                    <li><a href="venda">Vendas</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a goto="contato" href="">Contato</a></li>
                </ul>
            </nav>
            <p>Todos os direitos reservados</p>
            <div class="clear"></div><!--clear-->
        </div><!--container-->
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>