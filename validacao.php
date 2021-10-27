<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: login.html"); exit;
  }
  



        // Tenta se conectar ao servidor MySQL
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);     
  $link = mysqli_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  mysqli_select_db($link,'usuarios') or trigger_error(mysql_error());

  $usuario = mysqli_real_escape_string($link,$_POST['usuario']);
  $senha = mysqli_real_escape_string($link,$_POST['senha']);


  
  // Validação do usuário/senha digitados
  $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysqli_query($link,$sql);
  if (mysqli_num_rows( $query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    
      echo ('teste');        
      
  

  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
      
      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];

      // Redireciona o visitante
      header("Location: main.html"); exit;
  }


  ?>