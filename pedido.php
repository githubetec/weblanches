<?php
    if($_POST != null) {
        $opcionais='';
        $lanche=$_POST['lanche'];
        if($_POST['maionese']) {
            $opcionais = 'Maionese ';
        }
        if($_POST['chaddar']) {
            $opcionais = $opcionais . 'Chaddar ';
        }
        if($_POST['bacon']) {
            $opcionais = $opcionais . 'Bacon';
        }
        echo 'Lanche: ' . $lanche . ' - Opcionais: ' . $opcionais;
    }
?>