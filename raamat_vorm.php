<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 08/01/2018
 * Time: 12:37
 */

function raamatuVorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Pealkiri: <input type="text" name="title"><br />
            Autor: <input type="text" name="author"><br />
            Trükikoda: <input type="text" name="print"><br />
            Seisund: <input type="text" name="status"><br />
            <input type="submit" value="Salvesta!">
        </form>
        
    ';
}