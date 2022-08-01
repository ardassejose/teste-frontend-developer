<<<<<<< HEAD
<?php
  // parâmetros de conexão
  define('HOST','localhost');
  define('USER', 'root');
  define('PASSWORD', '');
  define('DB', 'landing_page');

  //criar objeto de conexão
  $conn = new mysqli(HOST, USER, PASSWORD, DB);

  if ($conn -> connect_error){
    die('Falha na conexão com banco de dados');
  }
  // echo "Conectado com sucesso";
=======
<?php
  // parâmetros de conexão
  define('HOST','localhost');
  define('USER', 'root');
  define('PASSWORD', '');
  define('DB', 'landing_page');

  //criar objeto de conexão
  $conn = new mysqli(HOST, USER, PASSWORD, DB);

  if ($conn -> connect_error){
    die('Falha na conexão com banco de dados');
  }
  // echo "Conectado com sucesso";
>>>>>>> 04d6be23b7693450db58e05670c0f3446251254b
?>