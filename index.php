<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Orbora Systems (FullStack PHP - PHP_M2 Pr&aacute;ctica)</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Hoja de Estilos - CSS -->
        <link rel="stylesheet" href="styles/css/main.css">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">        
        <!-- Fonts Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <!-- Contenedor Global Web -->
        <div class="web">
<?php
            include("header.php");
?>
            <!-- BARRA DE NAVEGACI&Oacute;N  -->
            <nav>
                <div class="container">
                    <div class="navitem"><a href="#">Empresa</a></div>
                    <div class="navitem"><a href="#">Servicios</a></div>
                    <div class="navitem"><a href="#">Proyectos</a></div>
                    <div class="navitem"><a href="#">Localizaci&oacute;n</a></div>
                    <div class="navitem"><a href="#">Contacto</a></div>
                </div>
            </nav>
            <!-- SECCION CONTENIDO IMPORTANTE  -->
            <aside>
                <div class="container">
                    <div class="asideitem" style="background-image:url('images/mantenimiento.jpg');">
                        <button type="button" class="btn btn-secondary">Mantenimiento</button>
                        <br/><br/><br/><br/>
                        <button type="button" class="btn btn-danger btn-sm">Acceder</button>
                    </div>
                    <div class="asideitem" style="background-image:url('images/software.jpg');">
                        <button type="button" class="btn btn-secondary">Software</button>
                        <br/><br/><br/><br/>
                        <button type="button" class="btn btn-danger btn-sm">Acceder</button>
                    </div>
                    <div class="asideitem" style="background-image:url('images/equipo.jpg');">
                        <button type="button" class="btn btn-secondary">Nuestro Equipo</button>
                        <br/><br/><br/><br/>
                        <button type="button" class="btn btn-danger btn-sm">Acceder</button>
                    </div>
                </div>
            </aside>
            <!-- CONTENIDO DE LA P&Aacute;GINA -->
            <article>
                <div class="container">
                    <div class="slateral"></div>
                    <div class="scenter">
                        <img src="images/galleta-orbora.png"/>
                    </div>
                    <div class="slateral"></div>
                </div>
            </article>
<?php            
            include("footer.php");
?>
        </div>            
    </body>
</html>
