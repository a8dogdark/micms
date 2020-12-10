<?php
include('Constantes.php');
include("Config.php");
include("Armado.php");
include("Functions.php");
/**
 * 
 */
//procesamos segun url
if(isset($_GET['id']))
{
    if(is_file(VIEW.$_GET['id'].'.php'))
    {
        include(VIEW.$_GET['id'].'.php');
    }else{
        echo "no es un archivo";
    }
}else{
    include(VIEW.'index.php');
}
?>