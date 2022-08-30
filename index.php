<?php

    session_start();


    //Verificação se há algum dado salvo
    if(isset($_SESSION['id']) && empty($_SESSION['id']) == false)

        echo "Area Restrita";


?>