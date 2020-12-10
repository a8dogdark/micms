<?php
class Armado extends Config
{
    public function cabezera()
    {
        echo '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>';
    }
    public function piedepagina()
    {
        echo '</body>
        </html>';
    }
}

?>