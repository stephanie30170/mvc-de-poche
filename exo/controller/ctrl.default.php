<?php

  // je suis un contrôleur, un chef d'orchestre !

  // d'abord j'appelle un modèle, pour en récupérer une $info
  include("model/model.default.php");

  // puis j'appelle une vue, pour afficher cette $info dans une belle page web
  include("view/view.default.php");

  // et puis voilou, on s'arrête là
  exit;