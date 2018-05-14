<?php
include ("configuracion/configuracion.php");

 $seccion = "seccion1";         
                
if ( count($_GET) > 0 ){
    $seccion = $_GET["seccion"];
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Secciones</title>
    </head>
    <body>
        <main class='container'>
            
            <header>
                <h3>Navegación dinámica</h3>
            </header>
            <style>
                .active{
                    color:red;
                }
            </style>
            <nav class="nav justify-content-end nav-tabs">
                <?php
                for ($i=0; $i < count($secciones); $i++){
                    $clase_activa = "";
                    if ($seccion == $secciones[$i]["slug"]){
                        $clase_activa = "active";
                    }
                    print '<a class="nav-link '.$clase_activa.'" href="index.php?seccion=' . $secciones[$i]["slug"] .'">' . $secciones[$i]["menu"] . '</a>';
                }
                ?>
                
                
            </nav>
            
            <section>
                <?php 
                
               
                
                include("secciones/" . $seccion  . ".php");
                ?>
            </section>
            
            <footer>
                <hr/>
                Todos los derechos reservados 2017 &copy;
            </footer>
                
            
        </main>
        
        <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
