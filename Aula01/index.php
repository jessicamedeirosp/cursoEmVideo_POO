<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         require_once 'ContaBanco.php';
         $c1 = new ContaBanco('123','cc','jessica');
         $c1->setSaldo(500);
         print_r($c1->getSaldo());
        ?>
    </body>
</html>
