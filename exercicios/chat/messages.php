<?php
  if (isset($_POST['nome']) && isset($_POST['mensagem'])) {
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];
    
    // Armazene a mensagem em um arquivo ou banco de dados
    // ...
    
    // Exiba a mensagem no chat
    echo "<p><strong>$nome:</strong> $mensagem</p>";
  }
?>