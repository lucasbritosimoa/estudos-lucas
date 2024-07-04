<?php

spl_autoload_register(function ($classNome) {
    require_once $classNome . '.php';
});
