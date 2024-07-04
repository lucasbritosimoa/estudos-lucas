<?php

spl_autoload_register (function ($classNome){
    require_once $classNome . '.php';
  });

  $v[0] = new Video ('Aula 01 PHPoo');
  $v[1] = new Video ('Aula de Java');
  $v[2] = new Video ('Aual de Inglês');

  print_r($v);

  $g[0] = new Gafanhoto ('m4gull', 'Lucas', 27, 'M');
  $g[1] = new Gafanhoto ('Smil3', 'Enoque', 34, 'M');

  print_r($g);

  $vis[0] = new Visualizacao($g[0], $v[2]);

  print_r($vis);