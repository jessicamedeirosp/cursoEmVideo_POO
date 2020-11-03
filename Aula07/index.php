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
        <pre>
        <?php        
        require_once 'Lutador.php';
        require_once 'Luta.php';
        
        $lutadores = array();
        $lutadores[0] = new Lutador('Lutador 1', 'Brasileiro', 20, 1.75 , 90, 11, 2, 2, 1);
        $lutadores[1] = new Lutador('Lutador 2', 'Americano', 21, 1.85 , 92, 11, 2, 2, 1);
        
        $luta1 = new Luta();
        $luta1->marcarLuta($lutadores[0], $lutadores[1]);
        $luta1->lutar();
        $lutadores[0]->status();
        $lutadores[1]->status();
        ?>
    </pre>
    </body>
</html>
