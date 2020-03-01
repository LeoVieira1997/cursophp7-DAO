<?php

    require_once 'config.php';

    $leo = new Usuario();

    $leo->loadById(1);

    echo $leo;
