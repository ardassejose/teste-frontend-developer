<?php
  include_once("conexao.php");

  //parâmetros
  $nome = $_POST["nomePessoa"];
  $email = $_POST["emailPessoa"];
  $telefone = $_POST["telefone"];
  $descOrcamento = $_POST["descOrcamento"];

  // consulta SQL
  $sql = "INSERT INTO formulario_orcamento (nomePessoa, emailPessoa, telefone, descOrcamento)";
  $sql .= "VALUES ('$nome', '$email', $telefone, '$descOrcamento');";

  echo($sql);

  // conexao
  if ($conn->query($sql) === TRUE) {
  ?>
    <script>
      alert("Registro salvo com sucesso!");
      window.location = "landingPage.php";
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Houve uma falha ao registrar!");
      window.history.back();
    </script>
  <?php
  }
  ?>

?>