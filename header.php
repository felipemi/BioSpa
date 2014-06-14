<?php
$pagina = end(explode("/", $_SERVER['PHP_SELF']));
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>
            <?php
            if ($pagina == 'index.php') {
                echo "Dr. Gustavo Coronel. Página Inicial";
            } else if ($pagina == 'sobre.php') {
                echo "Dr. Gustavo Coronel. Sobre";
            } else if ($pagina == 'servicos.php') {
                echo "Dr.Gustavo Coronel. Servicos";
            } else if ($pagina == 'galeria.php') {
                echo "Dr. Gustavo Coronel. Galeria";
            } else if ($pagina == 'contato.php') {
                echo "Dr. Gustavo Coronel. Contato";
            }
            ?>
        </title>
        <meta charset="utf-8">
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="css/jquery.fancybox.css" >
        <script src="js/jquery.js"></script>
        <script src=""></script>
        <script src="js/jquery-migrate-1.1.1.js"></script>
        <script src="js/bgstretcher.js"></script>
        <script src="js/jquery.elastislide.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script language="javascript" type="text/javascript">
            $(document).ready(function() {
                $('#carousel').elastislide({imageW: 300, margin: 20, minItems: 3});
                $('.magnifier').fancybox();
                $(".view").hover(
                        function() {
                            $(this).find("img").stop().animate({opacity: 0.5}, "normal")
                        },
                        function() {
                            $(this).find("img").stop().animate({opacity: 1}, "normal")
                        });
            });
        </script>
        <!--[if lt IE 8]>
       <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
            <![endif]-->
        <!--[if lt IE 9]>   
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
       <script src="js/html5shiv.js"></script>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>  
      <![endif]-->

    </head>
    <body>
        <?php $paginaCorrente = basename($_SERVER['SCRIPT_NAME']); ?>
        <div class="<?php
        if ($paginaCorrente == 'index.php') {
            echo "extra-block1";
        } else {
            echo "extra-block";
        }
        ?>"> 
            <!--==============================row-top=================================-->
            <div class="row-top">
                <div class="main">
                    <ul class="list-soc">
                        <li>
                            <a href="https://www.facebook.com/gustavo.coronel.315?fref=ts" title="Dr.Gustavo Coronel Facebook" target="_blank">
                                <img alt="Icone Dr. Gustavo Coronel Facebook" src="images/icon-dr-Gustavo-Coronel-Facebook.png"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--==============================header=================================-->
            <header>
                <div class="row-nav">
                    <div class="main">
                        <h1 class="logo">
                            <a href="index.php" title="Clínica Bio Spa. Dr. Gustavo Coronel">
                                <img alt="Clínica Bio Spa, Dr. Gustavo Coronel" src="images/logo.png" class="logo-dr-coronel"/>
                            </a>
                        </h1>
                        <nav>
                            <ul class="menu">
                                <li <?php
                                if ($paginaCorrente == 'index.php') {
                                    echo "class='current'";
                                }
                                ?>>
                                    <a href="index.php" title="Início. Clínica Bio Spa, Dr. Gustavo Coronel">Início</a>
                                </li>
                                <li <?php
                                if ($paginaCorrente == 'aparelhos.php') {
                                    echo "class='current'";
                                }
                                ?>>
                                    <a href="tratamentos.php" title="Tratamentos Clínica Bio Spa">Aparelhos</a>
                                </li>
                                <li <?php
                                if ($paginaCorrente == 'sobre.php') {
                                    echo "class='current'";
                                }
                                ?>>
                                    <a href="sobre.php" title="Sobre a Clínica Bio Spa">Sobre</a>
                                </li>
                                <li <?php
                                if ($paginaCorrente == 'tratamentos.php') {
                                    echo "class='current'";
                                }
                                ?>>
                                    <a href="tratamentos.php" title="Tratamentos Clínica Bio Spa">Tratamentos</a>
                                </li>
                                <li <?php
                                if ($paginaCorrente == 'galeria-de-fotos.php') {
                                    echo "class='current'";
                                }
                                ?>>
                                    <a href="galeria-de-fotos.php" title="Galeria de Fotos Clínica Bio Spa">Galeria de Fotos</a>
                                </li>
                                <li <?php
                                if ($paginaCorrente == 'contato.php') {
                                    echo "class='current'";
                                }
                                ?>>
                                    <a href="contato.php" title="Contato Clínica Bio Spa">Contato</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                </div>
            </header>
            <?php
            if ($paginaCorrente == 'index.php') {
                echo "</div>";
            }
            ?>



