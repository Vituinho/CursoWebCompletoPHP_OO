<?php

    //tenha um lógica
    try {
        echo '<h3> *** Try *** </h3>';
        // tenha um lógica onde possa ocorrer um potencial erro

        $sql = 'Select * from clientes';
        mysql_query($sql); //Erro


    } catch (Error $e) {
        echo '<h3> *** Catch *** </h3>';
        echo '<p style="color: red">' . $e . '</p>';
    } finally {
        echo '<h3> *** Finally *** </h3>';
    }


?>